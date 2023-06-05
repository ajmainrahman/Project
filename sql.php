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
            <h1 align="center">Registration for Scholarship</h1>
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
                <td><input type="number" step="0.01" name="CGPA"></td>
            </tr>
            <tr>
                <td>Major: </td>
                <td><input type="text" name="Major"></td>
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
        $sql = "INSERT INTO info (ID, Name, Email, Contact, CGPA, Major, University, Country) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($connect, $sql);
        mysqli_stmt_bind_param($stmt, "isssdsss", $ID, $Name, $Email, $Contact, $CGPA, $Major, $University, $Country);

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
        $sql = "UPDATE info SET Name = ?, Email = ?, Contact = ?, CGPA = ?, Major = ?, University = ?, Country = ? WHERE ID = ?";
        $stmt = mysqli_prepare($connect, $sql);
        mysqli_stmt_bind_param($stmt, "sssdsssi", $Name, $Email, $Contact, $CGPA, $Major, $University, $Country, $ID);

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
        $dbname = 'scholarship';

        $connect = mysqli_connect($host, $user, $pass, $dbname);

        // Retrieve all records from the "info" table
        $sql = "SELECT * FROM info";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "ID: " . $row['ID'] . "<br>";
                echo "Name: " . $row['Name'] . "<br>";
                echo "Email: " . $row['Email'] . "<br>";
                echo "Contact: " . $row['Contact'] . "<br>";
                echo "CGPA: " . $row['CGPA'] . "<br>";
                echo "Major: " . $row['Major'] . "<br>";
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

        $sql = "DELETE FROM info WHERE ID = ?";
        $stmt = mysqli_prepare($connect, $sql);
        mysqli_stmt_bind_param($stmt, "i", $ID);

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
