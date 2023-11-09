<?php	// changed: 22.01.32 (andev-branch)

function stripped_tpl_youarehere($sep = null, $return = false) {
	$tmp = tpl_youarehere($sep, true);
	return substr($tmp, strpos($tmp, '</span>'));
}

function test_a1() {
	return true;
}

function test_a2() {
	return false;
}