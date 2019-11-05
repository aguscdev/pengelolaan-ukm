<!DOCTYPE html>
<html>

<?php
session_start();
if ($_SESSION['username']=='') {
  header('location:../../admin/login.php');

  
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
            <div class="panel-heading">Tambah Pameran</div>
            <div class="panel-body">
            <form method="post" action="action_add_order.php">
              <div class="form-group">
                  <label for="id">Id Order</label>
                  <input type="text" name="id" class="form-control" id="id" required disabled="">
              </div>
                <div class="form-group">
                    <label for="nama_produk">Nama Produk:</label>
                    <input type="text" name="nama_produk" class="form-control" id="nama_produk" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi:</label>
                    <input type="text" name="deskripsi" class="form-control" id="deskripsi" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga:</label>
                    <input type="number" name="harga" class="form-control" id="harga" required>
                </div>
                <div class="form-group">
                    <label for="units">Jumlah Produk:</label>
                    <input type="number" name="units" class="form-control" id="units" required>
                </div>
                <div class="form-group">
                    <label for="total">Total:</label>
                    <input type="number" name="total" class="form-control" id="total" required>
                </div>
                <div class="form-group">
                    <label for="date">Tanggal:</label>
                    <input type="date" name="date" class="form-control" id="date" required>
                </div>
                <div class="form-group">
                    <label for="email">Customer:</label>
                    <input type="text" name="email" class="form-control" id="email" required>
                </div>
                <button type="submit" name="submit" class="btn btn-info">Simpan</button>
                <a class="btn btn-danger" href="v_pameran.php">Batal</a>
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