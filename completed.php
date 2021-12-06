<?php
    include_once 'header.php';
    require_once 'functions.php';
    if(isset($_POST['submit'])){
        tambah($_POST);
    }
    else{
        header("Location: index.php");
    }
?>


    <div class="container p-5">
        <div class="text-center">
            <img src="https://www.millergroup.ca/wp-content/uploads/2017/05/Checkmark.png" class="rounded"
                alt="Completed" height="350">
            <div class="text-center p-3">
                <h2>Terima Kasih Telah Mengisi</h2>
                <h2><span class="text-success">Form Survey Vaksinasi</span> Kami.</h2>
                <br>
                <a href="index.php"><button type="button" class="btn btn-secondary">Isi Form Lagi</button></a>
            </div>
        </div>
    </div>



<?php
    include_once 'footer.php';
?>
