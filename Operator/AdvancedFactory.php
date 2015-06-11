<?php

namespace Operator;

/**
 * Class AdvancedFactory
 * @package Operator
 *
 * A factory that also supports modulus
 */
class AdvancedFactory extends SimpleFactory implements Factory {
	/**
	 * @param string $operator
	 * @return Operator
	 * @throws \Exception
	 */
	public function getInstance($operator) {
		if ($operator === '%') {
			return new Modulus();
		} else {
			return parent::getInstance($operator);
		}
	}
}