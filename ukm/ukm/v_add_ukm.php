<!DOCTYPE html>
<html>

<?php
session_start();
if ($_SESSION['username']=='') {
  header('location:../../user_ukm/login.php');

  
}else{

  $user = $_SESSION["username"];
  $id_user_ukm = $_SESSION["id_user_ukm"];  
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
            <div class="panel-heading">Tambah UKM</div>
            <div class="panel-body">
            <form method="post" action="action_add_ukm.php">
              <div class="form-group">
                  <label for="id_user_ukm">ID UKM</label>
                  <input type="text" name="id_user_ukm" class="form-control" id="id_user_ukm" required disabled="">
              </div>
              <div class="form-group">
                    <label for="nama_ukm">Nama UKM:</label>
                    <input type="text" name="nama_ukm" class="form-control" id="nama_ukm" required>
                </div>
                <div class="form-group">
                  <label for="kategori">Nama Pemilik:</label>
                  <select name="pemilik_ukm" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    <?php
                     include '../../config/koneksi.php';
                     $query = mysqli_query($koneksi,"SELECT * FROM user_ukm");
                    while($data=mysqli_fetch_array($query)) { ?>
                    <option value="<?php echo $data['username']; ?>"><?php echo $data['username']; ?></option>
                    <?php
                    } ?>
                  </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" required>
                </div>
                <div class="form-group">
                    <label for="alamat">No Telepon:</label>
                    <input type="number" name="no_telp" class="form-control" id="no_telp" required>
                </div>
                <!-- <div class="form-group">
                    <label for="alamat">Foto:</label>
                    <input type="file" name="photo" class="form-control" id="foto" required>
                </div> -->
                <button type="submit" name="submit" value="Upload Image" class="btn btn-info">Simpan</button>
                <a class="btn btn-danger" href="../ukm/v_detail_ukm.php?id_ukm=<?php echo $_SESSION["id_user_ukm"]; ?>">Batal</a>
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