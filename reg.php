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
            $name = trim($_POST['name']);
            $state = trim($_POST['state']);
            $language = trim($_POST['language']);
            $fathername = trim($_POST['fathername']);
            $phoneno = trim($_POST['phoneno']);
            $class = trim($_POST['class']);

            // Initialize error messages array
            $errors = [];

            // Validate form fields
            if (empty($name)) $errors[] = "Name";
            if (empty($state)) $errors[] = "State";
            if (empty($language)) $errors[] = "Language";
            if (empty($fathername)) $errors[] = "Father's Name";
            if (empty($phoneno)) $errors[] = "Phone Number";
            if (empty($class)) $errors[] = "Class";

            if (count($errors) > 0) {
                // Display error message
                $error_message = "Please fill out the following field(s): " . implode(", ", $errors);
                echo '<div class="alert alert-danger" role="alert">' . $error_message . '</div>';
            } else {
                // Insert data into Table1
                $sql = "INSERT INTO table1 (name, state, language, fathername, phoneno, class)
                        VALUES ('$name', '$state', '$language', '$fathername', '$phoneno', '$class')";

                if ($conn->query($sql) === TRUE) {
                    // Redirect to conpas.php if registration is successful
                    echo '<script>window.location.href = "conpas.php";</script>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">Registration failed. Please try again.</div>';
                }
            }

            $conn->close();
        }
        ?>
        <form action="" method="POST">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label>State:</label>
                <input type="text" class="form-control" name="state">
            </div>
            <div class="form-group">
                <label>Language:</label>
                <input type="text" class="form-control" name="language">
            </div>
            <div class="form-group">
                <label>Father's Name:</label>
                <input type="text" class="form-control" name="fathername">
            </div>
            <div class="form-group">
                <label>Phone Number:</label>
                <input type="text" class="form-control" name="phoneno">
            </div>
            <div class="form-group">
                <label>Class:</label>
                <input type="text" class="form-control" name="class">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
