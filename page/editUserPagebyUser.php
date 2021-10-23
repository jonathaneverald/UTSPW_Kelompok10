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
<?php
    $id = $_GET['id'];
    $query = mysqli_query($con, "SELECT * FROM users where id = '$id'" ) or die(mysqli_error($con));
    $data = mysqli_fetch_assoc($query);
echo'
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A;  box-shadow: 5px 10px 18px #888888;" >
        <h4 >Edit User by User</h4>
        <hr>
            <form action="../process/editUserbyUserProcess.php?id='.$data['id'].'" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input class="form-control" id="name" name="name" aria-describedby="emailHelp" value = "'.$data['name'].'">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input class="form-control" id="email" name="email" aria-describedby="emailHelp" value = "'.$data['email'].'">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" value = "'.$data['alamat'].'">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                    <input class="form-control" id="no_telp" name="no_telp" aria-describedby="emailHelp" value = "'.$data['no_telp'].'">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" name="editProfil">Edit User</button>
                </div>
            </form>
        </div>
    </aside>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
'
?>