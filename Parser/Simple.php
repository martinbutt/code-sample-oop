<?php

namespace Parser;

/**
 * Class Simple
 * @package Parser
 */
class Simple extends Parser {

	public function getOperatorOrder() {
		return array(
			'*'
			,'/'
			,'+'
			,'-'
		);
	}

}
