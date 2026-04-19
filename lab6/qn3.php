<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['numbers'];
    $numbers = array_map('trim', explode(',', $input));

    echo "<h3>Squares of the numbers:</h3>";
    foreach ($numbers as $num) {
        if (is_numeric($num)) {
            $square = $num * $num;
            echo "Number: $num, Square: $square <br>";
        } else {
            echo "'$num' is not a valid number <br>";
        }
    }
}
?>

<form method="post">
    Enter numbers (comma separated): 
    <input type="text" name="numbers" placeholder="e.g., 2,4,6,8" required>
    <input type="submit" value="Calculate Squares">
</form>