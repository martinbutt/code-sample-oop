<?php

namespace Operator;

/**
 * Class Modulus
 * @package Operator
 */
class Modulus implements Operator {
	/**
	 * @param int $total
	 * @param string $operand
	 * @return float
	 */
	public function evaluate($total, $operand) {
		return $total % $operand;
	}
}