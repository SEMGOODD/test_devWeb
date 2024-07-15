<!DOCTYPE html>
<html lang="en">
<head>
    <title>Adding Student</title>
</head>
<body>
    <?php
    // Check if form data is set
    if (isset($_POST['name']) && isset($_POST['address']) && isset($_POST['email'])) { 
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];

        // Establish connection
        $connection = new mysqli('localhost', 'root', 'root', 'school');

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        // Prepare and execute insert statement
        $stmt = $connection->prepare('INSERT INTO student_info (student_name, student_address, student_email) VALUES (?, ?, ?)');
        $stmt->bind_param('sss', $name, $address, $email);

        if ($stmt->execute()) {
            echo "Student added successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement and connection
        $stmt->close();
        $connection->close();
    } else {
        echo "All fields are required.";
    }
    ?>
</body>
</html>
