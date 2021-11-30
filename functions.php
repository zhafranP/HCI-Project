<?php  

$host = 'sql312.epizy.com';
$username = 'epiz_30479689';
$password = '79v6g4XIdSSz';
$database = 'epiz_30479689_survey_vaksinasi';

$connections = mysqli_connect($host, $username, $password, $database);



function tambah($data){
    global $connections;
    $nama =  filter_var($data['nama'], FILTER_SANITIZE_STRING);
    $usia = filter_var($data['usia'], FILTER_SANITIZE_STRING);
    $alamat = filter_var($data['alamat'], FILTER_SANITIZE_STRING);
    $statusVax = filter_var($data['statusVax'], FILTER_SANITIZE_STRING);
    $alasanVax = filter_var($data['alasanVax'], FILTER_SANITIZE_STRING);
    $jenisVax = filter_var($data['jenisVax'], FILTER_SANITIZE_STRING);
    $orangRumah = filter_var($data['orangRumah'], FILTER_SANITIZE_STRING);
    $orangRumahVax = filter_var($data['orangRumahVax'], FILTER_SANITIZE_STRING);
    $ratarata = filter_var($data['ratarata'], FILTER_SANITIZE_STRING);

    $query ="INSERT INTO data_vaksinasi (nama,usia,alamat,statusVax,alasanVax,jenisVax,orangRumah,orangRumahVax,ratarata) VALUES 
    ('$nama', '$usia', '$alamat', '$statusVax', '$alasanVax', '$jenisVax', '$orangRumah', '$orangRumahVax', '$ratarata')";

    

    
    mysqli_query($connections,$query);
    return mysqli_affected_rows($connections);
}


?>