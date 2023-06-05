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
