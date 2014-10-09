<?php
    if (!isset($_POST['expression'])) {
    	render("Need an expression");
    }

    $exp = $_POST['expression'];

    if ("" == $exp) {
        render("Expression is empty");
    }
    //validate expression
    $ops = ['+', '-', '/', '*', '='];
    foreach($ops as $op) {
    	//can break on first occurence
    	if (false !== strpos($exp, $op)) {
	    $found = true;            
	    break;
        }
    }

    if (!isset($found) || !$found) {
    	render("No operations given");
    }
execute($exp);

function execute($exp)
{
    $out = exec('./../a.out '.$exp);
    render(sprintf("%s\nThe expression was:%s",$out, $exp));
}
function render($msg = "")
{
    readfile('index.html');
    echo $msg;
    exit;
}
?>
