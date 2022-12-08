<?php
    // we load this document once we click submit button
    declare(strict_types = 1);
    include 'class-autoload.inc.php';

    // grab the data
    $oper = $_POST["oper"];
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    // create an object off the class called the calc
    $calc = new Calc($oper, (int)$num2, (int)$num2);

    // run the method which runs the all thing
    try {
        echo $calc->calculator();
    } catch (TypeError $e) {
        echo "Error!: " . $e->getMessage();
    }

?>