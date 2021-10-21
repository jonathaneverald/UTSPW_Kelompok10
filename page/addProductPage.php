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
        <h4 >TAMBAH PRODUK</h4>
        <hr>
            <form action="../process/addProductProcess.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name Produk</label>
                    <input class="form-control" id="nama_produk" name="nama_produk" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Stock(s)</label>
                    <input class="form-control" id="stok" name="stok" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Price</label>
                    <input class="form-control" id="harga" name="harga" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                    <input class="form-control" id="deskripsi" name="deskripsi" aria-describedby="emailHelp">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" name="addProduct">Tambah Product</button>
                </div>
            </form>
    </div>
 </aside>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>