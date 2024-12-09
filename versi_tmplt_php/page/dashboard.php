<?php
include "../inc/header.php";
include "../inc/sidebar.php"
?>
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2 bg-primary">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-white  text-uppercase mb-1">
                                                    Total Devisi</div>
                                                <div class="h5 mb-0 font-weight-bold text-white">3</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-chart-diagram fa-2x text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= __BASEURL__ ?>page/divisi/divisi.php">Lihat Detail</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2 bg-danger">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-white  text-uppercase mb-1">
                                                    Jenis Cuti</div>
                                                <div class="h5 mb-0 font-weight-bold text-white">2</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-calendar fa-2x text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= __BASEURL__ ?>page/cuti/cuti_jenis.php">Lihat Detail</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2 bg-success">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-white  text-uppercase mb-1">
                                                    Supervisior</div>
                                                <div class="h5 mb-0 font-weight-bold text-white">3</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-nurse fa-2x text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= __BASEURL__ ?>page/user/user.php">Lihat Detail</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2 bg-info">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-white  text-uppercase mb-1">
                                                    Karyawan</div>
                                                <div class="h5 mb-0 font-weight-bold text-white">4</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user fa-2x text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= __BASEURL__ ?>page/user/user.php">Lihat Detail</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-4 col-md-6 mb-8">
                                <div class="card border-left-primary shadow h-100 py-2 bg-info">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-white  text-uppercase mb-1">
                                                    Cuti Diterima</div>
                                                <div class="h5 mb-0 font-weight-bold text-white">4</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-file fa-2x text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="arsip.php">Lihat Detail</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                           
                            <div class="col-xl-4 col-md-6 mb-8">
                                <div class="card border-left-primary shadow h-100 py-2 bg-primary">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-white  text-uppercase mb-1">
                                                    Cuti Ditolak</div>
                                                <div class="h5 mb-0 font-weight-bold text-white">6</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-file fa-2x text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="arsip.php">Lihat Detail</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6 mb-8">
                                <div class="card border-left-primary shadow h-100 py-2 bg-success">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-white  text-uppercase mb-1">
                                                    Total Pengajuan</div>
                                                <div class="h5 mb-0 font-weight-bold text-white">10</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-file fa-2x text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="arsip.php">Lihat Detail</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                   
                            <div class="row ">
                                <div class="col-sm-4 ">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="https://up.yimg.com/ib/th?id=OIP.nIXLLZOuxcSSlQNv-uVXyAHaHa&pid=Api&rs=1&c=1&qlt=95&w=121&h=121" class="rounded mx-auto d-block" alt="...">
                                            <div class="card-body">
                                                <h4 class="rounded mx-auto d-block font-weight-bold">Ali Usman</h4>
                                                <h4 class="rounded mx-auto d-block font-italic">2111902</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-xs font-weight-bold text-black  text-uppercase mb-1"> Profil</div>
                                            <table class="table table-hover">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Nama</th>
                                                        <td>:</td>
                                                        <td>Ali Usman</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Email</th>
                                                        <td>:</td>
                                                        <td>Ali_usman@gmail.com</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Username</th>
                                                        <td >:</td>
                                                        <td >Ali</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">NIP</th>
                                                        <td >:</td>
                                                        <td >2111902</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                

                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../dist/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../dist/assets/demo/chart-area-demo.js"></script>
        <script src="../dist/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="../dist/assets/demo/datatables-demo.js"></script>
    </body>
</html>
