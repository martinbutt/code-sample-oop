<?php

/**
 * Class Calculator
 */
class Calculator {

	protected $_operationOrder = array(
		'*'
		,'/'
		,'+'
		,'-'
		,'^'
	);

	/** @var Parser\Parser $_parser */
	private $_parser;
	/** @var Operator\Factory $_operatorFactory */
	private $_operatorFactory;

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
		$total = 0;

		$operands_by_operation = $this->_parser->parse($expression);

		foreach ($this->_operationOrder as $operation) {
			if (isset($operands_by_operation[$operation])) {
				$operator = $this->_operatorFactory->getInstance($operation);

				if (is_null($total)) {
					$total = array_shift($operands_by_operation);
				}

				foreach ($operands_by_operation[$operation] as $operand) {
					$total = $operator->evaluate($total, $operand);
				}
			}
		}

		return $total;
	}
}