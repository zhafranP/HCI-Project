<?php  
require_once 'functions.php';
$dataVaksinasi = query("SELECT * FROM data_vaksinasi");
$title = 'Result';
?>

<?php require_once 'header.php'; 

?>




<div class="container-fluid" style="background-color: #f5f5f5">
    <br /><br /><br />
    <div class="container" style="font-family: 'Manrope', sans-serif">
        <div class="card mx-auto shadow-lg p-3 mb-5 bg-body rounded" style="max-width: 800px">
            <div class="card-header text-center fw-bolder fs-5 text bg-dark text-white bg-opacity-75">
                RESULT SURVEY
            </div>

            <div class="container">
                <table width="750px" style="text-align: center;">
                    <tr>
                        <th>Nama</th>
                        <th>Usia</th>
                        <th>Status Vaksin</th>
                        <th>Info Lengkap</th>
                    </tr>

                    <?php foreach ($dataVaksinasi as $data): ?>
                    <tr>
                        <td><?= $data['nama']; ?></td>
                        <td><?= $data['usia']; ?></td>
                        <td><?= $data['statusVax']; ?></td>
                        <td><a href="showResult.php?id=<?= $data['id']; ?>"><button type="submit"
                                    class="btn btn-primary btn-sm fs-7 text">Show
                                    Result</button></a></td>
                    </tr>
                    <?php endforeach; ?>


                </table>
            </div>
            <div class='row'>
                <div class='col-lg-6'>
                    <center><a href="index.php"><button type="button" class="btn btn-secondary">Kembali Ke
                            Menu</button></a></center>
                </div>
                <div class='col-lg-6'>
                    <form action="makepdf.php" method="post">
                    <center><button type="submit" class="btn btn-secondary">Download PDF</button></center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once 'footer.php'; ?>
</html>