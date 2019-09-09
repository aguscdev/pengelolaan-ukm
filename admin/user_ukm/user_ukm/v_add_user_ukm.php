<!DOCTYPE html>
<html>

<?php
session_start();
if ($_SESSION['username']=='') {
  header('location:../../user_ukm/login.php');
  
}else{

  $user = $_SESSION["username"];
  $id = $_SESSION["id"];  
  // $level = $_SESSION["level"];

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
            <div class="panel-heading">Tambah User UKM</div>
            <div class="panel-body">
            <form method="post" action="action_add_user_ukm.php">
                <div class="form-group">
                    <label for="usr">Nama Pemilik:</label>
                    <input type="text" name="username" class="form-control" id="usr" required>
                </div>
                <div class="form-group">
                  <label for="produk">Nama UKM:</label>
                  <select name="id_ukm" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    <?php
                     include '../../config/koneksi.php';
                     $query = mysqli_query($koneksi,"SELECT * FROM ukm");
                    while($data=mysqli_fetch_array($query)) { ?>
                    <option value="<?php echo $data['id_ukm']; ?>"><?php echo $data['nama_ukm']; ?></option>
                    <?php
                    } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="produk">Produk:</label>
                  <select name="id_produk" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    <?php
                     include '../../config/koneksi.php';
                     $query = mysqli_query($koneksi,"SELECT * FROM produk");
                    while($data=mysqli_fetch_array($query)) { ?>
                    <option value="<?php echo $data['id_produk']; ?>"><?php echo $data['nama_produk']; ?></option>
                    <?php
                    } ?>
                  </select>
                </div>
                <div class="form-group">
                    <label for="usr">Email:</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                    <label for="Alamat">Alamat:</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" required>
                </div>
                <div class="form-group">
                    <label for="no_telp">No Telepon:</label>
                    <input type="number" name="no_telp" class="form-control" id="no_telp" required>
                </div>
                
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="pass" class="form-control" id="pwd" required>
                </div>
                <button type="submit" class="btn btn-info">Simpan</button>
                <a class="btn btn-danger" href="v_user_ukm.php">Batal</a>
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