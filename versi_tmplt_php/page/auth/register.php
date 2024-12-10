<?php session_start();

include 'functions/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $register = register();

    if($register) {
        echo " <script>
        alert('Registrasi Berhasil, silahkan login');
        window.location='index.php';
        </script>";
    } elseif ($register === "Email sudah terdaftar") {
        echo "<script>
        alert('Email sudah terdaftar, silahkan gunakan email lain');
        window.location='register.php';
        </script>";
    } else {
        echo "<script>
        alert('gagal registrasi');
        window.location='register.php';
        </script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
        <link href="../../dist/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Nama Depan</label>
                                                        <input class="form-control py-4" name="first_name" id="inputFirstName" type="text" placeholder="Masukan Nama Depan" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Nama Belakang</label>
                                                        <input class="form-control py-4" name="last_name" id="inputLastName" type="text" placeholder="Masukan Nama Belakang" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" name="email" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Masukan Email" />
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Password</label>
                                                        <input class="form-control py-4" name="passwor" type="password" placeholder="Password" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Konfirmasi Password</label>
                                                        <input class="form-control py-4" name="password_confirm" type="password" placeholder="Konfirmasi Password" />
                                                    </div>
                                                </div>
                                            </div>

                                                <!-- <div class="form-group">
                                                    <label class="small mb-1" for="inputPassword">Password</label>
                                                    <input class="form-control py-4" name="password" id="inputPassword" type="password" placeholder="Enter password" />
                                                </div> -->
                                                
                                            <div class="form-group mt-4 mb-0">
                                                <input type="submit" Value="Registrasi" class="btn btn-primary">
                                                <!-- <a class="btn btn-primary btn-block" href="index.php">Create Account</a> -->
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="index.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
