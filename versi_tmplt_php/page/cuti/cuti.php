<?php
// Memuat header, sidebar, dan footer
require_once __DIR__ . '/../../inc/header.php';
require_once __DIR__ . '/../../inc/sidebar.php';
?>
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Karyawan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Karyawan</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Karyawan
                                <a class="btn btn-primary float-right" href="cuti_add.php" role="button"><i class="fas fa-plus"></i> &nbsp;Tambah Cuti </a>
                            </div>
                            <div class="card-body">
                                <div class="table">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Karyawan</th>
                                                <th>Cuti</th>
                                                <th>Jumlah Cuti</th>
                                                <th>Supervisior</th>
                                                <th>Status saya</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <lu><strong>Nama : </strong> Ali Usman</lu> <br>
                                                    <lu><strong>Divisi : </strong> Pemasaran</lu>
                                                </td>
                                                <td>
                                                    <lu><strong>Request : </strong> 12-12-2024</lu> <br>
                                                    <lu><strong>Mulai : </strong> 24-12-2024</lu> <br>
                                                    <lu><strong>Akhir : </strong> 24-12-2025</lu>
                                                </td>
                                                <td>1 Tahun</td>
                                                <td> Diterima </td>
                                                <td> Diterima </td>
                                                <td>
                                                    <a class="btn btn-secondary btn-sm" href="user_view.php">
                                                        <i class="fas fa-search fa-sm"></i>
                                                    </a>
                                                    &nbsp;
                                                    <a class="btn btn-warning btn-sm" href="#">
                                                        <i class="fas fa-setting" ></i>
                                                    </a>
                                                    &nbsp;
                                                    <a class="btn btn-primary btn-sm" href="#">
                                                        <i class="fas fa-print" ></i>
                                                    </a>

                                                </td>
                                            </tr>
                                        
                                        </tbody>
                                    </table>
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                            <a class="page-link">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
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
