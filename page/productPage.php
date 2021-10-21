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
        <h4 >PRODUCT</h4>
        <hr>
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Stock(s)</th>
                        <th scope="col">Price</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $query = mysqli_query($con, "SELECT * FROM produk") or die(mysqli_error($con));

                    if (mysqli_num_rows($query) == 0) {
                        echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                    }else{
                        $no = 1;
                    while($data = mysqli_fetch_assoc($query)){
                        echo'
    <tr>
        <th scope="row">'.$no.'</th>
        <td>'.$data['nama_produk'].'</td>
        <td>'.$data['stok'].'</td>
        <td>'.$data['harga'].'</td>
        <td>'.$data['deskripsi'].'</td>
        <td>
            <a href="./editProductPage.php?id='.$data['id'].'"><i style="color: green" class="fa fa-edit"></i></a>
            <a href="../process/deleteProductProcess.php?id='.$data['id'].'"
                onClick="return confirm ( \'Yakin?\')">
                <i style="color: red" class="fa fa-trash"></i>
            </a>
        </td>
    </tr>';
 $no++;
    }
    }
    ?>
 </tbody>
 </table>
 </div>
 </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
    MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>