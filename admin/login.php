<?php
session_start();
include "../config/db_connect.php";
include "../includes/header.php";
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admins WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    $admin = mysqli_fetch_assoc($result);

    if ($admin && password_verify($password, $admin['password'])) {

        $_SESSION['admin_id'] = $admin['admin_id'];

        header("Location: dashboard.php");
    } else {
        echo "Invalid admin login";
    }
}
?>

<h2>Admin Login</h2>

<form method="POST">
Username:<br>
<input type="text" name="username"><br><br>

Password:<br>
<input type="password" name="password"><br><br>

<button type="submit" name="login">Login</button>
</form>
<?php include "../includes/footer.php"; ?>  
