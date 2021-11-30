<?php  
require_once 'functions.php';

if(!isset($_GET['id'])){
    header("Location: result.php");
}


$id = $_GET['id'];
$data = query("SELECT * FROM data_vaksinasi WHERE id=$id")[0];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <title>Info Lengkap</title>
</head>

<body>
    <div class="container-fluid" style="background-color: #f5f5f5">
        <br /><br /><br />
        <div class="container" style="font-family: 'Manrope', sans-serif">
            <div class="card mx-auto shadow-lg p-3 mb-5 bg-body rounded" style="max-width: 800px">
                <div class="card-header text-center fw-bolder fs-5 text bg-dark text-white bg-opacity-75">
                    Info Lengkap
                </div>
                <div class="container">
                    <h4> Tempat Tinggal : </h4>
                    <p> <?= $data['alamat']; ?> </p>
                </div>
                <div class="container">
                    <h4> Alasan : </h4>
                    <p> <?= $data['alasanVax']; ?> </p>
                </div>
                <div class="container">
                    <h4> Jenis Vaksin : </h4>
                    <p> <?= $data['jenisVax']; ?> </p>
                </div>
                <div class="container">
                    <h4> Jumlah Orang Di Rumah : </h4>
                    <p> <?= $data['orangRumah']; ?> </p>
                </div>
                <div class="container">
                    <h4> Jumlah Orang Tervaksin Di Rumah : </h4>
                    <p> <?= $data['orangRumahVax']; ?> </p>
                </div>
                <div class="container">
                    <h4> Rata-rata Kontak dengan Orang Lain : </h4>
                    <p> <?= $data['ratarata']; ?> </p>
                </div>
                <center><a href="result.php"><button type="button" class="btn btn-secondary">Kembali</button></a>
                </center>
            </div>
        </div>
    </div>
</body>

</html>