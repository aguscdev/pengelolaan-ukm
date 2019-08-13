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
            <div class="panel-heading">Tambah UKM</div>
            <div class="panel-body">
            <form method="post" action="action_add_ukm.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="ukm">Nama UKM:</label>
                    <input type="text" name="nama_ukm" class="form-control" id="ukm" required>
                </div>
                <div class="form-group">
                    <label for="milik">Milik:</label>
                    <input type="text" name="milik" class="form-control" id="milik" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" required>
                </div>
                <div class="form-group">
                    <label for="alamat">No Telepon:</label>
                    <input type="number" name="no_telp" class="form-control" id="no_telp" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Foto:</label>
                    <input type="file" name="foto" class="form-control" id="foto" required>
                </div>
                <button type="submit" name="submit" value="Upload Image" class="btn btn-info">Simpan</button>
                <a class="btn btn-danger" href="v_ukm.php">Batal</a>
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