<?php
if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $con = mysqli_connect('localhost', 'root', '', 'login');
    $sql = "SELECT * FROM loginout WHERE username='$username'";
    $result = mysqli_query($con, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        if ($password == $row['password']) {

            header("location: ./Higher.html");
            echo "Login successful";
        } else {
            $showError = "Invalid Credentials";
        }
    } else {
        $showError = "Invalid Credentials";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #10db4d;
            font-family: Arial, sans-serif;
        }

        .login-page {
            height: 100vh;
        }

        .form {
            width: 300px;
            margin: 0 auto;
            margin-top: calc(50vh - 160px);
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
        }

        .login-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-header h3 {
            font-size: 24px;
            color: #333;
            margin-bottom: 5px;
        }

        .login-header p {
            color: #777;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .login-form input[type="submit"] {
            width: 100%;
            background-color: #328f8a;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 3px;
        }

        .login-form input[type="submit"]:hover {
            background-color: #08ac4b;
        }

        .message {
            text-align: center;
            color: #777;
            margin-top: 20px;
        }

        .message a {
            color: #328f8a;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="login-page">
        <div class="form">
            <div class="login">
                <div class="login-header">
                    <h3>LOGIN</h3>
                    <p>Please enter your details to login</p>
                </div>
            </div>
            <form class="login-form" method="post" action="">
                <input type="text" placeholder="username" name="username" />
                <input type="password" placeholder="password" name="password" />
                <input type="submit" value="Login" name="login" />
                <p class="message">Not registered? <a href="./Higher.html">Create an account</a></p>
            </form>
        </div>
    </div>
</body>

</html>