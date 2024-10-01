<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
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
        <h1>Registration Page</h1>
        <h3>confirm username and Password</h3>
        <?php
        if(isset($_POST['submit'])){
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

            // Get form data and trim whitespace
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);

            // Initialize error messages array
            $errors = [];

            // Validate form fields
            if (empty($username)) $errors[] = "Username";
            if (empty($password)) $errors[] = "Password";

            if (count($errors) > 0) {
                // Display error message
                $error_message = "Please fill out the following field(s): " . implode(", ", $errors);
                echo '<div class="alert alert-danger" role="alert">' . $error_message . '</div>';
            } else {
                // Check if the password already exists in Table2
                $check_query = "SELECT * FROM table2 WHERE password='$password'";
                $result = $conn->query($check_query);

                if ($result->num_rows > 0) {
                    echo '<div class="alert alert-danger" role="alert">Password already exists. Please enter another password.</div>';
                } else {
                    // Insert data into Table2
                    $sql = "INSERT INTO table2 (username, password)
                            VALUES ('$username', '$password')";

                    if ($conn->query($sql) === TRUE) {
                        // Redirect to log.php if registration is successful
                        echo '<script>window.location.href = "log.php";</script>';
                    } else {
                        echo '<div class="alert alert-danger" role="alert">Registration failed. Please try again.</div>';
                    }
                }
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
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
