<?php
    $title = 'SignUp';
    include_once 'header.php';
    include_once 'includes/dbh.inc.php';
    
?>



<!-- Awal Signup Form -->

<div class="container-fluid" style="background-color: #f5f5f5">
    <br /><br /><br />
    <div class="container" style="font-family: 'Manrope', sans-serif">
        <div class="card mx-auto shadow-lg p-3 mb-5 bg-body rounded" style="max-width: 800px">
            <div class="card-header text-center fw-bolder fs-5 text bg-dark text-white bg-opacity-75">
                BUAT AKUN
            </div>
            <div class="card-body fs-7 text">
                <form action="includes/signup.inc.php" method="post">
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-5 col-form-label">Nama</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="name" name="name" required />
                        </div>
                        <div id="nama" class="form-text col-sm-7 ms-auto">*Masukkan Nama Anda</div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-5 col-form-label">Email</label>
                        <div class="col-sm-7">
                            <input type="email" class="form-control" id="email" name="email" required />
                        </div>
                        <div id="usia" class="form-text col-sm-7 ms-auto">*Masukkan Email Anda</div>
                    </div>
                    <div class="mb-3 row">
                        <label for="username" class="col-sm-5 col-form-label">Username</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="username" name="uid" required />
                        </div>
                        <div id="nama" class="form-text col-sm-7 ms-auto">*Masukkan Username Anda</div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="pwd" class="col-sm-5 col-form-label">Password</label>
                        <div class="col-sm-7">
                            <input type="password" class="form-control" id="password" name="pwd" required />
                        </div>
                        <div id="nama" class="form-text col-sm-7 ms-auto">*Masukkan Password Anda</div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pwdRepeat" class="col-sm-5 col-form-label">Verifikasi Password</label>
                        <div class="col-sm-7">
                            <input type="password" class="form-control" id="pwdRepeat" name="pwdrepeat" required />
                        </div>
                        <div id="nama" class="form-text col-sm-7 ms-auto">*Ulangi Password Anda</div>
                    </div>

                    <div class="col-5">
                        <button type="submit" class="btn btn-primary" name="signup">Sign Up</button>
                    </div>
                </form>

                <?php
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == "usernametaken") {
                                echo "<script type='text/javascript'>alert('Username sudah digunakan!');</script>";
                            }
                            else if ($_GET["error"] == "passwordsdontmatch") {
                                echo "<script type='text/javascript'>alert('Password tidak cocok, kedua password harus sama!');</script>";
                            }
                            else if ($_GET["error"] == "stmtfailed") {
                                echo "<script type='text/javascript'>alert('Terjadi kesalahan, silahkan coba lagi!');</script>";
                            }
                            else if ($_GET["error"] == "none") {
                                echo "<script type='text/javascript'>alert('Selamat, akun berhasil dibuat!');</script>";
                            }
                        }
                     ?>

            </div>
        </div>
    </div>
    <br /><br /><br />
</div>

<!-- Akhir Signup Form -->



<?php
    include_once 'footer.php';
?>