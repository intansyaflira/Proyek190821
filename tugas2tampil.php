<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>
    <body>
    <h1 class="display-1"><p class="text-danger">Berikut ini adalah biodata anda</h1>
    
 
</body>
<?php

$nama = $_POST['nama'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$tempatlahir = $_POST['tempatlahir'];
$tanggallahir = $_POST['tanggallahir'];
$usia = $_POST['usia'];
$hobi = $_POST['hobi'];
$citacita = $_POST['citacita'];
$asalsekolah = $_POST['asalsekolah'];


echo "<strong>1.Nama =</strong> " . $nama;
echo "<br/>";
echo "<strong>2.Jenis kelamin =</strong> " . $jeniskelamin;
echo "<br/>";
echo "<strong>3.Alamat =</strong> " . $alamat;
echo "<br/>";
echo "<strong>4.Agama =</strong> " . $agama;
echo "<br/>";
echo "<strong>5.Tempat lahir =</strong> " . $tempatlahir;
echo "<br/>";
echo "<strong>6.Tanggal Lahir =</strong>" . $tanggallahir;
echo "<br/>";
echo "<strong>7.Usia =</strong>" . $usia;
echo "<br/>";
echo "<strong>8.Hobi</strong>" . $hobi;
echo "<br/>";
echo "<strong>9.Cita-cita =</strong>" . $citacita;
echo "<br/>";
echo "<strong>10.Asal Sekolah</strong>" . $asalsekolah;
echo "<br/>";
?>