<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Departmental Complaint System</title>
   <link rel="stylesheet" href="/Department-complaint-and-management-system-/assets/style.css">
</head>

<body>

<div class="navbar">
    <h2>DCMS</h2>

    <div class="nav-links">

        <a href="/Department-complaint-and-management-system-/index.php">Home</a>

        <?php if (isset($_SESSION['student_id'])) { ?>
            <a href="/Department-complaint-and-management-system-/student/dashboard.php">Dashboard</a>
            <a href="/Department-complaint-and-management-system-/student/submit_complaint.php">Submit</a>
            <a href="/Department-complaint-and-management-system-/student/view_complaint.php">My Complaints</a>
            <a href="/Department-complaint-and-management-system-/student/logout.php">Logout</a>
        <?php } ?>

        <?php if (isset($_SESSION['admin_id'])) { ?>
            <a href="/Department-complaint-and-management-system-/admin/dashboard.php">Admin</a>
            <a href="/Department-complaint-and-management-system-/admin/manage_complaints.php">Manage</a>
            <a href="/Department-complaint-and-management-system-/admin/logout.php">Logout</a>
        <?php } ?>

        <?php if (!isset($_SESSION['student_id']) && !isset($_SESSION['admin_id'])) { ?>
            <a href="/Department-complaint-and-management-system-/student/login.php">Student Login</a>
            <a href="/Department-complaint-and-management-system-/admin/login.php">Admin Login</a>
        <?php } ?>

    </div>
</div>

<div class="container">
