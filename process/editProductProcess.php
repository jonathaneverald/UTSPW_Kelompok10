<?php
    
    if(isset($_POST['edit'])){

        
    include('../db.php');
        
        $nama_produk = $_POST['nama_produk'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];
        $deskripsi = $_POST['deskripsi'];
        $id = $_GET['id'];
            
            $query = mysqli_query($con,
                "UPDATE produk set nama_produk = '$nama_produk',
                                  stok = '$stok',
                                  harga = '$harga',
                                  deskripsi = '$deskripsi'
                                  where id = '$id' ")
                    or die(mysqli_error($con)); 

                if($query){
                echo
                '<script>
                alert("Edit Product Success"); window.location = "../page/productPage.php"
                </script>';
                }else{
                echo
                '<script>
                alert("Edit Product Failed");
                </script>';
                }
            }
            ?>