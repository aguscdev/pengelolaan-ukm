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
			$data = mysqli_query($koneksi,"select * from user_ukm where id='$id'");
			while($d = mysqli_fetch_array($data)){
			?>

			<form method="post" action="action_edit_user_ukm.php"> <!-- update.php -->
					<div class="form-group">
        			    <label for="id">Id User</label>
        			    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
        			    <input type="text" name="id" class="form-control" id="id" value="<?php echo $d['id']; ?>" required disabled="">
        			</div>
        			<div class="form-group">
        			    <label for="user">Name:</label>
        			    <input type="text" name="username" class="form-control" id="user" value="<?php echo $d['username']; ?>" required>
        			</div>
            <?php } ?>
              <div class="form-group">
                  <label for="produk">Nama UKM:</label>
                  <select name="nama_ukm" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    <?php
                     include '../../config/koneksi.php';
                     $query = mysqli_query($koneksi,"SELECT * FROM ukm");
                    while($data=mysqli_fetch_array($query)) { ?>
                    <option value="<?php echo $data['nama_ukm']; ?>"><?php echo $data['nama_ukm']; ?></option>
                    <?php
                    } ?>
                  </select>
                </div>
                <?php
                  include '../../config/koneksi.php';
                  $id = $_GET['id'];
                  $data = mysqli_query($koneksi,"select * from user_ukm where id='$id'");
                  while($d = mysqli_fetch_array($data)){
                  ?>
                    <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" class="form-control" id="email" value="<?php echo $d['email']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $d['alamat']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="no_telp">No Telepon:</label>
                    <input type="number" name="no_telp" class="form-control" id="no_telp" value="<?php echo $d['no_telp']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="pass" class="form-control" id="pwd" value="<?php echo $d['pass']; ?>" required>
                </div>
                <div class="form-group">
            <label for="foto">Foto:</label>
            <input type="file" name="fhoto" class="form-control" id="foto" value="<?php echo $d['foto']; ?>" required>
        </div>
		            <button type="submit" class="btn btn-info">Simpan</button>
		            <a class="btn btn-danger" href="v_user_ukm.php">Batal</a>
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