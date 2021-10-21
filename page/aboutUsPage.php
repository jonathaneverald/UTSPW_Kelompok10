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
        <h4>ABOUT US</h4>
        <hr>
            <div class="mb-3">
                <h4 style="text-align: center;">ANGGOTA KELOMPOK</h4>
            </div>
            <div style="text-align: center;" class="mb-5">
                <br>
                <a href="https://github.com/dogyuun" class="display-6 link-primary">Antonius Eri Kristian</a><br>
                <a href="https://github.com/jonathaneverald" class="display-6 link-primary">Jonathan Everald Panenga Putra</a><br>
                <a href="https://github.com/Stevanus14" class="display-6 link-primary">Stevanus Tetuko Kristianto</a><br>
            </div>
    </div>
 </aside>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>