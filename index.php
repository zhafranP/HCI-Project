<?php
    $title = 'Homepage';  
    include_once 'header.php';
?>

<div class="container-fluid" style="background-color: #f5f5f5">
    <br /><br /><br />
    <div class="container" style="font-family: 'Manrope', sans-serif">
        <div class="card mx-auto shadow-lg p-3 mb-5 bg-body rounded" style="max-width: 800px">
            <div class="card-header text-center fw-bolder fs-5 text bg-dark text-white bg-opacity-75">
                SURVEY PASIEN VAKSINASI COVID-19
            </div>
            <div class="card-body fs-7 text">
                <center>Selamat Datang di Website Survey Pasien Vaksinasi Covid-19</center><br><br>
                <div class="mb-3 row">
                    <p>Pada survey ini, anda akan ditanyakan beberapa pertanyaan mengenai hal-hal yang berhubungan
                        dengan covid-19. Survey ini kami lakukan untuk mengetahui lebih detail tentang kondisi dan
                        lingkungan sekitar anda.</p>
                </div>
                <div class="mb-3 row">

                    <p>Hasil survey anda akan sangat berarti bagi kami. Oleh karena itu, kami memohon kerjasama anda
                        supaya dapat mengisi survey ini dengan jujur.</p>
                </div>
                <br><br><br><br><br><br><br><br><br>
                <div class="mb-3 row">

                    <?php
                            if (isset($_SESSION['useruid'])) {
                                echo "<center><a href=\"result.php\"><button type=\"submit\" class=\"btn btn-warning fs-5 text\">Dashboard</button></a></center>";
                            }
                            else {
                                $useruid = $_SESSION['useruid'];
                                $tampil = mysqli_query($connections, "SELECT jumlahIsi FROM users WHERE usersUid = '$useruid';");

                                while ($data = mysqli_fetch_array($tampil)) {
                                    $check = $data['jumlahIsi'];
                                }

                                if ($check == "1") {
                                    echo "<p class='text-center fw-bold'>Anda sudah mengisi form, <span class='text-success'>Terima Kasih</span> atas partisipasinya.</p>";
                                }
                                else {
                                    echo "<center><a href=\"form.php\"><button type=\"submit\" class=\"btn btn-primary fs-5 text\">Isi
                                    Survey</button></a></center>";
                                }
                            }
                        ?>

                </div>
            </div>
        </div>
    </div>
    <br /><br /><br />
</div>



<?php
    include_once 'footer.php';
?>
