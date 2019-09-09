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
            <div class="panel-heading">Tambah Kategori</div>
            <div class="panel-body">
            <form method="post" action="action_add_kategori.php">
                <div class="form-group">
                  <label for="produk">Nama UKM:</label>
                  <select name="nama" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    <?php
                     include '../../config/koneksi.php';
                     $query = mysqli_query($koneksi,"SELECT * FROM user_ukm");
                    while($data=mysqli_fetch_array($query)) { ?>
                    <option value="<?php echo $data['nama_ukm']; ?>"><?php echo $data['nama_ukm']; ?></option>
                    <?php
                    } ?>
                  </select>
                </div>
                <button type="submit" class="btn btn-info">Simpan</button>
                <a class="btn btn-danger" href="v_kategori.php">Batal</a>
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