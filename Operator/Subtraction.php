<?php

namespace Operator;

/**
 * Class Subtraction
 * @package Operator
 */
class Subtraction implements Operator {
	/**
	 * @param int $total
	 * @param string $operand
	 * @return int
	 */
	public function evaluate($total, $operand) {
		return $total - $operand;
	}
}