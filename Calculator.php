<?php

/**
 * Class Calculator
 */
class Calculator {

	/** @var Parser\Parser $_parser */
	protected $_parser;
	/** @var Operator\Factory $_operatorFactory */
	protected $_operatorFactory;

	/**
	 * Constructor with dependency injection
	 *
	 * @param Parser\Parser $parser
	 * @param Operator\Factory $operator_factory
	 */
	public function __construct(Parser\Parser $parser, Operator\Factory $operator_factory) {
		$this->_parser = $parser;
		$this->_operatorFactory = $operator_factory;
	}

	/**
	 * Evaluate the expression
	 *
	 * @param string $expression
	 * @return int
	 */
	public function evaluate($expression) {

		$result = $this->_parser->parse($expression);
		$total = $result['base_operand'];

		foreach ($this->_parser->getOperatorOrder() as $operation) {
			if (isset($result['operands_by_operator'][$operation])) {
				$operator = $this->_operatorFactory->getInstance($operation);

				foreach ($result['operands_by_operator'][$operation] as $operand) {
					$total = $operator->evaluate($total, $operand);
				}
			}
		}

		return $total;
	}
}
