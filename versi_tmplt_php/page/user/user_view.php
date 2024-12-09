<?php
require_once '../../inc/header.php'; // Path relatif
require_once '../../inc/sidebar.php';
?>
                <main>
                <div class="row">
           
                    <div class="container-fluid">
                        <h1 class="mt-4">Biodata petugas</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Biodata petugas</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Biodata petugas

                            </div>

                            <div class="card-body">
                                <div class="row ">
                                    <div class="col-sm-4 ">
                                        <div class="card">
                                            <div class="card-body">
                                                <img src="https://up.yimg.com/ib/th?id=OIP.nIXLLZOuxcSSlQNv-uVXyAHaHa&pid=Api&rs=1&c=1&qlt=95&w=121&h=121" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h3 class="card-title col-12">Ali Usman</h3>
                                                    <h4 class="card-text col-12">2111902</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="card">
                                        <div class="card-body">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Jenis Cuti</th>
                                                    <th>Tanggal Request </th>
                                                    <th>Jumlah Cuti</th>
                                                    <th>Status Supervisor</th>
                                                    <th>Status Manaje</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Cuti Tahunan</td>
                                                    <td>22-12-2023</td>
                                                    <td>5</td>
                                                    <td>Diterima</td>
                                                    <td>Diterima</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>2</td>
                                                    <td>Cuti Tahunan</td>
                                                    <td>22-12-2024</td>
                                                    <td>5</td>
                                                    <td>Diterima</td>
                                                    <td>Diterima</td>
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
                    </div>
                    <a href="user.php">kembali</a>
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
