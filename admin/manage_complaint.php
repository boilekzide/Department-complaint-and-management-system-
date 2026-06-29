<?php
include "../config/db_connect.php";
include "../includes/header.php";
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

// Get filter (optional)
$category = isset($_GET['category']) ? $_GET['category'] : "";

// Query
if ($category != "") {
    $sql = "SELECT * FROM complaints WHERE category='$category' ORDER BY date_created DESC";
} else {
    $sql = "SELECT * FROM complaints ORDER BY date_created DESC";
}

$result = mysqli_query($conn, $sql);
?>

<h2>Manage Complaints</h2>

<!-- FILTER -->
<form method="GET">
    <select name="category">
        <option value="">All Categories</option>
        <option>Lecturer Issue</option>
        <option>Result Issue</option>
        <option>Course Registration Issue</option>
        <option>Payment Issue</option>
        <option>Timetable Issue</option>
        <option>General Complaint</option>
    </select>

    <button type="submit">Filter</button>
</form>

<hr>

<table border="1" cellpadding="10">
<tr>
    <th>Complaint ID</th>
    <th>Category</th>
    <th>Title</th>
    <th>Status</th>
    <th>Date</th>
    <th>Action</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>

<tr>
    <td><?php echo $row['complaint_id']; ?></td>
    <td><?php echo $row['category']; ?></td>
    <td><?php echo $row['title']; ?></td>
    <td><?php echo $row['status']; ?></td>
    <td><?php echo $row['date_created']; ?></td>

    <td>
        <a href="update_status.php?id=<?php echo $row['id']; ?>">
            Update Status
        </a>
    </td>
</tr>

<?php } ?>

</table>
<?php include "../includes/footer.php"; ?>  
