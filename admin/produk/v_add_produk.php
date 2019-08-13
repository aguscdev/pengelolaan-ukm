<!DOCTYPE html>
<html>

<?php
session_start();
if ($_SESSION['username']=='') {
  header('location:../admin/login.php');

  
}else{

  $user = $_SESSION["username"];
  $id = $_SESSION["id"];  
  $level = $_SESSION["level"];

  include '../home/header.php'; 
?>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php include '../home/sidebar.php'; ?>
    <div class="contents">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="panel panel-default">
            <div class="panel-heading">Tambah Produk</div>
            <div class="panel-body">
            <form method="post" action="action_add_produk.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="produk">Nama Produk:</label>
                    <input type="text" name="nama_produk" class="form-control" id="produk" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi:</label>
                    <input type="text" name="deskripsi" class="form-control" id="deskripsi" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga:</label>
                    <input type="text" name="harga" class="form-control" id="harga" required>
                </div>
                <div class="form-group">
                    <label for="qty">QTY:</label>
                    <input type="number" name="qty" class="form-control" id="qty" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Foto:</label>
                    <input type="file" name="foto" class="form-control" id="foto" required>
                </div>
                <button type="submit" name="submit" value="Upload Image" class="btn btn-info">Simpan</button>
                <a class="btn btn-danger" href="v_produk.php">Batal</a>
            </form>
            </div>
        </div>
        </section><br>
      </div>
    </div>
  </div>
</body>
<?php include '../home/footer.php'; ?>
</html>
<?php
}
?>