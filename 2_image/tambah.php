<?php
require_once("fungsi.php");
$koneksi = mysqli_connect("localhost", "root", "", "hamdi_thtuasppw");

$foto = upload();

if(!$foto){
    // header("Location: index.php");
    echo "
      <script>
        window.location.replace('index.php');
      </script>
     ";
     return false;
}
$query = "INSERT INTO image VALUES ('$foto', '$foto')";

$sql = mysqli_query($koneksi, $query);

if($sql){
    echo "
      <script>
       window.location.replace('index.php');
      </script>
     ";
}

?>