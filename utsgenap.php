<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <title>UTS</title>
  </head>
  <body>
 <?php 
  if(isset($_POST['submit'])){
                             
                             $wilayah = $_POST['wilayah'];
                             $jmlp = $_POST['jmlp'];
                             $jmln = $_POST['jmln'];
                             $jmls = $_POST['jmls'];
                             $jmlm = $_POST['jmlm'];
                             $nama = $_POST['nama'];
                             $nim = $_POST['nim'];
                             $tanggal=date("'d F Y h:i:s A");
                             $buka=fopen("db.html",'a');
                             fwrite($buka,"<center> <div>Data Pemantauan Covid19 Wilayah  ${wilayah} </div> ");
                             fwrite($buka,"<div>Per ${tanggal}</div> ");
                             fwrite($buka," <div>${nama} / ${nim} </div>");
                             fwrite($buka,"<table class='table'>");
                             fwrite($buka,"<thead>");
                             fwrite($buka,"<tr>");
                             fwrite($buka,"<th scope='col'>Jumlah Positif</th> ");
                             fwrite($buka,"<th scope='col'>Jumlah Negatif</th> ");
                             fwrite($buka,"<th scope='col'>Jumlah Sembuh</th> ");
                             fwrite($buka,"<th scope='col'>Jumlah Meninggal</th> ");
                             fwrite($buka,"</tr> ");
                             fwrite($buka," </thead>");
                             fwrite($buka,"<tbody> ");
                             fwrite($buka,"<tr> ");
                             fwrite($buka," <td>${jmlp}</td>");
                             fwrite($buka," <td>${jmln}</td>");
                             fwrite($buka," <td>${jmls}</td>");
                             fwrite($buka," <td>${jmlm}</td>");
                             fwrite($buka,"</tr> ");
                             fwrite($buka," </tbody>");
                             fwrite($buka,"</table> ");
                             fclose($buka);
                             header("location: data.txt", true, 301);                                         
                         }
                         
                         ?>


  <h2>UTS WEB 2</h2>
  <p>Input Data Corona 2021</p>
  <form class="form-horizontal" action="uts asli.php" method="POST">
  <div class="input-group mb-3">
    
    <select name="wilayah" class="form-control" id="wilayah" placeholder="Pilih Wilayah">
        <option value="DKI Jakarta" selected>DKI Jakarta</option>
        <option value="Jawa Barat">Jawa Barat</option>
        <option value="Banten">Banten</option>
        <option value="Jawa Tengah">Jawa Tengah</option>
        
    </select>
  </div>
  <div class="input-group mb-3">
  <input type="text" class="form-control" name="jmlp" placeholder="Jumlah Positif" >
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" name="jmln" placeholder="Jumlah Negatif" >
</div>
<div class="input-group mb-3">
  <input type="text" class="form-control" name="jmls" placeholder="Jumlah Sembuh" >
</div>
<div class="input-group mb-3">
  <input type="text" class="form-control" name="jmlm" placeholder="Jumlah Meninggal" >
</div>
<div class="input-group mb-3">
  <input type="text" class="form-control" name="nama" placeholder="Nama Mahasiswa" >
</div>
<div class="input-group mb-3">
  <input type="text" class="form-control" name="nim" placeholder="NIM" >
</div>
<button type="submit" class="btn btn-primary" name="submit">Tambah Data</button>
  </form>


     </body>
</html>