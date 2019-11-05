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
                <div class="panel-heading">Profil Produk</div>
                <div class="panel-body">
                <!-- <a class="btn btn-success" href="../ukm/v_add_ukm.php"><i class="fa fa-pencil-square-o"></i>Tambah</a><br/><br/> -->
                    
                    <table class="table table-bordered">
                        <?php
                        include '../../config/koneksi.php';
                        $id = isset($_GET['id_produk']) ? $_GET['id_produk'] : "";
                        $query = mysqli_query($koneksi,"SELECT * FROM produk WHERE id_produk='$id'");
                        $data = mysqli_fetch_array($query);
                        ?>
                        <tbody>
                            <tr>
                                <th width="30%">ID</th>
                                <td><?php echo $data['id_produk']; ?></td>
                            </tr>
                            <tr>
                                <th width="30%">Nama Produk</th>
                                <td><?php echo $data['nama_produk']; ?></td>
                            </tr>
                            <tr>
                                <th width="30%">Deskripsi</th>
                                <td><?php echo $data['deskripsi']; ?></td>
                            </tr>
                            <tr>
                                <th width="30%">Harga</th>
                                <td><?php echo $data['harga']; ?></td>
                            </tr>
                            <tr>
                                <th width="30%">QTY</th>
                                <td><?php echo $data['qty']; ?></td>
                            </tr>
                            <tr>
                                <th width="30%">Foto</th>
                                <td><img src="../produk/<?php echo $data['foto']; ?>" width="200" height="200"/></td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="btn btn-primary" href="../ukm/v_ukm.php">Kembali</a>
                </div>
            </div>
        </section><br>
      </div>
    </div>
  </div>
</body>
<?php include '../home/footer.php'; ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#dtUser').DataTable();
    });
</script>
</html>
<?php
}
?>