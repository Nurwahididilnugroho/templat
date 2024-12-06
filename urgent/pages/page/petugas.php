<?php
include "../inc/header.php";
include "../inc/sidebar.php"
?>
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Petugas</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Petugas</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                                Petugas
                                <a class="btn btn-primary float-right" href="petugas_add.php" role="button"><i class="fas fa-plus"></i> &nbsp;Tambah Petugas </a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Kantor</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><a href="petugas_view.php"><u>Kevin</u></a></td>
                                                <td>kevin@gmail.com</td>
                                                <td>Jakarta Barat</td>
                                                <td>
                                                    <a class="btn btn-danger btn-sm" href="petugas_edit.php">
                                                        <i class="fas fa-trash fa-sm"></i>
                                                    </a>
                                                    &nbsp; &nbsp;
                                                    <a class="btn btn-warning btn-sm" href="petugas_edit.php">
                                                        <i class="fas fa-pen" ></i>
                                                    </a>

                                                </td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                            <a class="page-link">Sebelumnya</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                            <a class="page-link" href="#">Selanjutnya</a>
                                            </li>
                                        </ul>
                                    </nav>
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
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
