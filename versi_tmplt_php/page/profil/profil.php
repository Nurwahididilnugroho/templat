<?php
require_once '../../inc/header.php'; // Path relatif
require_once '../../inc/sidebar.php';
?>
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Update Profile</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Update Profile</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Profile

                            </div>

                            <div class="card-body">
                                <div class="table">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <div class="card mb-4 text-center">
                                            <div class="card-header">
                                                <img src="https://up.yimg.com/ib/th?id=OIP.nIXLLZOuxcSSlQNv-uVXyAHaHa&pid=Api&rs=1&c=1&qlt=95&w=121&h=121" alt="gambar" class="rounded-circle" width="100">
                                            </div>
                                            <div class="card-body">
                                                <b class="h5">Ali Usman</b>
                                                <p>+62 8917866532</p>
                                                <a class="btn btn-primary  " href="<?= __BASEURL__ ?>page/profil/profile_update.php" role="button">Edit Profile </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-9">
                                        <div class="card mb-4">
                                            <div class="card-header">
                                                <i class="fas fa-user mr-1"></i>
                                                Profil Saya
                                            </div>
                                            <div class="card-body">
                                                        <table class="table table-striped">
                                                            <tr>
                                                                <th>Nama</th>
                                                                <th>:</th>
                                                                <td>Ali Usman</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Kontak</th>
                                                                <th>:</th>
                                                                <td>+62 8917866532</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Username</th>
                                                                <th>:</th>
                                                                <td>Ali</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Divisi</th>
                                                                <th>:</th>
                                                                <td>Pemasaran</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Kantor</th>
                                                                <th>:</th>
                                                                <td>Bekasi, Jawa Barat</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php
                require_once __DIR__ . '/../../inc/footer.php';
                ?>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../../dist/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../../dist/assets/demo/chart-area-demo.js"></script>
        <script src="../../dist/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="../../dist/assets/demo/datatables-demo.js"></script>
    </body>
</html>
