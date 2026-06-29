<?php
include "../includes/header.php";

if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}
?>

<h2>Admin Dashboard</h2>

<ul>
    <li><a href="manage_complaint.php">Manage Complaints</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>
<?php include "../includes/footer.php"; ?>  
