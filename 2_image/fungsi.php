<?php

function upload() {

    // Ambil data dari $_FILES
    $namaFile   = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error      = $_FILES['foto']['error'];
    $tmpName    = $_FILES['foto']['tmp_name'];
    
    // Cek apakah tidak ada gambar yang diupload
    if( $error === 4 ) {
     echo "
      <script>
       alert('Pilih gambar terlebih dahulu!');
      </script>
     ";
     return false;
    }
    
    // Cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
     echo "
      <script>
       alert('File yang anda upload bukan gambar!');
      </script>
     ";
     return false;
    }
    
    // Cek jika ukuran file terlalu besar
    if( $ukuranFile > 10000000 ) {
     echo "
      <script>
       alert('Ukuran gambar terlalu besar!');
      </script>
     ";
     return false;
    }
    
    // Jika file lolos pengecekan, lakukan upload
     // Buat nama gambar baru dengan karakter acak
      $namaFileBaru = uniqid();
      $namaFileBaru .= '.';
      $namaFileBaru .= $ekstensiGambar;
    
    // Pindahkan gambar ke folder upload
     move_uploaded_file($tmpName, '../assets/images/' . $namaFileBaru);
    
    return $namaFileBaru;
    }

?>