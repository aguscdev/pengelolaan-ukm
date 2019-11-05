<!DOCTYPE html>
<html>

<?php
session_start();
if ($_SESSION['username']=='') {
  header('location:../../user_ukm/login.php');

  
}else{

  $user = $_SESSION["username"];
  $id_user_ukm = $_SESSION["id_user_ukm"];
  // $id_produk = $_SESSION['id_produk'];  
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
                <div class="panel-heading">User UKM</div>
                <div class="panel-body">
                <a class="btn btn-success" href="../produk/v_add_produk.php"><i class="fa fa-pencil-square-o"></i>Tambah</a><br/><br/>
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
                                $id = isset($_GET['id']) ? $_GET['id'] : "";
                                $no = 1;
                                $data = mysqli_query($koneksi,"SELECT * FROM produk WHERE id_user_ukm='$id'"); 
                                // $d = mysqli_fetch_array($data); 
                                while($d = mysqli_fetch_array($data)) {
                            ?>
                                                       
                            <tr>
                                <td><?php echo $no++; ?></td>
                               
                                <td><?php echo $d['nama_produk']; ?></td>
                                <td><?php echo $d['deskripsi']; ?></a></td>
                                <td><?php echo $d['harga']; ?></td>
                                <td><?php echo $d['qty']; ?></td>
                                <td><img src="<?php echo $d['foto']; ?>" width="50" height="50"/></td> 
                                <td>
                                    <a href="v_edit_produk.php?id=<?php echo $d['id']; ?>" class="btn btn-warning">Edit</a> ||
                                    <a href="action_delete_produk.php?id=<?php echo $d['id']; ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php } ?>
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