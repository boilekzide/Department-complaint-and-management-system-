<?php
include "../config/db_connect.php";
include "../includes/header.php";
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];

// Fetch complaint
$query = mysqli_query($conn, "SELECT * FROM complaints WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

if (isset($_POST['update'])) {

    $status = $_POST['status'];

    $sql = "UPDATE complaints 
            SET status='$status'
            WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Status updated successfully. 
        <a href='manage_complaints.php'>Go back</a>";
    } else {
        echo "Error updating status.";
    }
}
?>

<h2>Update Complaint Status</h2>

<p><b>Complaint ID:</b> <?php echo $data['complaint_id']; ?></p>
<p><b>Title:</b> <?php echo $data['title']; ?></p>
<p><b>Current Status:</b> <?php echo $data['status']; ?></p>

<form method="POST">
    <select name="status">
        <option>Pending</option>
        <option>In Review</option>
        <option>Resolved</option>
        <option>Rejected</option>
    </select>

    <button type="submit" name="update">Update</button>
</form>
<?php include "../includes/footer.php"; ?>  
