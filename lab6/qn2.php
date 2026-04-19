<?php

// Initialize variables
$string = "";
$vowels = 0;

if (isset($_POST['text'])) {
    $string = $_POST['text'];

    for ($i = 0; $i < strlen($string); $i++) {
        $char = strtolower($string[$i]);

        if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
            $vowels++;
        }
    }
}

// Form (value keeps previous input)
echo "<form method='post'>
        Enter a string: 
        <input type='text' name='text' value='$string' required>
        <input type='submit' value='Count Vowels'>
      </form>";

// Show result after submission
if (isset($_POST['text'])) {
    echo "<br>String: " . $string;
    echo "<br>Number of vowels: " . $vowels;
}

?>