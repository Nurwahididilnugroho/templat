<?php
require_once __DIR__ . '/../config.php'; // Memuat config.php dari folder root
?>
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="<?= __BASEURL__ ?>page/dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <a class="nav-link" href="<?= __BASEURL__ ?>page/cuti/cuti.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-bookmark"></i></div>
                                Pengajuan Cuti Staff
                            </a>

                            <a class="nav-link" href="<?= __BASEURL__ ?>page/cutiatasan/cuti.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                                Pengajuan Cuti Atasan
                            </a>

                            <a class="nav-link" href="<?= __BASEURL__ ?>page/cuti/cuti_jenis.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-square"></i></div>
                                Jenis Cuti
                            </a>

                            <a class="nav-link" href="<?= __BASEURL__ ?>page/divisi/divisi.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-ghost"></i></div>
                                Divisi
                            </a>

                            <a class="nav-link" href="<?= __BASEURL__ ?>page/user/user.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Karyawan
                            </a>
                                
                            <a class="nav-link" href="<?= __BASEURL__ ?>page/profil/profil.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-pen"></i></div>
                                Update Profil
                            </a>

                            <a class="nav-link" href="<?= __BASEURL__ ?>page/profil/ganti_password.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-lock"></i></div>
                                    Ganti Password
                            </a>
                           
                            <a class="nav-link" href="<?= __BASEURL__ ?>page/auth/index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-arrow-left"></i></div>
                                Logout
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">


     