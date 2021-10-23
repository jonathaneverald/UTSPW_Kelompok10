<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['addAccount'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');
        include('../sendEmail.php');
        if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
         echo"
         <script type='text/javascript'>
             alert('Invalid email format');
         </script>
         <script>
         window.location = '../page/addAccountPage.php'
         </script>";
        } else{
        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $alamat  =  $_POST['alamat'];
        $no_telp = $_POST['no_telp'];
        $authCode = md5(time().$name.$email);

        // Melakukan insert ke databse dengan query dibawah ini
        $query = mysqli_query($con,
            "INSERT INTO users(name, email,password, alamat, no_telp, otentikasi, verifikasi) VALUES
            ('$name',  '$email',  '$password',  '$alamat',  '$no_telp', '$authCode', 0)")
            or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan di- tangani oleh perintah “or die”
        sendEmail($email, $authCode);

        if($query){ echo
            '<script>
            alert("Add Account Success, Check your Email for verification"); window.location = "../page/akunListAdminPage.php"
            </script>';
        }else{
        echo
            '<script>
            alert("Add Account Failed");
            </script>';
        }
     }

    }else{
    echo
    '<script> window.history.back()
    </script>';
    }
?>