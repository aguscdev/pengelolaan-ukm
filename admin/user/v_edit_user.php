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
            <div class="panel-heading">Edit User</div>
            <div class="panel-body">
 
			<?php
      include '../../config/koneksi.php';
			$id_user = $_GET['id_user'];
			$data = mysqli_query($koneksi,"select * from user where id_user='$id_user'");
			while($d = mysqli_fetch_array($data)){
			?>

			<form method="post" action="action_edit_user.php"> <!-- update.php -->
					<div class="form-group">
        			    <label for="id">Id User</label>
        			    <input type="hidden" name="id_user" value="<?php echo $d['id_user']; ?>">
        			    <input type="text" name="id_user" class="form-control" id="id" value="<?php echo $d['id_user']; ?>" required disabled="">
        			</div>
        			<div class="form-group">
        			    <label for="user">Name:</label>
        			    <input type="text" name="username" class="form-control" id="user" value="<?php echo $d['username']; ?>" required>
        			</div>
                    <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" class="form-control" id="email" value="<?php echo $d['email']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="pass" class="form-control" id="pwd" value="<?php echo $d['pass']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="no_telp">No Telepon:</label>
                    <input type="number" name="no_telp" class="form-control" id="no_telp" value="<?php echo $d['no_telp']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $d['alamat']; ?>" required>
                </div>
		            <button type="submit" class="btn btn-info">Simpan</button>
		            <a class="btn btn-danger" href="v_user.php">Batal</a>
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