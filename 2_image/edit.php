<?php

    $id = $_POST['id'];
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
    $query = "UPDATE image SET id='$foto', gambar='$foto' WHERE id='$id'";
    unlink("../assets/images/".$id);

    $sql = mysqli_query($koneksi, $query);

    if($sql){
        echo "
        <script>
        window.location.replace('index.php');
        </script>
        ";
    }

?>