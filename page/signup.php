<?php
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    $error = array();

    if ($name == null) {
        $error['name'] = "Please enter your name";
    }
    if ($username == null) {
        $error['username'] = "Please enter your Username";
    }
    if ($email == null) {
        $error['email'] = "Please enter your Email";
    }
    if ($phonenumber == null) {
        $error['phonenumber'] = "Please enter your phone number";
    }
    if ($password == null) {
        $error['password'] = "Please enter your password";
    }
    if ($confirmpassword == null) {
        $error['confirmpassword'] = "Please Confirm Password";
    }
    if ($password != $confirmpassword) {
        $error['matchpassword'] = "Passwords don't match";
    }

    if (count($error) == 0) {

        $con = mysqli_connect('localhost', 'root', '', 'project');

        $query = mysqli_query($con, "INSERT INTO signup(name,username,email,phonenumber,password,confirmpassword) 
    VALUES('$name','$username','$email','$phonenumber','$password','$confirmpassword')");

        if ($query) {
            echo "Data Registration Complete";
        } else {
            echo "Error Registration";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up</title>
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

        .signup-page {
            width: 30%;
            height: 100vh;
            text-align: center;
            margin-top: 20px;
            margin-left: 35%;
        }

        .form {
            text-align: left;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
        }

        .signup-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .signup-header h3 {
            font-size: 24px;
            color: #333;
            margin-bottom: 5px;
        }

        .signup-header p {
            color: #777;
        }

        .signup-form input[type="text"],
        .signup-form input[type="email"],
        .signup-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .signup-form input[type="submit"] {
            width: 100%;
            background-color: #328f8a;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 3px;
        }

        .signup-form input[type="submit"]:hover {
            background-color: #08ac4b;
        }

        .signup-form input[type="text"],
        .signup-form input[type="email"],
        .signup-form input[type="password"],
        .signup-form input[type="submit"] {
            float: left;
        }

        .signup-form .message {
            text-align: center;
        }

        .login-btn {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="signup-page">
        <div class="form">
            <div class="signup">
                <div class="signup-header">
                    <h3>Sign Up</h3>
                    <p>Please fill in your details to create an account</p>
                </div>
            </div>
            <form class="signup-form" method="post" action="">
                <input type="text" placeholder="Name" name="name" />
                <?php
                if (isset($error['name'])) {
                    echo $error['name'];
                }
                ?>
                <br>
                <input type="text" placeholder="Username" name="username" />
                <?php
                if (isset($error['username'])) {
                    echo $error['username'];
                }
                ?>
                <br>
                <input type="email" placeholder="Email" name="email" />
                <?php
                if (isset($error['email'])) {
                    echo $error['email'];
                }
                ?>
                <br>
                <input type="text" placeholder="Phone Number" name="phonenumber" />
                <?php
                if (isset($error['phonenumber'])) {
                    echo $error['phonenumber'];
                }
                ?>
                <br>
                <input type="password" placeholder="Password" name="password" />
                <?php
                if (isset($error['password'])) {
                    echo $error['password'];
                }
                ?>
                <br>
                <input type="password" placeholder="Confirm Password" name="confirmpassword" />
                <?php
                if (isset($error['confirmpassword'])) {
                    echo $error['confirmpassword'];
                }
                if (isset($error['matchpassword'])) {
                    echo $error['matchpassword'];
                }
                ?>
                <br>

                <input type="submit" value="Sign Up" name="signup" />
                <p class="message">Already have an account? <a class="login-btn" href="./loginpage.php">Login</a></p>
            </form>
        </div>
    </div>
</body>

</html>