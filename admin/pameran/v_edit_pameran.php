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
            <div class="panel-heading">Edit Pameran</div>
              <div class="panel-body">
 
            		<?php
                include '../../config/koneksi.php';
            		$id_pameran = $_GET['id_pameran'];
            		$data = mysqli_query($koneksi,"select * from pameran where id_pameran='$id_pameran'");
            		while($d = mysqli_fetch_array($data)){
            		?>

            		<form method="post" action="action_edit_pameran.php"> <!-- update.php -->
            			<div class="form-group">
            			    <label for="id">Pameran Id</label>
            			    <input type="hidden" name="id_pameran" value="<?php echo $d['id_pameran']; ?>">
            			    <input type="text" name="id_pameran" class="form-control" id="id_pameran" value="<?php echo $d['id_pameran']; ?>" required disabled="">
            			</div>
            			<div class="form-group">
            			    <label for="nama">Nama Pameran:</label>
            			    <input type="text" name="nama_pameran" class="form-control" id="pameran" value="<?php echo $d['nama_pameran']; ?>" required>
            			</div>
                  <div class="form-group">
                    <label for="tempat">Tempat:</label>
                    <input type="text" name="tempat" class="form-control" id="tempat" value="<?php echo $d['tempat']; ?>" required>
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
                  <a class="btn btn-danger" href="v_pameran.php">Batal</a>
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