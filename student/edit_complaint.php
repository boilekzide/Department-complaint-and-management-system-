<?php
include "../config/db_connect.php";
include "../includes/header.php";

$id = (int) $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM complaints WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

if (isset($_POST['update'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = "UPDATE complaints 
            SET title='$title', description='$description'
            WHERE id='$id'";

    mysqli_query($conn, $sql);

    echo "Updated successfully.";
}
?>

<h2>Edit Complaint</h2>

<form method="POST">
    Title:<br>
    <input type="text" name="title" value="<?php echo $data['title']; ?>"><br><br>

    Description:<br>
    <textarea name="description"><?php echo $data['description']; ?></textarea><br><br>

    <button type="submit" name="update">Update</button>
</form>
<?php include "../includes/footer.php"; ?>  
