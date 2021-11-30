<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Survey Vaksinasi - Main</title>
</head>

<body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

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
                    <form action="completed.php" method="post">
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-5 col-form-label">Nama</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="nama" name="nama" required />
                            </div>
                            <div id="nama" class="form-text col-sm-7 ms-auto">*Masukkan Nama Lengkap</div>
                        </div>
                        <div class="mb-3 row">
                            <label for="usia" class="col-sm-5 col-form-label">Usia</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="usia" min="15" max="22" name="usia"
                                    required />
                            </div>
                            <div id="usia" class="form-text col-sm-7 ms-auto">*Masukkan Dalam Bentuk Angka</div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tempattinggal" class="col-sm-5 col-form-label">Tempat Tinggal</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="tempattinggal" name="alamat" required />
                            </div>
                            <div id="tempattinggal" class="form-text col-sm-7 ms-auto">*Masukkan Asal Kota Anda</div>
                        </div>
                        <div class="mb-3 row">
                            <label for="Tempat Tinggal" class="col-sm-5 col-form-label">Status Vaksin</label>
                            <div class="col-sm-7">
                                <select class="form-select" aria-label="Default select example" placeholder=""
                                    name="statusVax" required>

                                    <option value="sudah">Sudah</option>
                                    <option value="belum">Belum</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="alasan" class="form-label">Alasan Sudah / Belum Vaksin</label>
                            <textarea class="form-control" id="alasan" rows="3" name="alasanVax" required></textarea>
                        </div>
                        <div class="mb-3 row">
                            <label for="jenisvaksin" class="col-sm-5 col-form-label">Jenis Vaksin</label>
                            <div class="col-sm-7">
                                <select class="form-select" aria-label="Default select example" placeholder=""
                                    name="jenisVax" required>

                                    <option value="sinovac">Sinovac</option>
                                    <option value="astrazeneca">AstraZeneca</option>
                                    <option value="moderna">Moderna</option>
                                    <option value="pfizer">Pfizer</option>
                                    <option value="sinopharm">Sinopharm</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jumlahorangrumah" class="col-sm-5 col-form-label">Jumlah Orang di Rumah</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="jumlahorangrumah" min="0"
                                    name="orangRumah" required />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jumlahtervaksin" class="col-sm-5 col-form-label">Jumlah Orang Tervaksinasi di
                                Rumah</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="jumlahtervaksina" min="0"
                                    name="orangRumahVax" required />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="ratarata" class="col-sm-5 col-form-label">Rata-rata Kontak dengan Orang
                                Lain</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="ratarata" min="0" name="ratarata"
                                    required />
                            </div>
                            <div id="ratarata" class="form-text col-sm-7 ms-auto">
                                *Hitung rata-rata kontak dengan orang lain dalam sehari
                            </div>
                        </div>
                        <div class="col-5">
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br /><br /><br />
    </div>
</body>



</html>