<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and MySQL</title>
</head>
<body>

    <h1>Add form</h1>
    <form action="add.php" method="post">
        Student Name: <input type="text" name="name"><br>
        Student Address: <input type="text" name="address"><br>
        Student Email: <input type="text" name="email"><br>

        <input type="submit">

    </form>
    <hr>
    <h1>Delete form</h1>
    <form action="deleteForm.php" method="post">
        Student name: <input type="text" name="name"><br>
        <input type="submit">
    </form> 

    <h1>Data students</h1>
    <?php
        // PHP & MySQL connection
        $connection = new mysqli('localhost', 'root', 'root', 'school'); // server name, username, password, database name

        if ($connection->connect_error) {
            die( "Connection failed: " . $connection->connect_error);
        }

        $stmt = $connection->prepare("SELECT * FROM student_info");
        $stmt->execute();

        $result = $stmt->get_result();
        echo "<table border='1'>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row['student_id']."</td>
                       <td>".$row['student_name']."</td>
                       <td>".$row['student_address']."</td>
                       <td>".$row['student_email']."</td>
                </tr>";
        }
        echo "</table>";
    ?>

</body>
</html>
