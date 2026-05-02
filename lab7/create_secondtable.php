<?php
include 'susmita_db.php'; 

// SQL query to create second table
$sql = "CREATE TABLE student_details (
    detail_id INT AUTO_INCREMENT PRIMARY KEY,
    std_id INT,
    address VARCHAR(150),
    parents_name VARCHAR(100),
    mobile VARCHAR(15),
    email VARCHAR(100),
    FOREIGN KEY (std_id) REFERENCES students(std_id)
)";

// Execute query
if ($conn->query($sql) === TRUE) {
    echo "Table 'student_details' created successfully";
} else {
    echo "Error: " . $conn->error;
}
?>