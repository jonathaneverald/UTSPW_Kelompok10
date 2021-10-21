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
    $query = mysqli_query($con, "SELECT * FROM produk where id = '$id'" ) or die(mysqli_error($con));
    $data = mysqli_fetch_assoc($query);
echo'
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A;  box-shadow: 5px 10px 18px #888888;" >
        <h4 >Edit Product</h4>
        <hr>
            <form action="../process/editProductProcess.php?id='.$data['id'].'" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                    <input class="form-control" id="nama_produk" name="nama_produk" aria-describedby="emailHelp" value = "'.$data['nama_produk'].'">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Stock(s)</label>
                    <input class="form-control" id="stok" name="stok" aria-describedby="emailHelp" value = "'.$data['stok'].'">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Price</label>
                    <input class="form-control" id="harga" name="harga" aria-describedby="emailHelp" value = "'.$data['harga'].'">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <input class="form-control" id="deskripsi" name="deskripsi" aria-describedby="emailHelp" value = "'.$data['deskripsi'].'">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" name="edit">Edit Product</button>
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