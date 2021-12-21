<?php
  $title = 'Login';
  include_once 'header.php';
?>



<body class="bg-light">

    <!-- Login Form -->

    <div class="container-fluid" style="background-color: #f5f5f5">
        <br /><br /><br />
        <div class="container" style="font-family: 'Manrope', sans-serif">
            <div class="card mx-auto shadow-lg p-3 mb-5 bg-body rounded" style="max-width: 800px">
                <div class="card-header text-center fw-bolder fs-5 text bg-dark text-white bg-opacity-75">
                    LOGIN
                </div>
                <div class="card-body fs-7 text">
                    <form action="includes/login.inc.php" method="post">
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-5 col-form-label">Username / Email</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="uid" id="exampleInputEmail1" required />
                            </div>
                            <div id="nama" class="form-text col-sm-7 ms-auto">*Masukkan Username atau Email Anda</div>
                        </div>
                        <div class="mb-3 row">
                            <label for="usia" class="col-sm-5 col-form-label">Password</label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control" name="pwd" id="exampleInputPassword1"
                                    required />
                            </div>
                            <div id="usia" class="form-text col-sm-7 ms-auto">*Masukkan Password Anda</div>
                        </div>

                        <div class="col-5">
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                        </div>
                    </form>

                    <?php
                      if (isset($_GET["error"])) {
                        if ($_GET["error"] == "wronglogin") {
                          echo "<script type='text/javascript'>alert('Kesalahan informasi login!');</script>";
                        }
                      }
                    ?>

                </div>
            </div>
        </div>
        <br /><br /><br />
    </div>

    <!-- Akhir Login Form -->

</body>


<?php
  include_once 'footer.php';
?>