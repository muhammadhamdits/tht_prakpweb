<?php $koneksi = mysqli_connect("localhost", "root", "", "hamdi_thtuasppw"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>1711522014 - Muhammad Hamdi</title>
    <script src="../assets/Chart.bundle.js"></script>
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <style>
        html{
        height: 100%;
        position: relative;
        /* overflow: hidden; */
        }

        .containerss{
        height: 300px;
        width: 300px;
        position: absolute;
        top: 50%;
        left: 50%;
        margin: -150px 0 0 -150px;
        }

        .squaress{
        height: 94%;
        width: 94%;
        background: white;
        position: absolute;
        top: 50%;
        left: 50%;
        margin: -47% 0 0 -47%;
        }

        .blackss{ 
        background: black;  
        animation: rotate 10s infinite linear; 
        }

        @keyframes rotate{
        0%{ transform: rotate(0deg); }
            100%{ transform: rotate(360deg); }	
        }
    </style>
</head>
<body>
<div style="position: fixed; top: 0; width: 100%; z-index: 1;">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
                <nav class="navbar navbar-dark bg-success">
                    <a class="nav-link dropdown-toggle btn btn-success" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ☰
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../1_grafik">1. Grafik</a>
                        <a class="dropdown-item" href="../2_image">2. CRUD Image</a>
                        <a class="dropdown-item" href="../3_script">3. Script Unik</a>
                    </div>
                    <h3 class="text-white" style="margin:auto">
