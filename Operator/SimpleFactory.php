<?php

namespace Operator;

/**
 * Class SimpleFactory
 * @package Operator
 *
 * Provides a centralized point for instantiating the Operator instances that can easily be mocked out or extended
 */
class SimpleFactory implements Factory {
	/**
	 * @param string $operator
	 * @return Operator
	 * @throws \Exception
	 */
	public function getInstance($operator) {
		if ($operator === '*') {
			return new Multiplication();
		} else if ($operator === '/') {
			return new Division();
		} else if ($operator === '+') {
			return new Addition();
		} else if ($operator === '-') {
			return new Subtraction();
		} else {
			throw new \Exception('Invalid operator "'.$operator.'"');
		}
	}
}