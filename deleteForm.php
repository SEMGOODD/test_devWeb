<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Student</title>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["name"]) && !empty($_POST["name"])) {
        $connection = new mysqli('localhost', 'root', 'root', 'school');

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        $stmt = $connection->prepare('DELETE FROM student_info WHERE student_name = ?');
        if ($stmt === false) {
            die('Prepare failed: ' . $connection->error);
        }

        $stmt->bind_param('s', $_POST["name"]);
        if ($stmt->execute()) {
            echo "Row deleted successfully";
        } else {
            echo "Error deleting row: " . $stmt->error;
        }

        $stmt->close();
        $connection->close();
    } else {
        echo "Please provide a student name.";
    }
} else {
    echo "Invalid request method.";
}
?>

</body>
</html>
