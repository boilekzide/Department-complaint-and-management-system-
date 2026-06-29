<?php
include "../config/db_connect.php";
include "../includes/header.php";
if (isset($_POST['register'])) {

    $fullname = htmlspecialchars(trim($_POST['fullname']));
    $matric_no = htmlspecialchars(trim($_POST['matric_no']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if email already exists
    $check = mysqli_query($conn, "SELECT * FROM students WHERE email='$email'");

    if (mysqli_num_rows($check) > 0) {
        echo "Email already exists!";
    } else {

        $sql = "INSERT INTO students(fullname, matric_no, email, password)
                VALUES('$fullname', '$matric_no', '$email', '$password')";

        if (mysqli_query($conn, $sql)) {
            echo "Registration successful. <a href='login.php'>Login here</a>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>

<h2>Student Registration</h2>

<form method="POST">
    Full Name:<br>
    <input type="text" name="fullname" required><br><br>

    Matric Number:<br>
    <input type="text" name="matric_no" required><br><br>

    Email:<br>
    <input type="email" name="email" required><br><br>

    Password:<br>
    <input type="password" name="password" required><br><br>

    <button type="submit" name="register">Register</button>
</form>
<?php include "../includes/footer.php"; ?>  
