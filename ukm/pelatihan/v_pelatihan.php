<!DOCTYPE html>
<html>

<?php
session_start();
if ($_SESSION['username']=='') {
  header('location:../admin/login.php');

  
}else{

  $user = $_SESSION["username"];
  $id_user_ukm = $_SESSION["id_user_ukm"];  
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
                <div class="panel-heading">Master Pelatihan</div>
                <div class="panel-body">
                <a class="btn btn-success" href="../pelatihan/v_add_pelatihan.php"><i class="fa fa-pencil-square-o"></i>Tambah</a><br/><br/>
                    <table id="dtUser" class="table table-bordered">
                        <thead>
                            <th>Pelatihan Id</th>
                            <th>Nama Pelatihan</th>
                            <th>Tempat</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Peserta</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php
                                include '../../config/koneksi.php';
                                $no = 1;
                                $data = mysqli_query($koneksi,"select * from pelatihan");
                                while($d = mysqli_fetch_array($data)) {
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['nama_pelatihan']; ?></td>
                                <td><?php echo $d['tempat']; ?></td>
                                <td><?php echo $d['tanggal']; ?></td>
                                <td><?php echo $d['waktu']; ?></td>
                                <td><?php echo $d['peserta']; ?></td>
                                <td>
                                    <a href="v_edit_pelatihan.php?id_pelatihan=<?php echo $d['id_pelatihan']; ?>" class="btn btn-warning">Edit</a> ||
                                    <a href="action_delete_pelatihan.php?id_pelatihan=<?php echo $d['id_pelatihan']; ?>" class="btn btn-danger">Hapus</a>
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