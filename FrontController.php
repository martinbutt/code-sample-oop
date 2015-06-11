<?php

include('Operator/Operator.php');

include('Operator/Addition.php');
include('Operator/Division.php');
include('Operator/Modulus.php');
include('Operator/Multiplication.php');
include('Operator/Subtraction.php');

include('Operator/Factory.php');
include('Operator/SimpleFactory.php');
include('Operator/AdvancedFactory.php');

include('Parser/Parser.php');
include('Parser/Simple.php');
include('Parser/Advanced.php');

include('Calculator.php');

// Example calling code for a simple calculator
$parser = new Parser\Simple();
$operator_factory = new Operator\SimpleFactory();
$calculator = new Calculator($parser, $operator_factory);

try {
	$result = $calculator->evaluate('1 + 2 + 3');
	echo "SUCCESS: ".$result."\n";
} catch (Exception $e) {
	echo "ERROR: ".$e->getMessage()."\n";
}


// Example calling code for an advanced calculator (with modulus support)
$parser = new Parser\Advanced();
$operator_factory = new Operator\AdvancedFactory();
$calculator = new Calculator($parser, $operator_factory);

try {
	$result = $calculator->evaluate('3 % 2 + 1');
	echo "SUCCESS: ".$result."\n";
} catch (Exception $e) {
	echo "ERROR: ".$e->getMessage()."\n";
}
