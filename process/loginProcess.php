<?php
    // ini buat ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
   if(isset($_POST['login'])){

   include('../db.php'); // untuk mengoneksikan dengan databas dengan memanggil file db.php
    //tampung nilai yang ada di from ke variable
    // sesuaikan variabel name yang ada di registerPage.php disetiap input
   $email = $_POST['email'];
   $password = $_POST['password'];
    // Melakukan insert ke databse dengan query dibawah ini
   $query = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'") or die(mysqli_error($con));
    // ini buat ngecek kalo misalnya hasil dari querynya == 0 ato ga ketemu -> usernamenya tdk ditemukan
   if(mysqli_num_rows($query) == 0){
      echo
         '<script>
         alert("Email not found!"); window.location = "../page/loginPage.php"
         </script>';
   }else{
      $user = mysqli_fetch_assoc($query);
      if(password_verify($password, $user['password'])){
         // session adalah variabel global sementara yang disimpen di server
         // buat mulai sessionnya pake session_start()
         session_start();
         //isLogin ini temp variable yang gunanya buat ngecek nanti apakah sdh login ato belum
         $_SESSION['id'] = $user['id'];

         $verifikasi = $user['verifikasi'];
         if($_SESSION['id'] == '1') {
            if($verifikasi==1){
               $_SESSION['isLogin'] = true;
               $_SESSION['user'] = $user; 
               echo
                  '<script>
                  alert("Login Success"); window.location = "../page/akunListAdminPage.php"
                  </script>'; 
            }else{
               echo
                  '<script>
                  alert("Akun belum diaktifkan"); window.location = "../page/loginPage.php"
                  </script>';
            }
         } else {
            if($verifikasi==1){
               $_SESSION['isLogin'] = true;
               $_SESSION['user'] = $user; 
               echo
                  '<script>
                  alert("Login Success"); window.location = "../page/productPageUser.php"
                  </script>'; 
            }else{
               echo
                  '<script>
                  alert("Akun belum diaktifkan"); window.location = "../page/loginPage.php"
                  </script>';
            }
         }
      }else {
         echo
            '<script>
            alert("Email or Password Invalid");
            window.location = "../page/loginPage.php"
            </script>';
      }
   }
   }else{
      echo
         '<script>
         window.history.back()
         </script>';
 }
?>