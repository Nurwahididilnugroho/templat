<?php
require_once '../../inc/header.php'; // Path relatif
require_once '../../inc/sidebar.php';
?>
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tambah cuti</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tambah cuti</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Tambah cuti

                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">Pilih</th>
                                        <th scope="col">Cuti</th>
                                        <th scope="col">Sisa Cuti</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <div class="input-group-prepend">
                                                    <input  type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                                                </div>
                                            </th>
                                            <td>Cuti Tahunan</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">
                                            <div class="input-group-prepend">
                                                <input  type="radio" name="exampleRadios" id="exampleRadios1" value="option2" >
                                                </div>
                                        </th>
                                        <td>Cuti Bulanan</td>
                                        <td>5</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">
                                            <div class="input-group-prepend">
                                                <input  type="radio" name="exampleRadios" id="exampleRadios1" value="option2" >
                                            </div>
                                        </th>
                                        <td>Cuti Mingguan</td>
                                        <td>2</td>
                                        </tr>
                                    </tbody>
                                </table>
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputNama"><h4>Mulai Cuti</h4></label>
                                            <input type="date" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputNama"><h4>Akhir Cuti</h4></label>
                                            <input type="date" class="form-control">
                                        </div>

                                        

                                        <div class="form-group">
                                            <label><h4>Alasan Cuti</h4></label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label><h4>Alamat Selama Cuti</h4></label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                       
                                        <button type="submit" class="btn btn-primary">Submit </button>
                                        <a class="btn  " href="cuti.php" role="button">Kembali </a>
                                      </form>
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
