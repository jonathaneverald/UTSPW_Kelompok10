<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['addProduct'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
    include('../db.php');
        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $nama_produk = $_POST['nama_produk'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];
        $deskripsi = $_POST['deskripsi'];
            // Melakukan insert ke databse dengan query dibawah ini
            $query = mysqli_query($con,
                "INSERT INTO produk(nama_produk, stok, harga, deskripsi)
                    VALUES
                        ('$nama_produk', '$stok', '$harga', '$deskripsi')")
                    or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

                if($query){
                echo
                '<script>
                alert("Add Product Success"); window.location = "../page/productPage.php"
                </script>';
                }else{
                echo
                '<script>
                alert("Add Product Failed");
                </script>';
                }
            }
            ?>



