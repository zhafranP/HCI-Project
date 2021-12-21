<?php
    $title = 'Form';
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
                            <input type="number" class="form-control" id="jumlahorangrumah" min="0" name="orangRumah"
                                required />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jumlahtervaksin" class="col-sm-5 col-form-label">Jumlah Orang Tervaksinasi di
                            Rumah</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" id="jumlahtervaksina" min="0" name="orangRumahVax"
                                required />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ratarata" class="col-sm-5 col-form-label">Rata-rata Kontak dengan Orang
                            Lain</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" id="ratarata" min="0" name="ratarata" required />
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



<?php

    include_once 'footer.php';

?>