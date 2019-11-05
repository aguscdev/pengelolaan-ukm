<!DOCTYPE html>
<html>

<?php
session_start();
if ($_SESSION['username']=='') {
  header('location:../../user_ukm/login.php');

  
}else{

  $user = $_SESSION["username"];
  $id = $_SESSION["id"];  
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
                <div class="panel-heading">Nama Produk</div>
                <div class="panel-body">
                <!-- <a class="btn btn-success" href="../ukm/v_add_ukm.php"><i class="fa fa-pencil-square-o"></i>Tambah</a><br/><br/> -->
                    
                    <table class="table table-bordered">
                        <thead>
                            <th>Produk Id</th>
                            <th>Kategori</th>
                            <th>Nama UKM</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>QTY</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </thead>
                        <?php
                        include '../../config/koneksi.php';
                        $id = isset($_GET['id_produk']) ? $_GET['id_produk'] : "";
                        $query = mysqli_query($koneksi,"SELECT * FROM produk JOIN kategori ON produk.kategori_id=kategori.kategori_id WHERE id_produk='$id'");
                        $data = mysqli_fetch_array($query);
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $data['id_produk']; ?></td>
                                <td><?php echo $data['nama_kategori']; ?></td>
                                <td><?php echo $data['nama_produk']; ?></td>
                                <td><?php echo $data['deskripsi']; ?></td>
                                <td><?php echo $data['harga']; ?></td>
                                <td><?php echo $data['qty']; ?></td>
                                <td><img src="../produk/<?php echo $data['foto']; ?>" width="50" height="50"/></td>
                                <td>
                                    <a href="v_edit_produk.php?id_produk=<?php echo $d['id_produk']; ?>" class="btn btn-warning">Edit</a> ||
                                    <a href="action_delete_produk.php?id_produk=<?php echo $d['id_produk']; ?>" class="btn btn-danger">Hapus</a>
                                </td>
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