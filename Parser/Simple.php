<?php

namespace Parser;

/**
 * Class Simple
 * @package Parser
 *
 * This class has the responsibility of parsing the expression string into its
 * component operators and operands
 */
class Simple implements Parser {

	/**
	 * @var array of valid operators
	 */
	protected $_validOperators = array(
		'*'
		,'/'
		,'+'
		,'-'
	);

	/**
	 * @param string $expression
	 * @return array
	 */
	public function parse($expression) {

		$result = array();
		$operator = null;
		$operand = '';

		$length = strlen($expression);
		for($i = 0; $i <= $length; $i++) {
			$char = substr($expression, $i, 1);

			if (is_numeric($char)) {
				// This deals with the case where the first character of the expression is an operand
				if (is_null($operator)) {
					$operator = '+';
				}

				$operand .= $char;
			} else if (in_array($char, $this->_validOperators)) {
				// Found a new operand, so deal save the previous operation/operand combo
				$result[$operator][] = $operand;
				$operand = '';
				$operator = $char;
			}
		}

		// Grab the last operand
		$result[$operator][] = $operand;

		return $result;
	}
}
