<?php
include "../config/db_connect.php";

$fullname = "Olalekan Adebodun";
$username = "admin1";
$email = "olalekanadebodun@gmail.com";
$password = password_hash("123456", PASSWORD_DEFAULT);

$sql = "INSERT INTO admins(fullname, username, email, password)
        VALUES('$fullname', '$username', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Admin created successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
