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
            <div class="panel-heading">Edit Produk</div>
            <div class="panel-body">
 
      <?php
      include '../../config/koneksi.php';
      $id = $_GET['id'];
      $data = mysqli_query($koneksi,"select * from produk where id='$id'");
      while($d = mysqli_fetch_array($data)){
      ?>

      <form method="post" action="action_edit_produk.php"> <!-- update.php -->
          <div class="form-group">
            <label for="id_produk">Produk Id</label>
            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
            <input type="text" name="id" class="form-control" id="id" value="<?php echo $d['id']; ?>" required disabled="">
          </div>
          <?php } ?>
          <div class="form-group">
              <label for="id_user_ukm">Pemilik UKM:</label>
              <select name="id_user_ukm" class="form-control" required>
                <option value="">-- Pilih --</option>
                <?php
                 include '../../config/koneksi.php';
                 $query = mysqli_query($koneksi,"SELECT * FROM user_ukm");
                while($data=mysqli_fetch_array($query)) { ?>
                <option value="<?php echo $data['id_user_ukm']; ?>"><?php echo $data['username']; ?></option>
                <?php
                } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="kategori">kategori:</label>
              <select name="kategori_id" class="form-control" required>
                <option value="">-- Pilih --</option>
                <?php
                 include '../../config/koneksi.php';
                 $query = mysqli_query($koneksi,"SELECT * FROM kategori");
                while($data=mysqli_fetch_array($query)) { ?>
                <option value="<?php echo $data['kategori_id']; ?>"><?php echo $data['nama_kategori']; ?></option>
                <?php
                } ?>
              </select>
            </div>
            <?php
              include '../../config/koneksi.php';
              $id = $_GET['id'];
              $data = mysqli_query($koneksi,"select * from produk where id='$id'");
              while($d = mysqli_fetch_array($data)){
              ?>
            <div class="form-group">
              <label for="nama">Name Produk</label>
              <input type="text" name="nama_produk" class="form-control" id="nama_produk" value="<?php echo $d['nama_produk']; ?>" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="<?php echo $d['deskripsi']; ?>" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" class="form-control" id="harga" value="<?php echo $d['harga']; ?>" required>
            </div>
            <div class="form-group">
                <label for="qty">QTY</label>
                <input type="number" name="qty" class="form-control" id="qty" value="<?php echo $d['qty']; ?>" required>
            </div>
            <div class="form-group">
              <label for="foto">Foto:</label>
              <input type="file" name="foto" class="form-control" id="foto" value="<?php echo $d['foto']; ?>" required>
            </div>
            <button type="submit" class="btn btn-info">Simpan</button>
            <a class="btn btn-danger" href="v_edit_produk.php">Batal</a>
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