<?php  
require_once 'functions.php';

if(!isset($_GET['id'])){
    header("Location: result.php");
}

$title = 'Show Result';
$id = $_GET['id'];
$data = query("SELECT * FROM data_vaksinasi WHERE id=$id")[0];
?>

<?php require_once 'header.php'; ?>

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

<?php require_once 'footer.php'; ?>