<?php
// include database connection file
$koneksi = mysqli_connect("localhost", "root", "", "hamdi_thtuasppw");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM image WHERE id='$id'");
unlink("../assets/images/".$id);

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>