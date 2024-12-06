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
                                    <form >
                                        <!-- nama -->
                                        <div class="form-group">
                                            <label for="exampleInputNama">Nama Lengkap</label>
                                            <input type="email" class="form-control" id="exampleInputNama" aria-describedby="emailHelp">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>

                                        <!-- email -->
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>

                                        <!-- pasword -->
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>

                                        <!-- input file -->
                                        <div class="col-12 mb-4">
                                            <label for="formFile" class="form-label">Default file input example</label>
                                            <input class="form-control" type="file" id="formFile">
                                          </div>
                                          <div class="col-12 mb-4">
                                            <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                                          </div>
                                          <div class="col-12 mb-4">
                                            <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                                            <input class="form-control" type="file" id="formFileDisabled" disabled>
                                          </div>
                                          <div class="col-12 mb-4">
                                            <label for="formFileSm" class="form-label">Small file input example</label>
                                            <input class="form-control form-control-sm" id="formFileSm" type="file">
                                          </div>
                                          <div class="col-12 mb-4">
                                            <label for="formFileLg" class="form-label">Large file input example</label>
                                            <input class="form-control form-control-lg" id="formFileLg" type="file">
                                          </div>
                                      
                                        <!-- checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                              Default checkbox 1
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
                                            <label class="form-check-label" for="defaultCheck2">
                                              Disabled checkbox 2
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" disabled>
                                            <label class="form-check-label" for="defaultCheck3">
                                              Disabled checkbox 3
                                            </label>
                                          </div>

                                        <!-- radio check -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                              Default radio
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                              Second default radio
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                                            <label class="form-check-label" for="exampleRadios3">
                                              Disabled radio
                                            </label>
                                          </div>

                                        <!-- textarea -->
                                        <div class="mb-3">
                                            <label for="validationTextarea">Textarea</label>
                                            <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                                            <div class="invalid-feedback">
                                              Please enter a message in the textarea.
                                            </div>
                                          </div>

                                        <!-- select -->
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

                                        <div class="col-12">
                                          <button type="submit" class="btn btn-primary">Sign in</button>
                                        </div>
                                        
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
