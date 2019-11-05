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
              <?php
                include '../../config/koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($koneksi,"select * from orders where id='$id'");
                while($d = mysqli_fetch_array($data)){
                ?>
            <form method="post" action="action_edit_order.php">
              <div class="form-group">
                  <label for="id">Id Order</label>
                  <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                  <input type="text" name="id" class="form-control" id="id" value="<?php echo $d['id']; ?>" required disabled="">
              </div>
                <div class="form-group">
                    <label for="nama_produk">Nama Produk:</label>
                    <input type="text" name="nama_produk" class="form-control" id="nama_produk" value="<?php echo $d['nama_produk']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi:</label>
                    <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="<?php echo $d['deskripsi']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga:</label>
                    <input type="number" name="harga" class="form-control" id="harga" value="<?php echo $d['harga']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="units">Jumlah Produk:</label>
                    <input type="number" name="units" class="form-control" id="units" value="<?php echo $d['units']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="total">Total:</label>
                    <input type="number" name="total" class="form-control" id="total" value="<?php echo $d['total']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="date">Tanggal:</label>
                    <input type="date" name="date" class="form-control" id="date" value="<?php echo $d['date']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Customer:</label>
                    <input type="text" name="email" class="form-control" id="email" value="<?php echo $d['email']; ?>" required>
                </div>
                <button type="submit" name="submit" class="btn btn-info">Simpan</button>
                <a class="btn btn-danger" href="v_pameran.php">Batal</a>
            </form>
          <?php } ?>
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