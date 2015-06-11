<?php

namespace Parser;

/**
 * Class Parser
 * @package Parser
 *
 * This class has the responsibility of parsing the expression string into its
 * component operators and operands
 */
abstract class Parser {

	/**
	 * @return array of operators supported in the order they should be evaluated
	 */
	abstract public function getOperatorOrder();

	/**
	 * Parse the expression into its component parts
	 *
	 * Returns an associative array in the format:
	 *
	 * array(
	 * 		'base_operand' => a
	 * 		, 'operators_by_operand' = array(
	 *			'operator1' => array(
	 *					'operand1' = x
	 *					,'operand2' = y
	 *					,'operand3' = z
	 *					...
	 *			)
	 *			,'operator2' => array(
	 *					'operand1' = x
	 *					,'operand2' = y
	 *					,'operand3' = z
	 *					...
	 *			)
	 *			...
	 * 		)
	 * )
	 *
	 * @param string $expression
	 * @return array
	 */
	public function parse($expression) {

		$base_operand = null;
		$operands_by_operator = array();
		$operator = null;
		$operand = '';

		$length = strlen($expression);
		for($i = 0; $i <= $length; $i++) {
			$char = substr($expression, $i, 1);

			if (is_numeric($char)) {
				if (is_null($base_operand)) {
					if ($operator === '-') {
						$base_operand = -$char;
					} else {
						$base_operand = $char;
					}
				} else {
					$operand .= $char;
				}


			} else if (in_array($char, $this->getOperatorOrder())) {
				// Found a new operand, so deal save the previous operation/operand combo
				if (isset($base_operand) && !empty($operand)) {
					$operands_by_operator[$operator][] = $operand;
					$operand = '';
				}
				$operator = $char;
			}
		}

		// Grab the last operand
		$operands_by_operator[$operator][] = $operand;

		return array('base_operand' => $base_operand, 'operands_by_operator' => $operands_by_operator);
	}
}
