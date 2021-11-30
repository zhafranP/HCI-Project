<?php  

require_once 'functions.php';

$dataVaksinasi = query("SELECT * FROM data_vaksinasi");

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

    <title>Result</title>
</head>

<body>
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
                <center><a href="form.php"><button type="button" class="btn btn-secondary">Kembali Ke
                            Form</button></a></center>
            </div>
        </div>
    </div>
</body>

</html>