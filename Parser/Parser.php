<?php

namespace Parser;

/**
 * Interface Parser
 * @package Parser
 */
interface Parser {
	/**
	 * Parse the expression into its component parts
	 *
	 * Returns an associative array in the format:
	 *
	 * array(
	 *	'operator1' => array(
	 *					'operand1' = x
	 *					,'operand2' = y
	 *					,'operand3' = z
	 *					...
	 *				)
	 *	'operator2' => array(
	 *					'operand1' = x
	 *					,'operand2' = y
	 *					,'operand3' = z
	 *					...
	 *				)
	 *	...
	 * )
	 *
	 * @param string $expression
	 * @return array
	 */
	public function parse($expression);
}
