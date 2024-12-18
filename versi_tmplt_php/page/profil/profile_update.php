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
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Nama Depan</label>
                                            <input type="text" class="form-control" placeholder="Nama Depan" autofocus>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Nama Belakang</label>
                                            <input type="text" class="form-control" placeholder="Nama Belakang">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" id="inputAddress" placeholder="Password">
                                    </div>

                                    <div class="form-group ">
                                        <label>Username</label>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>

                                    <div class="form-group ">
                                        <label>Kontak</label>
                                        <input type="text" class="form-control" placeholder="Kontak">
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Divisi</label>
                                            <input type="text" class="form-control" placeholder="Divisi">
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label>Kantor</label>
                                            <input type="text" class="form-control" placeholder="Kantor">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="formFile" class="form-label">Upload Foto</label>
                                        <input class="form-control-file" type="file" id="formFile">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                                    <a class="btn  " href="profil.php" role="button">Kembali </a>

                                </form>
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
