<?php

// Check if form is submitted
if (isset($_POST['num'])) {
    $num = $_POST['num'];

    echo "Multiplication Table of $num<br>";

    for ($i = 1; $i <= 10; $i++) {
        $result = $num * $i;
        echo $num . " x " . $i . " = " . $result ."<br>";
    }
} else {
    // Input form using PHP only
    echo "<form method='post'>
            Enter a number: <input type='number' name='num' required>
            <input type='submit' value='Generate'>
          </form>";
}

?>