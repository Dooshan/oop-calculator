<?php
declare (strict_types = 1);
include_once 'includes/autoload.inc.php';

?>
  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP CALCULATOR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container w-50">
        <form action="includes/calculator.inc.php" method="POST" class="mt-4">
            <div class="form-group ">
                <label for="first_number">First Number</label>
                <input type="number" class="form-control" name="first_number" id="first_number" placeholder="Enter 1st number">
                <small id="first_number_help" class="form-text text-muted">Please, enter your first number</small>
            </div>

            <div class="form-group">
                <label for="operator">Operator</label>
                <select class="form-control" id="exampleFormControlSelect1" name="operator">
                    <option  value="add">Add</option>
                    <option  value="sub">Subtract</option>
                    <option  value="mul">Multiply</option>
                    <option  value="div">Divide</option>
                </select>
            </div>

            <div class="form-group">
                <label for="second_number">Second Number</label>
                <input type="number" class="form-control" name="second_number" id="second_number" placeholder="Enter 2nd number">
                <small id="second_number_help" class="form-text text-muted">Please, enter your second number</small>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
            
        </form>

        <div class="form-group">
            <div class="form-control  w-25" id="result"></div>
        </div>
    </div>
</body>

</html>