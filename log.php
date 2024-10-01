<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <style>
        body {
            background-image: url('v3.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login Page</h1>
        <?php
        if(isset($_POST['login'])){
            // Establish a MySQL connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "student";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $username = $_POST['username'];
            $password = $_POST['password'];

            // Check if the provided username and password exist in Table2
            $check_query = "SELECT * FROM table2 WHERE username='$username' AND password='$password'";

            $result = $conn->query($check_query);

            if ($result->num_rows > 0) {
                // Valid credentials, redirect to the next page using JavaScript
                echo '<script>window.location.href = "class.php";</script>';
            } else {
                // Invalid credentials, display an error message
                echo '<div class="alert alert-danger" role="alert">Wrong username or password. Please try again.</div>';
            }

            $conn->close();
        }
        ?>
        <form action="" method="POST">
            <div class="form-group">
                <label>Username:</label>
                <input type="text" class="form-control" name="username" required>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="login">Login</button>
            <a href="reg.php" class="btn btn-secondary">Register</a>
        </form>
    </div>
</body>
</html>
