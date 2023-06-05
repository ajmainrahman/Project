<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sql.css">
</head>

<body>
    <form action="#" method="POST">
        <table align="center">
            <h1 align="center">User Form</h1>
            <hr>
            <tr>
                <td>ID: </td>
                <td><input type="text" name="ID"></td>
            </tr>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="Name"></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="text" name="Email"></td>
            </tr>
            <tr>
                <td>Contact: </td>
                <td><input type="text" name="Contact"></td>
            </tr>
            <tr>
                <td>CGPA: </td>
                <td><input type="number" name="CGPA"></td>
            </tr>
            <tr>
                <td>Major: </td>
                <td><input type="number" name="Major"></td>
            </tr>
            <tr>
                <td>University: </td>
                <td><input type="text" name="University"></td>
            </tr>
            <tr>
                <td>Country: </td>
                <td><input type="text" name="Country"></td>
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
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $ID = $_POST['ID'];
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Contact = $_POST['Contact'];
        $CGPA = $_POST['CGPA'];
        $Major = $_POST['Major'];
        $University = $_POST['University'];
        $Country = $_POST['Country'];

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'scholarship';

        $connect = mysqli_connect($host, $user, $pass, $dbname);

        // Prepare the SQL statement using prepared statements to prevent SQL injection
        $sql = "INSERT INTO portal (ID, Name, Email, Contact, CGPA, Major, University, Country) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($connect, $sql);
        mysqli_stmt_bind_param($stmt, "sssdss", $ID, $Name, $Email, $Contact, $CGPA, $Major, $University, $Country);

        if (mysqli_stmt_execute($stmt)) {
            echo 'Record inserted successfully';
        } else {
            echo 'Error inserting record: ' . mysqli_error($connect);
        }

        mysqli_stmt_close($stmt);
        mysqli_close($connect);
    }

    if (isset($_POST['update'])) {
        $ID = $_POST['ID'];
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Contact = $_POST['Contact'];
        $CGPA = $_POST['CGPA'];
        $Major = $_POST['Major'];
        $University = $_POST['University'];
        $Country = $_POST['Country'];

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'scholarship';

        $connect = mysqli_connect($host, $user, $pass, $dbname);

        // Prepare the SQL statement using prepared statements to prevent SQL injection
        $sql = "UPDATE portal SET Name = '$Name', Email = '$Email', Contact = '$Contact', CGPA = '$CGPA', Major = '$Major', University = '$University', Country = '$Country' WHERE ID = '$ID'";
        $stmt = mysqli_prepare($connect, $sql);
        // mysqli_stmt_bind_param($stmt, $Name, $Email, $CGPA, $University, $Country, $ID);
    
        if (mysqli_stmt_execute($stmt)) {
            echo 'Record updated successfully';
        }

        mysqli_stmt_close($stmt);
        mysqli_close($connect);
    }

    if (isset($_POST['view'])) {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'scholarship';

        $connect = mysqli_connect($host, $user, $pass, $dbname);

        // Retrieve all records from the "portal" table
        $sql = "SELECT * FROM portal";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "Name: " . $row['Name'] . "<br>";
                echo "ID: " . $row['ID'] . "<br>";
                echo "Email: " . $row['Email'] . "<br>";
                echo "CGPA: " . $row['CGPA'] . "<br>";
                echo "University: " . $row['University'] . "<br>";
                echo "Country: " . $row['Country'] . "<br>";
                echo "----------------------<br>";
            }
        } else {
            echo "No records found";
        }

        mysqli_close($connect);
    }

    if (isset($_POST['delete'])) {
        $ID = $_POST['ID'];

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'scholarship';

        $connect = mysqli_connect($host, $user, $pass, $dbname);

        // Delete record from the "portal" table based on the ID
        $sql = "DELETE FROM portal WHERE ID = ?";
        $stmt = mysqli_prepare($connect, $sql);
        mysqli_stmt_bind_param($stmt, "i", $ID);

        if (mysqli_stmt_execute($stmt)) {
            echo 'Record deleted successfully';
        }
    }
    ?>
    #JS CODE

    function check() {
    var pass = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;
    if (pass.length < 8 || pass.length < 8) {
        document.getElementById("info2").innerHTML="Passwords must be at least 8 characters long." ; } else { if
        (pass===pass2) { document.getElementById("info1").innerHTML="Logged in" ; } else {
        document.getElementById("info2").innerHTML="Please try Again" ; } } }