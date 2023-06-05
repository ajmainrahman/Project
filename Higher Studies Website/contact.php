<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <form action="#" method="POST">
        <table align="center">
            <h1 align="center">Contact Information</h1>
            <hr>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="Name"></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="text" name="Email"></td>
            </tr>
            <tr>
                <td>Message: </td>
                <td><input type="text" name="Message"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" value="submit" name="submit">Submit</button>
                    <button type="submit" value="update" name="update">Update</button>
                    <button type="submit" value="view" name="view">View</button>
                    <button type="submit" value="delete" name="delete">Delete</button>
                </td>
            </tr>
        </table>
    </form> -->

<?php
    if (isset($_POST['submit'])) {
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Message = $_POST['Message'];

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'contact';

        $connect = mysqli_connect($host, $user, $pass, $dbname);

        // Prepare the SQL statement using prepared statements to prevent SQL injection
        $sql = "INSERT INTO information (Name, Email, Message) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($connect, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $Name, $Email, $Message);

        if (mysqli_stmt_execute($stmt)) {
            echo 'Record inserted successfully';
        } else {
            echo 'Error inserting record: ' . mysqli_error($connect);
        }

        mysqli_stmt_close($stmt);
        mysqli_close($connect);
    }

    if (isset($_POST['update'])) {
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Message = $_POST['Message'];

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'contact';

        $connect = mysqli_connect($host, $user, $pass, $dbname);

        // Prepare the SQL statement using prepared statements to prevent SQL injection
        $sql = "UPDATE information SET Name = ?, Message = ? WHERE Email = ?";
        $stmt = mysqli_prepare($connect, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $Name, $Message, $Email);

        if (mysqli_stmt_execute($stmt)) {
            echo 'Record updated successfully';
        } else {
            echo 'Error updating record: ' . mysqli_error($connect);
        }

        mysqli_stmt_close($stmt);
        mysqli_close($connect);
    }

    if (isset($_POST['view'])) {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'contact';

        $connect = mysqli_connect($host, $user, $pass, $dbname);

        // Retrieve all records from the "information" table
        $sql = "SELECT * FROM information";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "Name: " . $row['Name'] . "<br>";
                echo "Email: " . $row['Email'] . "<br>";
                echo "Message: " . $row['Message'] . "<br>";
                echo "----------------------<br>";
            }
        } else {
            echo "No records found";
        }

        mysqli_close($connect);
    }

    if (isset($_POST['delete'])) {
        $Email = $_POST['Email'];

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'contact';

        $connect = mysqli_connect($host, $user, $pass, $dbname);

        $sql = "DELETE FROM information WHERE Email = ?";
        $stmt = mysqli_prepare($connect, $sql);
        mysqli_stmt_bind_param($stmt, "s", $Email);

        if (mysqli_stmt_execute($stmt)) {
            echo 'Record deleted successfully';
        } else {
            echo 'Error deleting record: ' . mysqli_error($connect);
        }
        mysqli_stmt_close($stmt);
        mysqli_close($connect);
    }
    ?>
</body>
</html>
