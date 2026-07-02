<?php include "../includes/header.php"; ?>
<?php
if (!isset($_SESSION['student_id'])) {
    header("Location: login.php");
    exit();
}
?>

<h2>Welcome <?php echo $_SESSION['fullname']; ?></h2>

<ul>
    <li><a href="/Department-complaint-and-management-system-/student/submit_complaint.php">Submit Complaint</a></li>
    <li><a href="/Department-complaint-and-management-system-/student/view_complaint.php">View Complaints</a></li>
    <li><a href="/Department-complaint-and-management-system-/student/track_complaint.php">Track Complaint</a></li>
    <li><a href="/Department-complaint-and-management-system-/student/logout.php">Logout</a></li>
</ul>
<?php include "../includes/footer.php"; ?>
