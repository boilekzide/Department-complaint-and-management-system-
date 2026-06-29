<?php include "../includes/header.php"; ?>
<?php
include "../config/db_connect.php";
include "../includes/functions.php";

if (!isset($_SESSION['student_id'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['submit'])) {

    $complaint_id = generateComplaintID();
    $student_id = $_SESSION['student_id'];

    $category = sanitize($_POST['category']);
    $title = sanitize($_POST['title']);
    $description = sanitize($_POST['description']);

    $sql = "INSERT INTO complaints
    (complaint_id, student_id, category, title, description)
    VALUES
    ('$complaint_id', '$student_id', '$category', '$title', '$description')";

    if (mysqli_query($conn, $sql)) {
        echo "Complaint submitted successfully. Your ID is: " . $complaint_id;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<h2>Submit Complaint</h2>

<form method="POST">

Category:
<select name="category">
    <option>Lecturer Issue</option>
    <option>Result Issue</option>
    <option>Course Registration Issue</option>
    <option>Payment Issue</option>
    <option>Timetable Issue</option>
    <option>General Complaint</option>
</select>
<br><br>

Title:<br>
<input type="text" name="title" required><br><br>

Description:<br>
<textarea name="description" required></textarea><br><br>

<button type="submit" name="submit">Submit</button>

</form>
<?php include "../includes/footer.php"; ?>
