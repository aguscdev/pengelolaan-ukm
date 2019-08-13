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
                <div class="panel-heading">Master Pameran</div>
                <div class="panel-body">
                <a class="btn btn-success" href="../pameran/v_add_pameran.php"><i class="fa fa-pencil-square-o"></i>Tambah</a><br/><br/>
                    <table id="dtUser" class="table table-bordered">
                        <thead>
                            <th>Pameran Id</th>
                            <th>Nama Pameran</th>
                            <th>Tempat</th>
                            <th>Waktu</th>
                            <th>Peserta</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php
                                include '../../config/koneksi.php';
                                $no = 1;
                                $data = mysqli_query($koneksi,"select * from pameran");
                                while($d = mysqli_fetch_array($data)) {
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['nama_pameran']; ?></td>
                                <td><?php echo $d['tempat']; ?></td>
                                <td><?php echo $d['waktu']; ?></td>
                                <td><?php echo $d['peserta']; ?></td>
                                <td>
                                    <a href="v_edit_pameran.php?id_pameran=<?php echo $d['id_pameran']; ?>" class="btn btn-warning">Edit</a> ||
                                    <a href="action_delete_pameran.php?id_pameran=<?php echo $d['id_pameran']; ?>" class="btn btn-danger">Hapus</a>
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