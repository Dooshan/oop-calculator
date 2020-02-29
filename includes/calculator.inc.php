<?php 
declare(strict_types = 1);

use classes\Calculator;

include_once 'autoload.inc.php';

if (isset($_POST['submit'])) {

    $operator = $_POST['operator'];
    $first_number = $_POST['first_number'];
    $second_number = $_POST['second_number'];

    $calculator = new Calculator()
}
else "Please, submit the form!";