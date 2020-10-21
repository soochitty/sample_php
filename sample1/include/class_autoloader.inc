<? php
function_autoload($classname) {
	require_once './classes/'.$classname.'.php';
}