<?php
 if(isset($_GET['id'])){
    include ('../db.php');
       $id = $_GET['id'];
       $query = mysqli_query($con, "UPDATE produk SET stok = stok - 1 WHERE id='$id'") or die(mysqli_error($con));
    if($query){
        echo
            '<script>
            alert("Produk berhasil dibeli."); window.location = "../page/productPageUser.php"
            </script>';
        }else{
        echo
            '<script>
            alert("Produk gagal dibeli."); window.location = "../page/productPageUser.php"
            </script>';
        }
    }else {
    echo
        '<script>
        window.history.back()
        </script>';
    }
?>
