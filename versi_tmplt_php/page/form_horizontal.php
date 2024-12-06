<?php
include "../inc/header.php";
include "../inc/sidebar.php"
?>
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <form>
                                        <!-- nama -->
                                        <div class="row mb-3">
                                          <label for="inputNama3" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                          <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputNama3" placeholder="Nama Lengkap">
                                          </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="row mb-3">
                                          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                          <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                          </div>
                                        </div>

                                        <!-- password -->
                                        <div class="row mb-3">
                                          <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                          <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                          </div>
                                        </div>

                                        <!-- file -->
                                        <div class="row mb-3">
                                            <label for="formFile" class="col-sm-2 col-form-label">Default file input example</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                          </div>
                                          <div class="row mb-3">
                                            <label for="formFileMultiple" class="col-sm-2 col-form-label">Multiple files input example</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                                            </div>
                                          </div>
                                          <div class="row mb-3">
                                            <label for="formFileDisabled" class="col-sm-2 col-form-label">Disabled file input example</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="file" id="formFileDisabled" disabled>
                                            </div>
                                          </div>
                                          <div class="row mb-3">
                                            <label for="formFileSm" class="col-sm-2 col-form-label">Small file input example</label>
                                            <div class="col-sm-10">
                                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                                            </div>
                                          </div>
                                          <div class="row mb-3">
                                            <label for="formFileLg" class="col-sm-2 col-form-label">Large file input example</label>
                                            <div class="col-sm-10">
                                                <input class="form-control form-control-lg" id="formFileLg" type="file">
                                            </div>
                                          </div>

                                        <!-- radio -->
                                        <fieldset class="col-sm-10 offset-sm-2">
                                            <div class="btn-group col-sm-10 " role="group" aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                                <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>
                                              
                                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>
                                              
                                                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
                                              </div>
                                        </fieldset>

                                        <!-- checkbox -->
                                        <div class="row mb-3">
                                          <div class="col-sm-10 offset-sm-2">
                                            <div class="btn-group col-sm-10 " role="group" aria-label="Basic checkbox toggle button group">
                                                <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="btncheck1">Checkbox 1</label>

                                                <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="btncheck2">Checkbox 2</label>

                                                <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="btncheck3">Checkbox 3</label>
                                            </div>
                                          </div>
                                        </div>

                                        <!-- textarea -->
                                        <div class="form-floating">
                                            <div class="row mb-3">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">comment</label>
                                            </div>
                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                        </div>

                                        <div class="col-12 mb-4">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                              </select>
                                        </div>

                                        <!-- select multi -->
                                        <div class="col-12 mb-4">
                                        <select class="form-select" multiple aria-label="Multiple select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                          </select>
                                        </div>

                                        <!-- addons -->
                                        <div class="col-12 mb-4"> 
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                              </div>
                                              
                                              <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                <span class="input-group-text" id="basic-addon2">@example.com</span>
                                              </div>
                                              
                                              <div class="mb-3">
                                                <label for="basic-url" class="form-label">Your vanity URL</label>
                                                <div class="input-group">
                                                  <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                                  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                                                </div>
                                                <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div>
                                              </div>
                                              
                                              <div class="input-group mb-3">
                                                <span class="input-group-text">$</span>
                                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                <span class="input-group-text">.00</span>
                                              </div>
                                              
                                              <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                                                <span class="input-group-text">@</span>
                                                <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                                              </div>
                                              
                                              <div class="input-group">
                                                <span class="input-group-text">With textarea</span>
                                                <textarea class="form-control" aria-label="With textarea"></textarea>
                                              </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Sign in</button>
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
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
