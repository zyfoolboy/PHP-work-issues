<?php
class Test {
	public function foo() {
		echo "function name is foo \n";
	}	
	
	public static function tt() {
		echo "function name is tt \n";
	}
}

function ww() {
	echo "function name is ww \n";
}

$test = new Test;

[$test, 'foo']();
['Test', 'tt']();
'ww'();
?>
