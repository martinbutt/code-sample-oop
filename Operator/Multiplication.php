<?php

namespace Operator;

/**
 * Class Multiplication
 * @package Operator
 */
class Multiplication implements Operator {
	/**
	 * @param int $total
	 * @param string $operand
	 * @return int
	 */
	public function evaluate($total, $operand) {
		return $total * $operand;
	}
}