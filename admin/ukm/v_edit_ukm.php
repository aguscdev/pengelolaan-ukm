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
            <div class="panel-heading">Edit UKM</div>
            <div class="panel-body">
 
            <?php
            include '../../config/koneksi.php';
            $id_ukm = $_GET['id_ukm'];
            $data = mysqli_query($koneksi,"select * from ukm where id_ukm='$id_ukm'");
            while($d = mysqli_fetch_array($data)){
            ?>
          <form method="post" action="action_edit_ukm.php"> <!-- update.php -->
            <div class="form-group">
                <label for="id">UKM Id</label>
                <input type="hidden" name="id_ukm" value="<?php echo $d['id_ukm']; ?>">
                <input type="text" name="id_ukm" class="form-control" id="id_ukm" value="<?php echo $d['id_ukm']; ?>" required disabled="">
            </div>
          <?php } ?>
          <div class="form-group">
              <label for="milik">Pemilik UKM:</label>
              <select name="id_user_ukm" class="form-control" required>
                <option value="">-- Pilih --</option>
                <?php
                 include '../../../config/koneksi.php';
                 $query = mysqli_query($koneksi,"SELECT * FROM user_ukm");
                while($data=mysqli_fetch_array($query)) { ?>
                <option value="<?php echo $data['username']; ?>"><?php echo $data['username']; ?></option>
                <?php
                } ?>
              </select>
            </div>
             <?php
          include '../../config/koneksi.php';
          $id_ukm = $_GET['id_ukm'];
          $data = mysqli_query($koneksi,"select * from ukm where id_ukm='$id_ukm'");
          while($d = mysqli_fetch_array($data)){
          ?>
           <div class="form-group">
                  <label for="nama_ukm">Nama UKM:</label>
                  <input type="text" name="nama_ukm" class="form-control" id="nama_ukm" value="<?php echo $d['nama_ukm']; ?>" required>
              </div>
          <div class="form-group">
                  <label for="alamat">Alamat:</label>
                  <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $d['alamat']; ?>" required>
              </div>
              <div class="form-group">
                  <label for="no_telp">Nomor Telepon:</label>
                  <input type="text" name="no_telp" class="form-control" id="no_telp" value="<?php echo $d['no_telp']; ?>" required>
              </div>
            <!-- <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" name="photo" class="form-control" id="foto" value="<?php echo $d['foto']; ?>" required>
            </div> -->
            <button type="submit" class="btn btn-info">Simpan</button>
            <a class="btn btn-danger" href="v_ukm.php">Batal</a>
          </form>
          <?php 
          }
          ?>

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