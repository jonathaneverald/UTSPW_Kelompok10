<?php
    
    if(isset($_POST['editProfil'])){

        
    include('../db.php');
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];
        $id = $_GET['id'];
            
            $query = mysqli_query($con,
                "UPDATE users set name = '$name',
                                  email = '$email',
                                  password = '$password',
                                  alamat = '$alamat',
                                  no_telp = '$no_telp'
                                  where id = '$id' ")
                    or die(mysqli_error($con)); 

                if($query){
                echo
                '<script>
                alert("Edit Data Success"); window.location = "../page/profilPage.php"
                </script>';
                }else{
                echo
                '<script>
                alert("Edit Data Failed");
                </script>';
                }
            }
            ?>