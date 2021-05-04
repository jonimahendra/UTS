<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <title>UTS PEMROGRAMAN WEB 2</title>
  </head>
  <body>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="poscietytomboldropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Wilayah
        </button>
        <div class="dropdown-menu" aria-labelledby="poscietytomboldropdown">
          <a class="dropdown-item" href="#">1. DKI JAKARTA </a>
          <a class="dropdown-item" href="#">2. JAWA BARAT</a>
          <a class="dropdown-item" href="#">3. BANTEN</a>
          <a class="dropdown-item" href="#">4. JAWA TENGAH</a>
        </div>
      </div>
      <br>
      <br>
      <br>
      
      <h1 class="mt-4" align="center">  Data Pemantauan Covid 19 Wilayah Jakarta dan Sekitar nya </h1>
       <h2 align="center" id="hasil"></h2>
            <script>
                var waktu = new Date(); 
                document.getElementById("hasil").innerHTML = waktu;
            </script>
             <h2 class="mt-4" align="center"> Joni Mahendra / 181021400132 </h2> 
             
      <br>  
     
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>POSITIF</th>
            <th>DIRAWAT</th>
            <th>SEMBUH</th>
            <th>MENINGGAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>411.157</td>
            <td>3.537</td>
            <td>397.349</td>
            <td>6.788</td>
            <td>
          </tr>
          
        </tbody>
      </table>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>