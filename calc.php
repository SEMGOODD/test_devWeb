<?php
$result = "";
if (isset($_GET["number1"]) && isset($_GET["number2"]) && isset($_GET["op"])) {
    $number1 = $_GET["number1"];
    $number2 = $_GET["number2"];
    $op = $_GET["op"];
    
    if (empty($number1)) {
        $result = "Please enter the first number.";
    } elseif (empty($number2)) {
        $result = "Please enter the second number.";
    } else {
        $number1 = floatval($number1);
        $number2 = floatval($number2);

        if ($op == "+") {
            $result = $number1 + $number2;
        } elseif ($op == "-") {
            $result = $number1 - $number2;
        } elseif ($op == "*") {
            $result = $number1 * $number2;
        } elseif ($op == "/") {
            if ($number2 != 0) {
                $result = $number1 / $number2;
            } else {
                $result = "Error: Division by zero.";
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Simple Calculator</h1>
        <form action="calc.php" method="GET" class="form mt-3">
            <div class="form-group">
                <label for="number1">Enter Number1:</label>
                <input type="number" name="number1" id="number1" class="form-control" >
            </div>      
            <div class="form-group">
                <label for="number2">Enter Number2:</label>
                <input type="number" name="number2" id="number2" class="form-control" >
            </div>
            <div class="form-group">
                <label for="op">Select Operator:</label>
                <select name="op" id="op" class="form-control">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>
        <div class="alert alert-success mt-3" role="alert">
            <?php
                if ($result !== "") {
                    echo "Result: " . htmlspecialchars($result);
                }
            ?>
        </div>
    </div>
</body>
</html>

