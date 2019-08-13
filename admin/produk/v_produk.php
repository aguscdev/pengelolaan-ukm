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
                <div class="panel-heading">Master Produk</div>
                <div class="panel-body">
                    <!-- <a href="../laporan/cetak.php" class="btn btn-sm btn-info pull-right"><i class="fa fa-print"></i>Cetak</a> -->
                    <a href="../produk/v_add_produk.php" class="btn btn-success" ><i class="fa fa-pencil-square-o"></i>Tambah</a><br/><br/>
                    <table id="dtUser" class="table table-bordered">
                        <thead>
                            <th>Produk Id</th>
                            <th>Nama Produk</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>QTY</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php
                                include '../../config/koneksi.php';
                                $no = 1;
                                $data = mysqli_query($koneksi,"select * from produk");
                                while($d = mysqli_fetch_array($data)) {
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['nama_produk']; ?></td>
                                <td><?php echo $d['deskripsi']; ?></td>
                                <td><?php echo $d['harga']; ?></td>
                                <td><?php echo $d['qty']; ?></td>
                                <td><img src="<?php echo $d['foto']; ?>" width="50" height="50"/></td> 
                                <td>
                                    <a href="v_edit_produk.php?id_produk=<?php echo $d['id_produk']; ?>" class="btn btn-warning">Edit</a> ||
                                    <a href="action_delete_produk.php?id_produk=<?php echo $d['id_produk']; ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php
                                };
                            ?>
                        </tbody>
                    </table>
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