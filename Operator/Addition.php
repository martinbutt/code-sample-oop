<?php

namespace Operator;

/**
 * Class Addition
 * @package Operator
 */
class Addition implements Operator {
	/**
	 * @param int $total
	 * @param string $operand
	 * @return int
	 */
	public function evaluate($total, $operand) {
		return $total + $operand;
	}
}