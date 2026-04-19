<?php

function sum() {
    $args = func_get_args();
    $total = 0;

    foreach ($args as $value) {
        $total += $value;
    }

    return $total;
}

// Initialize values
$n1 = $n2 = $n3 = "";

// Form
echo "<form method='post'>
        Enter first number: <input type='number' name='n1' value='".($n1 ?? "")."' required><br><br>
        Enter second number: <input type='number' name='n2' value='".($n2 ?? "")."' required><br><br>
        Enter third number (optional): <input type='number' name='n3' value='".($n3 ?? "")."'><br><br>
        <input type='submit' value='Calculate Sum'>
      </form>";

// When form is submitted
if (isset($_POST['n1']) && isset($_POST['n2'])) {

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    echo "<br>";
    
    echo "Sum of 2 numbers: " . sum($n1, $n2) . "<br>";

    if ($n3 != "") {
        echo "Sum of 3 numbers: " . sum($n1, $n2, $n3);
    }
}

?>