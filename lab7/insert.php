<?php
include "susmita_db.php";

$students = [
    ["Asha", "201", 79],
    ["Chetana", "202", 22],
    ["Eshan", "203", 90],
    ["Ruhani", "204", 82],
    ["Senovi", "205", 29]
];

foreach ($students as $s) {
    $name = $s[0];
    $roll = $s[1];
    $marks = $s[2];

    $result = ($marks >= 40) ? "Pass" : "Fail";

    $sql = "INSERT INTO students (Student_name, RollNumber, marks_obtained, result)
            VALUES ('$name', '$roll', $marks, '$result')";

    $conn->query($sql);
}

echo "5 students inserted successfully!";
?>