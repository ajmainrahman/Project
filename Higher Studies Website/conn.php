<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>

<body>
    <div id="contact-form">
        <form action="#" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="Name" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="Email" required><br>

            <label for="message">Message:</label>
            <textarea id="message" name="Message" required></textarea><br>

            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>

</html>

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
?>
