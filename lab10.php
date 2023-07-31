
<html>
<head>
    <title>Registration Form - Display Values</title>
</head>
<body>
    <h1>Registration Form - Display Values</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p><strong>First Name:</strong> " . $_POST["first_name"] . "</p>";
        echo "<p><strong>Last Name:</strong> " . $_POST["last_name"] . "</p>";
        echo "<p><strong>User Name:</strong> " . $_POST["username"] . "</p>";
        echo "<p><strong>Gender:</strong> " . $_POST["gender"] . "</p>";
        echo "<p><strong>Academic Year:</strong> " . $_POST["academic_year"] . "</p>";
        echo "<p><strong>Email:</strong> " . $_POST["email"] . "</p>";
        echo "<p><strong>Phone Number:</strong> " . $_POST["phone"] . "</p>";
    }
    ?>
</body>
</html>
