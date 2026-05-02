<?php
include "susmita_db.php";

$id = $_GET['id']; // make sure URL has ?id=1

// get existing data
$result = $conn->query("SELECT * FROM students WHERE std_id = $id");
$row = $result->fetch_assoc();

// update when form submitted
if (isset($_POST['update'])) {
    $name = $_POST['Student_name'];
    $roll = $_POST['RollNumber'];
    $marks = $_POST['marks_obtained'];
    $result_status = $_POST['result'];

    $conn->query("UPDATE students SET 
        Student_name='$name',
        RollNumber=$roll,
        marks_obtained=$marks,
        result='$result_status'
        WHERE std_id=$id");

    header("Location: display.php");
}
?>

<form method="POST">
    Name: <input type="text" name="Student_name" value="<?php echo $row['Student_name']; ?>"><br>
    Roll: <input type="number" name="RollNumber" value="<?php echo $row['RollNumber']; ?>"><br>
    Marks: <input type="number" name="marks_obtained" value="<?php echo $row['marks_obtained']; ?>"><br>

    Result:
    <select name="result">
        <option value="Pass" <?php if($row['result']=="Pass") echo "selected"; ?>>Pass</option>
        <option value="Fail" <?php if($row['result']=="Fail") echo "selected"; ?>>Fail</option>
    </select><br><br>

    <input type="submit" name="update" value="Update">
</form>