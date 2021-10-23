<title>Profil User</title>
<?php
    session_start();
    $id = $_SESSION['id'];
    if ($id == '1') {
        include ("../component/sidebar.php");
    }
    else {
        include ("../component/sidebarUser.php");
    }
?>

 
        <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A;  box-shadow: 5px 10px 18px #888888;" >
        <h4 >Profil User</h4>
        <hr>
            <?php
                $query = mysqli_query($con, "SELECT * FROM users WHERE id = $id") or die(mysqli_error($con));
                    while($data = mysqli_fetch_assoc($query)){
                        echo'
    <tr>
    <div>                    
    <strong>Nama:</strong>
        <td>'.$data['name'].'</td>
    </div>
    <div>
    <strong>Email:</strong>
        <td>'.$data['email'].'</td>
    </div>
    <div>
    <strong>Alamat:</strong>
        <td>'.$data['alamat'].'</td>
    </div>
    <div>    
    <strong>Nomor Telepon:</strong>
        <td>'.$data['no_telp'].'</td>
    </div>
    <div>
    <strong>Edit Profil:</strong>
    <a href="./editUserPagebyUser.php?id='.$data['id'].'"><i style="color: green" class="fa fa-edit"></i></a>
    </div>
    </tr>';
    }
    ?>
 </div>
 </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
    MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>