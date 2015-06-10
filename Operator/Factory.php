<?php

namespace Operator;

/**
 * Interface Factory
 * @package Operator
 */
interface Factory {
	/**
	 * @param $operator
	 * @return Operator
	 */
	public function getInstance($operator);
}