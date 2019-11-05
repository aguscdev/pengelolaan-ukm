<!DOCTYPE html>
<html>

<?php
session_start();
if ($_SESSION['username']=='') {
  header('location:../admin/login.php');

  
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
            <div class="panel-heading">Tambah Pameran</div>
            <div class="panel-body">
            <form method="post" action="action_add_pameran.php">
              <div class="form-group">
                  <label for="id_user_ukm">Id Pameran</label>
                  <input type="text" name="id_user_ukm" class="form-control" id="id_user_ukm" required disabled="">
              </div>
              <div class="form-group">
                  <label for="id_ukm">Nama UKM:</label>
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
                    <label for="pameran">Nama Pameran:</label>
                    <input type="text" name="nama_pameran" class="form-control" id="pameran" required>
                </div>
                <div class="form-group">
                    <label for="tempat">Tempat:</label>
                    <input type="text" name="tempat" class="form-control" id="tempat" required>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal:</label>
                    <input type="date" name="tanggal" class="form-control" id="tanggal" required>
                </div>
                <div class="form-group">
                    <label for="waktu">Waktu:</label>
                    <input type="time" name="waktu" class="form-control" id="waktu" required>
                </div>
                <div class="form-group">
                    <label for="biaya">Biaya:</label>
                    <input type="text" name="biaya" class="form-control" id="biaya" required>
                </div>
                <div class="form-group">
                    <label for="Peserta">Peserta:</label>
                    <input type="text" name="peserta" class="form-control" id="peserta" required>
                </div>
                <button type="submit" name="submit" class="btn btn-info">Simpan</button>
                <!-- <a class="btn btn-danger" href="v_pameran.php">Batal</a> -->
                <a class="btn btn-danger" href="../pameran/v_detail_pameran.php?id=<?php echo $_SESSION["id_user_ukm"]; ?>">
                <span>Batal</span>
                <span class="pull-right-container"></span>
                </a>
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