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
            <div class="panel-heading">Edit Pelatihan</div>
              <div class="panel-body">
 
            		<?php
                include '../../config/koneksi.php';
            		$id_pelatihan = $_GET['id_pelatihan'];
            		$data = mysqli_query($koneksi,"select * from pelatihan where id_pelatihan='$id_pelatihan'");
            		while($d = mysqli_fetch_array($data)){
            		?>

            		<form method="post" action="action_edit_pelatihan.php"> <!-- update.php -->
            			<div class="form-group">
            			    <label for="id">Id Pelatihan</label>
            			    <input type="hidden" name="id_pelatihan" value="<?php echo $d['id_pelatihan']; ?>">
            			    <input type="text" name="id_pelatihan" class="form-control" id="id_pelatihan" value="<?php echo $d['id_pelatihan']; ?>" required disabled="">
            			</div>
                <?php } ?>
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
                  <?php
                    include '../../config/koneksi.php';
                    $id_pelatihan = $_GET['id_pelatihan'];
                    $data = mysqli_query($koneksi,"select * from pelatihan where id_pelatihan='$id_pelatihan'");
                    while($d = mysqli_fetch_array($data)){
                    ?>
            			<div class="form-group">
            			    <label for="nama">Nama Pelatihan:</label>
            			    <input type="text" name="nama_pelatihan" class="form-control" id="pelatihan" value="<?php echo $d['nama_pelatihan']; ?>" required>
            			</div>
                  <div class="form-group">
                    <label for="tempat">Tempat:</label>
                    <input type="text" name="tempat" class="form-control" id="tempat" value="<?php echo $d['tempat']; ?>" required>
                  </div>
                  <div class="form-group">
                      <label for="tanggal">Tanggal:</label>
                      <input type="date" name="tanggal" class="form-control" id="tanggal" value="<?php echo $d['tanggal']; ?>" required>
                  </div>
                  <div class="form-group">
                      <label for="waktu">Waktu:</label>
                      <input type="time" name="waktu" class="form-control" id="waktu" value="<?php echo $d['waktu']; ?>" required>
                  </div>
                  <div class="form-group">
                      <label for="peserta">Peserta:</label>
                      <input type="text" name="peserta" class="form-control" id="peserta" value="<?php echo $d['peserta']; ?>" required>
                  </div>
                  <button type="submit" class="btn btn-info">Simpan</button>
                  <a class="btn btn-danger" href="v_pelatihan.php">Batal</a>
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