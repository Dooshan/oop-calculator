<?php

declare(strict_types=1);
include_once 'autoload.inc.php';

if (isset($_POST['submit'])) {

    $operator = $_POST['operator'];
    $first_number = $_POST['first_number'];
    $second_number = $_POST['second_number'];

    $calculator = new Calculator($operator, (int) $first_number, (int) $second_number);

    try {
        echo $calculator->calculate();
    } catch (TypeError $e) {
        echo "Error!: " . $e->getMessage();
    }
} else "Please, submit the form!";
