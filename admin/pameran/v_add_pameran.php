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
            <div class="panel-heading">Tambah Pameran</div>
            <div class="panel-body">
            <form method="post" action="action_add_pameran.php">
                <div class="form-group">
                    <label for="pameran">Nama Pameran:</label>
                    <input type="text" name="nama_pameran" class="form-control" id="pameran" required>
                </div>
                <div class="form-group">
                    <label for="tempat">Tempat:</label>
                    <input type="text" name="tempat" class="form-control" id="tempat" required>
                </div>
                <div class="form-group">
                    <label for="waktu">Waktu:</label>
                    <input type="time" name="waktu" class="form-control" id="waktu" required>
                </div>
                <div class="form-group">
                    <label for="Peserta">Peserta:</label>
                    <input type="text" name="peserta" class="form-control" id="peserta" required>
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