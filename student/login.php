<?php
session_start();
include "../config/db_connect.php";
include "../includes/header.php";
if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM students WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {

        $_SESSION['student_id'] = $user['student_id'];
        $_SESSION['fullname'] = $user['fullname'];

        header("Location: dashboard.php");
    } else {
        echo "Invalid login details";
    }
}
?>

<h2>Student Login</h2>

<form method="POST">
    Email:<br>
    <input type="email" name="email" required><br><br>

    Password:<br>
    <input type="password" name="password" required><br><br>

    <button type="submit" name="login">Login</button>
</form>

<?php include "../includes/footer.php"; ?>  
