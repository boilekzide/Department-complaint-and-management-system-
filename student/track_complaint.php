<?php
include "../config/db_connect.php";
include "../includes/header.php";
$result = null;

if (isset($_POST['search'])) {

    $cid = $_POST['complaint_id'];

    $result = mysqli_query($conn,
    "SELECT * FROM complaints WHERE complaint_id='$cid'");
}
?>

<h2>Track Complaint</h2>

<form method="POST">
    Enter Complaint ID:<br>
    <input type="text" name="complaint_id" required>
    <button type="submit" name="search">Search</button>
</form>

<?php if ($result && mysqli_num_rows($result) > 0) { 
$row = mysqli_fetch_assoc($result);
?>

<hr>

<p><b>Category:</b> <?php echo $row['category']; ?></p>
<p><b>Title:</b> <?php echo $row['title']; ?></p>
<p><b>Status:</b> <?php echo $row['status']; ?></p>

<?php } elseif (isset($_POST['search'])) {
    echo "Complaint not found.";
}
?>
<?php include "../includes/footer.php"; ?>  
