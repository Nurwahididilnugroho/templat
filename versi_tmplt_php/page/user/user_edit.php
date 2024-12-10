<?php
require_once '../../inc/header.php'; // Path relatif
require_once '../../inc/sidebar.php';
?>
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Edit User</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit User</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Edit User
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <form>
                                   
                                        <!-- nama -->
                                        <div class="row mb-3">
                                          <div class="col-sm-12">
                                            <input type="text" class="form-control" id="inputNama3" placeholder="Nama Lengkap">
                                          </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="row mb-3">
                                          <div class="col-sm-12">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                          </div>
                                        </div>

                                        <!-- password -->
                                        <div class="row mb-3">
                                          <div class="col-sm-12">
                                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                          </div>
                                        </div>
                                                <td> 
                                                    <a class="nav-link dropdown-toggle col-sm-1 mb-2 col-form-label btn-primary" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                    Level User
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Admin</a>
                                                        <a class="dropdown-item" href="#">User</a>
                                                    </div>
                                                </td>
                                        <!-- file -->
                                          <div class="row mb-3">
                                            <label for="formFile" class="col-sm-2 col-form-label">Passfoto</label>
                                            <div class="col-sm-2">
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                          </div>
                                          
                                        <button type="submit" class="btn btn-primary">Input </button>
                                        <a class="btn btn-primary float-right" href="user.php" role="button">Kembali <i class="fas fa-back"></i></a>
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
