<?php
        if (!$_SESSION['isLogin']) {
            header("location: ../page/loginPage.php");
        }else {
            include('../db.php');
        }
    echo '
    <!doctype html>
    <html lang="en">
    <head>
       <!-- Required meta tags -->
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- Bootstrap CSS -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <link rel="stylesheet" href="./style.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500&display=swap" rel="stylesheet">
       <title>Dashboard!</title>
           <style>
           *{
               font-family: "Quicksand", sans-serif;
           }
           .side-bar {
               width: 260px;
               background-color: #16347A;
               min-height: 100vh;
           } 
   
           a {
               padding-left: 10px;
               font-size: 13px;
               text-decoration: none;
               color: white;
           }
           .menu i {
               padding-left: 20px;
           }
               .menu .content-menu {
               padding: 9px 7px;
           }
   
           .isActive {
               background-color: #071853 !important;
               border-right: 8px solid #010E2F;
           }
           i{
               color:white;
           }
           </style>
    </head>
    <body>
   
       <aside>
           <div class="d-flex">
               <div class="side-bar">
               <img src="../newlogo.png" class="d-block " style="width:200px; margin-bottom:-70px; margin-top:-40px;"/>
               <hr>
                   <div class="menu">
                       <div class="content-menu" >
                           <i class="fa fa-users"></i>
                           <a href="../page/akunListAdminPage.php" style="font-weight:600" >Akun</a>
                       </div>
                       <div class="content-menu " >
                           <i class="fa fa-list"></i>
                           <a href="../page/productPage.php" style="font-weight:600">Produk</a>
                       </div>
                       <div class="content-menu " >
                           <i class="fa fa-user-plus"></i>
                           <a href="../page/addAccountPage.php" style="font-weight:600">Tambah Akun</a>
                       </div>
                       <div class="content-menu " >
                           <i class="fa fa-cart-plus"></i>
                           <a href="../page/addProductPage.php" style="font-weight:600">Tambah Produk</a>
                       </div>
                       <div class="content-menu " >
                           <i class="fa fa-address-card"></i>
                           <a href="./aboutUsPage.php" style="font-weight:600">Tentang Kita</a>
                       </div>
                       <div class="content-menu " >
                            <i class="fa fa-sign-out"></i>
                            <a href="../process/logoutProcess.php" style="font-weight:600">Keluar</a>
                       </div>
                        <hr>
                   </div>
           </div>
           '
   ?>