<?php

// Calling code will look something like this
$parser = new Parser\Simple();
$operator_factory = new Operator\SimpleFactory();
$calculator = new Calculator($parser, $operator_factory);

try {
	$result = $calculator->evaluate('1 + 2 + 3');
	echo "SUCCESS: ".$result."\n";
} catch (Exception $e) {
	echo "ERROR: ".$e->getMessage()."\n";
}

