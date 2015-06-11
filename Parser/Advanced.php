<?php

namespace Parser;

/**
 * Class Advanced
 * @package Parser
 */
class Advanced extends Parser {

	public function getOperatorOrder() {
		return array(
			'*'
			,'/'
			,'%'
			,'+'
			,'-'
		);
	}

}
