<?php
include "../config/db_connect.php";
include "../includes/header.php";

$student_id = $_SESSION['student_id'];

$sql = "SELECT * FROM complaints WHERE student_id='$student_id' ORDER BY date_created DESC";
$result = mysqli_query($conn, $sql);
?>

<h2>Your Complaints</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Category</th>
    <th>Title</th>
    <th>Status</th>
    <th>Date</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>

<tr>
    <td><?php echo $row['complaint_id']; ?></td>
    <td><?php echo $row['category']; ?></td>
    <td><?php echo $row['title']; ?></td>
    <td><?php echo $row['status']; ?></td>
    <td><?php echo $row['date_created']; ?></td>
    <td> 
        <a href="/Department-complaint-and-management-system-/student/edit_complaint.php?id=<?php echo $row['id'] ?>"> Edit </a>
    </td>
    <td>
        <a href="/Department-complaint-and-management-system-/student/delete_complaint.php?id=<?php echo $row['id'] ?>"> Delete </a>
    </td>

</tr>

<?php } ?>

</table>
<?php include "../includes/footer.php"; ?>  
