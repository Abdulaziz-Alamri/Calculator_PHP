<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    if ($operation === "add") {
        $result = $num1 + $num2;
        echo "Result: $num1 + $num2 = $result";
    } elseif ($operation === "sub") {
        $result = $num1 - $num2;
        echo "Result: $num1 - $num2 = $result";
    } elseif ($operation === "mul") {
        $result = $num1 * $num2;
        echo "Result: $num1 * $num2 = $result";
    } elseif ($operation === "div") {
        if ($num2 != 0) {
            $result = $num1 / $num2;
            echo "Result: $num1 / $num2 = $result";
        } else {
            echo "Undefined";
        }
    } else {
        echo "Error";
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Simple Calculator</title>
</head>

<body>
    <h1>Simple Calculator</h1>
    <form method="post" action="">
        Enter Number 1: <input type="text" name="num1"><br><br>
        Enter Number 2: <input type="text" name="num2"><br><br>
        Select Operation:
        <select name="operation">
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="mul">Multiplication</option>
            <option value="div">Division</option>
        </select>
        <br><br>
        <input type="submit" value="Calculate">
    </form>
</body>

</html>