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
    <h1 class="display-1"><p class="text-danger">Isikan form berikut!</h1>
    
</body>
<form method="post" action="tugas2tampil.php">
    <label><b>1.Masukkan Nama</b></label><br/>

    <input type="text" name="nama"><br/>
    <label><b>2.Jenis Kelamin</b></label><br/>
    <input type="text" name="jeniskelamin">
    <br>
    <label><b>3.Alamat</b></label><br/>
    <input type="text" name="alamat"><br/>
    <label><b>4.Agama</b></label><br/>
    <input type="text" name="agama"><br/>
    <label><b>5.Tempat Lahir</b></label><br/>
    <input type="text" name="tempatlahir"><br/>
    <label><b>6.Tanggal lahir</b></label><br/>
    <input type="text" name="tanggallahir"><br/> 
    <label><b>7.Usia</b></label><br/>
    <input type="text" name="usia"><br/>
    <label><b>8.Hobi</b></label><br/>
    <input type="text" name="hobi"><br/> 
    <label><b>9.Cita-Cita</b></label><br/>
    <input type="text" name="citacita"><br/> 
    <label><b>10.Asal Sekolah</b></label><br/>
    <input type="text" name="asalsekolah"><br/>
    <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Data yang saya isikan sudah benar
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
    <input type="submit" value="submit">
    