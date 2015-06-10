<?php

namespace Operator;

/**
 * Class Division
 * @package Operator
 */
class Division implements Operator {
	/**
	 * @param int $total
	 * @param string $operand
	 * @return float
	 */
	public function evaluate($total, $operand) {
		return $total / $operand;
	}
}