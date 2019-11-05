<?php 
// session_start();
if ($_SESSION['username']=='') {
    header('location:../../user_ukm/login.php');
}else{
    $user = $_SESSION["username"];
    $id_user_ukm = $_SESSION["id_user_ukm"];  
    // $id_produk = $_SESSION['id_produk'];


  // var_dump($user,$id,$id_produk);
  // die;
 ?>
      <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Menu Utama</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        </ul>
    </div>
    </nav>
</header>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
        <img src="../../assets/img/no-avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <p>
            <?php 
                echo $_SESSION["username"];
            ?>
        </p>
        <i class="fa fa-circle text-success"></i> Online
        </div>
    </div>
    <br>
    <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <li class="">
            <a href="../home/home.php">
                <i class="fa fa-university text-aqua"></i> <span>Home</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <li class="">
            <!-- <a href="../user_ukm/profil_user_ukm.php"> -->
                <a href="../user_ukm/profil_user_ukm.php?id=<?php echo $_SESSION["id_user_ukm"]; ?>">
                <i class="fa fa-user-o text-aqua"></i><span>Profil Pemilik UKM</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <!-- <li class="">
            <a href="../elband/v_elband.php">
                <i class="fa fa-folder text-aqua"></i> <span>ELBAND</span>
                <span class="pull-right-container"></span>
            </a>
        </li> -->
         <li>
            <a href="#kategori" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>KATEGORI</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="kategori" class="collapse ">
                <ul class="nav">
                    <li><a href="../kategori/v_kategori.php" class=""><i class="fa fa-list"></i> &nbsp List Kategori</a></li>
                    <!-- <li><a href="../kategori/v_add_kategori.php" class=""><i class="fa fa fa-plus text-aqua"></i> &nbsp Tambah Kategri</a></li> -->
                </ul>
            </div>
        </li>
        <li>
            <a href="#ukm" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>UKM</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="ukm" class="collapse ">
                <ul class="nav">
                    <!-- <li><a href="../ukm/v_add_ukm.php" class=""><i class="fa fa-list"></i> &nbsp Input UKM</a></li> -->
                    <!-- <li><a href="../ukm/v_ukm.php" class=""><i class="fa fa-user-o text-aqua"></i> &nbsp List UKM</a></li> -->
                     <li class="nav">
                    <!-- <a href="../user_ukm/profil_user_ukm.php"> -->
                    <a href="../ukm/v_detail_ukm.php?id_ukm=<?php echo $_SESSION["id_user_ukm"]; ?>">
                    <i class="fa fa-list"></i><span>&nbsp List UKM</span>
                    <span class="pull-right-container"></span>
                    </a>
                    </li>
                </ul>
            </div>
        </li>
         <li>
            <a href="#produk" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>PRODUK</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="produk" class="collapse ">
                <ul class="nav">
                    <!-- <li><a href="../produk/v_add_produk.php" class=""><i class="fa fa-list"></i> &nbsp Input Produk</a></li> -->
                    <!-- <li><a href="../produk/v_produk.php" class=""><i class="fa fa-list"></i> &nbsp List Produk</a></li> -->
                    <!-- <li><a href="../produk/v_detail_produk.php" class=""><i class="fa fa-list"></i> &nbsp List Produk</a></li> -->
                    <li class="nav">
            <!-- <a href="../user_ukm/profil_user_ukm.php"> -->
                        <a href="../produk/v_detail_produk.php?id=<?php echo $_SESSION["id_user_ukm"]; ?>">
                        <i class="fa fa-list"></i><span>&nbsp List Produk</span>
                        <span class="pull-right-container"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#pameran" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>PAMERAN</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="pameran" class="collapse ">
                <ul class="nav">
                    <li class="nav">
            <!-- <a href="../user_ukm/profil_user_ukm.php"> -->
                        <a href="../pameran/v_detail_pameran.php?id=<?php echo $_SESSION["id_user_ukm"]; ?>">
                        <i class="fa fa-list"></i><span>&nbsp List Pameran</span>
                        <span class="pull-right-container"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#pelatihan" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>PELATIHAN</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="pelatihan" class="collapse ">
                <ul class="nav">
                    <li class="nav">
            <!-- <a href="../user_ukm/profil_user_ukm.php"> -->
                        <a href="../pelatihan/v_detail_pelatihan.php?id=<?php echo $_SESSION["id_user_ukm"]; ?>">
                        <i class="fa fa-list"></i><span>&nbsp List Pelatihan</span>
                        <span class="pull-right-container"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#laporan" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>LAPORAN</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="laporan" class="collapse ">
                <ul class="nav">
                    <!-- <li><a href="../laporan/laporan_transaksi.php" class=""><i class="fa fa-list"></i> &nbsp Laporan Transaksi</a></li> -->
                    <!-- <li><a href="../laporan/laporan_produk.php" class=""><i class="fa fa-list"></i> &nbsp Laporan Produk</a></li> -->
                    <!-- <li><a href="../laporan/laporan_ukm.php" class=""><i class="fa fa-list"></i> &nbsp Laporan UKM</a></li> -->
                    <li class="nav">
            <!-- <a href="../user_ukm/profil_user_ukm.php"> -->
                        <a href="../laporan/laporan_produk.php?id_produk=<?php echo $_SESSION["id"]; ?>">
                        <i class="fa fa-list"></i><span>&nbsp Laporan Produk</span>
                        <span class="pull-right-container"></span>
                        </a>
                    </li>
                    <li class="nav">
            <!-- <a href="../user_ukm/profil_user_ukm.php"> -->
                        <a href="../laporan/laporan_ukm.php?id_ukm=<?php echo $_SESSION["id"]; ?>">
                        <i class="fa fa-list"></i><span>&nbsp Laporan UKM</span>
                        <span class="pull-right-container"></span>
                        </a>
                    </li>
                    <li class="nav">
            <!-- <a href="../user_ukm/profil_user_ukm.php"> -->
                        <a href="../laporan/laporan_transaksi.php?id=<?php echo $_SESSION["id"]; ?>">
                        <i class="fa fa-list"></i><span>&nbsp Laporan Transaksi</span>
                        <span class="pull-right-container"></span>
                        </a>
                    </li>
                    <!-- <li><a href="../laporan/laporan_pameran.php" class=""><i class="fa fa-list"></i> &nbsp Laporan Pameran</a></li> -->
                    <!-- <li><a href="../laporan/laporan_pelatihan.php" class=""><i class="fa fa-list"></i> &nbsp Laporan Pelatihan</a></li> -->
                    <!-- <li><a href="#" class=""><i class="fa fa fa-desktop text-aqua"></i> &nbsp Monitoring</a></li> -->
                </ul>
            </div>
        </li>
           <!--  <li class="">
            <a href="../admin/v_admin.php">
                <i class="fa fa-user-o text-aqua"></i><span>ADMIN</span>
                <span class="pull-right-container"></span>
            </a>
        </li> -->
        <!-- <li class="">
            <a href="#">
                <i class="fa fa fa-cog text-aqua"></i><span>Ganti Password</span>
                <span class="pull-right-container"></span>
            </a>
        </li> -->
        <!-- <li class="">
            <a href="../monitoring/v_add_monitoring.php">
                <i class="fa fa fa-desktop text-aqua"></i><span>Monitoring</span>
                <span class="pull-right-container"></span>
            </a>
        </li> -->
        <li>
            <a href="../logout.php">
                <i class="fa fa-power-off text-red"></i><span>Logout</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<?php } ?>