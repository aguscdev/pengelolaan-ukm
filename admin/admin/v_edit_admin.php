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
			$id = $_GET['id'];
			$data = mysqli_query($koneksi,"select * from admin where id='$id'");
			while($d = mysqli_fetch_array($data)){
			?>

			<form method="post" action="action_edit_admin.php"> <!-- update.php -->
					<div class="form-group">
        			    <label for="id">Admin Id</label>
        			    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
        			    <input type="text" name="id" class="form-control" id="id" value="<?php echo $d['id']; ?>" required disabled="">
        			</div>
        			<div class="form-group">
        			    <label for="nama">Name</label>
        			    <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $d['nama']; ?>" required>
        			</div>
                    <div class="form-group">
                    <label for="usr">Username:</label>
                    <input type="text" name="username" class="form-control" id="usrname" value="<?php echo $d['username']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="password" class="form-control" id="pwd" value="<?php echo $d['password']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="sel1">Hak Akses:</label>
                    <select name="level" class="form-control" id="sel1">
                        <option>ADMIN</option>
                        <option>DESA</option>
                        <option>UKM</option>
                    </select>
                </div>
		                <button type="submit" class="btn btn-info">Simpan</button>
		                <a class="btn btn-danger" href="v_admin.php">Batal</a>
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