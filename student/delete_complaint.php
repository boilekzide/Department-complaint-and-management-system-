<?php include "../includes/header.php"; ?>
<?php
include "../config/db_connect.php";
$id = $_GET['id'];

$sql = "DELETE FROM complaints WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Deleted successfully. <a href='view_complaint.php'>Back</a>";
} else {
    echo "Error deleting record.";
}  
?>
<?php include "../includes/footer.php"; ?>
