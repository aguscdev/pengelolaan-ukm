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
            <div class="panel-heading">Edit Kategori</div>
            <div class="panel-body">
 
			<?php
      include '../../config/koneksi.php';
			$kategori_id = $_GET['kategori_id'];
			$data = mysqli_query($koneksi,"select * from kategori where kategori_id='$kategori_id'");
			while($d = mysqli_fetch_array($data)){
			?>

			<form method="post" action="action_edit_kategori.php"> <!-- update.php -->
					<div class="form-group">
        			    <label for="kategori_id">Kategori Id</label>
        			    <input type="hidden" name="kategori_id" value="<?php echo $d['kategori_id']; ?>">
        			    <input type="text" name="kategori_id" class="form-control" id="id" value="<?php echo $d['kategori_id']; ?>" required disabled="">
        			</div>
        			<div class="form-group">
        			    <label for="nama">Name Kategori</label>
        			    <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" value="<?php echo $d['nama_kategori']; ?>" required>
        			</div>
		          <button type="submit" class="btn btn-info">Simpan</button>
		          <a class="btn btn-danger" href="v_kategori.php">Batal</a>
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