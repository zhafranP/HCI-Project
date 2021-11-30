<?php
include_once 'include/database.vaksin.php';

$koneksi2 = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (!$koneksi2) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}
$Nama            = "";
$Usia            = "";
$Tempat_Tinggal  = "";
$Vaksin          = "";
$Alasan          = "";
$Jenis           = "";
$Orang_Dirumah   = "";
$Orang_Vaksin    = "";
$Orang_Ketemu    = "";


$sukses     = "";
$error      = "";

if (isset($_POST['simpan'])) { //untuk create
    $Nama            = $_POST['Nama'];
    $Usia            = $_POST['Usia'];
    $Tempat_Tinggal  = $_POST['Tempat_Tinggal'];
    $Vaksin          = $_POST['Vaksin'];
    $Alasan          = $_POST['Alasan'];
    $Jenis           = $_POST['Jenis'];
    $Orang_Dirumah   = $_POST['Orang_Dirumah'];
    $Orang_Vaksin    = $_POST['Orang_Vaksin'];
    $Orang_Ketemu    = $_POST['Orang_Ketemu'];
    header('Location: completed.html');

    if ($Nama && $Usia && $Tempat_Tinggal && $Vaksin && $Alasan && $Jenis && $Orang_Dirumah && $Orang_Vaksin && $Orang_Ketemu) {
            $sql1   = "insert into datapenduduk(Nama,Usia,Tempat_Tinggal,Vaksin,Alasan,Jenis,Orang_Dirumah,Orang_Vaksin,Orang_Ketemu) values ('$Nama','$Usia','$Tempat_Tinggal','$Vaksin','$Alasan','$Jenis','$Orang_Dirumah','$Orang_Vaksin','$Orang_Ketemu')";
            $q1     = mysqli_query($koneksi2, $sql1);
            if ($q1) {
                $sukses     = "Terima Kasih Sudah Mengisi Survey";
            } else {
                $error      = "Gagal memasukkan data";
            }
    } else {
        $error = "Silakan masukkan semua data";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Bootstrap CSS -->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"
		/>

		<title>Survey Vaksinasi - Main</title>
	</head>
	<body>
		<!-- Optional JavaScript; choose one of the two! -->

		<!-- Option 1: Bootstrap Bundle with Popper -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&display=swap"
			rel="stylesheet"
		/>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
			crossorigin="anonymous"
		></script>
		<!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light fw-bold" style="background-color: #f5f5f5">
        <div class="container" style="font-family: 'Manrope', sans-serif">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="login.html">Dashboard</a></li>
                    </ul>
                </li>
            </ul>
            <span class="navbar-text"> Survey Vaksinasi</span>
        </div>
    </nav>
		<div class="container-fluid" style="background-color: #f5f5f5">
			<br /><br /><br />
			<div class="container" style="font-family: 'Manrope', sans-serif">
				<div class="card mx-auto shadow-lg p-3 mb-5 bg-body rounded" style="max-width: 800px">
					<div class="card-header text-center fw-bolder fs-5 text bg-dark text-white bg-opacity-75">
						SURVEY PASIEN VAKSINASI COVID-19
					</div>
					<div class="card-body fs-7 text">

						<?php
		                if ($error) {
		                ?>
		                    <div class="alert alert-danger" role="alert">
		                        <?php echo $error ?>
		                    </div>
		                <?php
		                    header("refresh:5;url=index.php");//5 : detik
		                }
		                ?>
		                <?php
		                if ($sukses) {
		                ?>
		                    <div class="alert alert-success" role="alert">
		                        <?php echo $sukses ?>
		                    </div>
		                <?php
		                    header("refresh:5;url=index.php");
		                }
		                ?>

		                <form action="" method="POST">
						<div class="mb-3 row">
							<label for="Nama" class="col-sm-5 col-form-label">Nama</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" id="Nama" name="Nama" value="<?php echo $Nama ?>" />
							</div>
							<div id="Nama" class="form-text col-sm-7 ms-auto">*Masukkan Nama Lengkap</div>
						</div>
						<div class="mb-3 row">
							<label for="Usia" class="col-sm-5 col-form-label">Usia</label>
							<div class="col-sm-7">
								<input type="number" class="form-control" id="Usia" name="Usia" value="<?php echo $Usia ?>" />
							</div>
							<div id="Usia" class="form-text col-sm-7 ms-auto">*Masukkan Dalam Bentuk Angka</div>
						</div>
						<div class="mb-3 row">
							<label for="Tempat_Tinggal" class="col-sm-5 col-form-label">Tempat Tinggal</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" id="Tempat_Tinggal"  name="Tempat_Tinggal" value="<?php echo $Tempat_Tinggal ?>" />
							</div>
							<div id="Tempat_Tinggal" class="form-text col-sm-7 ms-auto">*Masukkan Asal Kota Anda</div>
						</div>
						<div class="mb-3 row">
							<label for="Vaksin" class="col-sm-5 col-form-label">Status Vaksin</label>
							<div class="col-sm-7">
								<select class="form-control"  name="Vaksin" id="Vaksin">
	                                <option value="">- Pilih Status -</option>
	                                <option value="Sudah" <?php if ($Vaksin == "Sudah") echo "selected" ?>>Sudah</option>
	                                <option value="Belum" <?php if ($Vaksin == "Belum") echo "selected" ?>>Belum</option>
                            	</select>
							</div>
						</div>
						<div class="mb-3">
							<label for="Alasan" class="form-label">Alasan Sudah / Belum Vaksin</label>
							<div class="col-sm-12">
								<input type="text" class="form-control" id="Alasan" name="Alasan" value="<?php echo $Alasan ?>">
							</div>
						</div>
						<div class="mb-3 row">
							<label for="Jenis" class="col-sm-5 col-form-label">Jenis Vaksin</label>
							<div class="col-sm-7">
								<select class="form-control"  name="Jenis" id="Jenis">
	                                <option value="">- Pilih Status -</option>
	                                <option value="sinovac" <?php if ($Jenis == "sinovac") echo "selected" ?>>sinovac</option>
	                                <option value="astrazeneca" <?php if ($Jenis == "astrazeneca") echo "selected" ?>>astrazeneca</option>
	                                <option value="moderna" <?php if ($Jenis == "moderna") echo "selected" ?>>moderna</option>
	                                <option value="pfizer" <?php if ($Jenis == "pfizer") echo "selected" ?>>pfizer</option>
	                                <option value="sinopharm" <?php if ($Jenis == "sinopharm") echo "selected" ?>>sinopharm</option>
                            	</select>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="Orang_Dirumah" class="col-sm-5 col-form-label">Jumlah Orang di Rumah</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" id="Orang_Dirumah" name="Orang_Dirumah" value="<?php echo $Orang_Dirumah ?>">
							</div>
						</div>
						<div class="mb-3 row">
							<label for="Orang_Vaksin" class="col-sm-5 col-form-label">Jumlah Orang Tervaksinasi di Rumah</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" id="Orang_Vaksin"  name="Orang_Vaksin" value="<?php echo $Orang_Vaksin ?>" />
							</div>
						</div>
						<div class="mb-3 row">
							<label for="Orang_Ketemu" class="col-sm-5 col-form-label">Rata-rata Kontak dengan Orang Lain</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" id="Orang_Ketemu"  name="Orang_Ketemu" value="<?php echo $Orang_Ketemu ?>" />
							</div>
							<div id="Orang_Ketemu" class="form-text col-sm-7 ms-auto">
								*Hitung rata-rata kontak dengan orang lain dalam sehari
							</div>
						</div>
						<div class="col-5">
							<a href="completed.html"><input type="Submit" name="simpan" value="Submit" class="btn btn-primary fs-5 text" /></a>
						</div>
					</form>
					</div>
				</div>
			</div>
			<br /><br /><br/>
		</div>
	</body>
</html>