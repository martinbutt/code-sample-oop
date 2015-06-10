<?php

namespace Operator;

/**
 * Interface Operator
 * @package Operator
 */
interface Operator {
	/**
	 * @param int $total
	 * @param string $operand
	 * @return int
	 */
	public function evaluate($total, $operand);
}
