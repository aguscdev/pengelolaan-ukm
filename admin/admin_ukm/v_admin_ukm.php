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
                <div class="panel-heading">User UKM</div>
                <div class="panel-body">
                <a class="btn btn-success" href="../admin_ukm/v_add_admin_ukm.php"><i class="fa fa-pencil-square-o"></i>Tambah</a><br/><br/>
                    <table id="dtUser" class="table table-bordered">
                        <thead>
                            <th>Id User UKM</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>No. Telepon</th>
                            <!-- <th>Password</th> -->
                            <th>foto</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                             <?php
                                include '../../config/koneksi.php';
                                $no = 1;
                                $data = mysqli_query($koneksi,"SELECT * FROM user_ukm");
                                // $data = mysqli_query($koneksi,"SELECT * FROM user_ukm 
                                //     INNER JOIN produk ON user_ukm.id_produk=produk.id_produk
                                //     INNER JOIN ukm ON user_ukm.id_ukm=ukm.id_ukm"
                                // );
                                while($d = mysqli_fetch_array($data)) {
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['username']; ?></td>
                                <td><?php echo $d['email']; ?></td>
                                <td><?php echo $d['alamat']; ?></td>
                                <td><?php echo $d['no_telp']; ?></td>
                                <!-- <td><?php echo $d['pass']; ?></td> -->
                                <td><img src="<?php echo $d['fhoto']; ?>" width="50" height="50"/></td> 
                                <td>
                                    <a href="v_edit_admin_ukm.php?id_user_ukm=<?php echo $d['id_user_ukm']; ?>" class="btn btn-warning">Edit</a> ||
                                    <a href="action_delete_admin_ukm.php?id_user_ukm=<?php echo $d['id_user_ukm']; ?>" class="btn btn-danger">Hapus</a>
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