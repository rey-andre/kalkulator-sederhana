<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  </head>
  <body>
    <div class="container">
      <div class="text-center">
        <img src="assets/img/kalkulator.png" alt="kalkulator" class="img-fluid" width="150px" height="150px" />

        <h1>Kalkulator Sederhana</h1>
      </div>
      <form action="index.php" method="post">
        <div class="row align-items-start">
          <div class="col-3"></div>
          <div class="col-9">
            <div class="mt-3">
              <p class="fs-5">Bilangan 1</p>
              <div class="col-8">
                <input type="number" class="form-control" name="bilangan1" placeholder="Masukan Bilangan Pertama" />
              </div>
            </div>
            <div class="mt-3">
              <p class="fs-5">Bilangan 2</p>
              <div class="col-8">
                <input type="number" class="form-control" name="bilangan2" placeholder="Masukan Bilangan Kedua" />
                <div class="d-grid gap-2">
                  <input type="submit" name="submit" class="btn btn-primary mt-3" value="Hitung" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>

      <?php
      // Membuat fungsi
      function penjumlahan($bil1,$bil2){
        $hasil = $bil1 + $bil2;
        return $hasil;
      }
      function pengurangan($bil1,$bil2){
        $hasil = $bil1 - $bil2;
        return $hasil;
      }
      function perkalian($bil1,$bil2){
        $hasil = $bil1 * $bil2;
        return $hasil;
      }
      function pembagian($bil1,$bil2){
        $hasil = $bil1 / $bil2;
        return $hasil;
      }

      if (isset($_POST['submit'])) {
        $bilangan1 = $_POST['bilangan1'];
        $bilangan2 = $_POST['bilangan2'];
      
      ?>

      <div class="container mt-4">
        <div class="row align-items-start">
          <div class="col-3"></div>
          <div class="col-9">
            <p>Bilangan pertama adalah <?=$bilangan1;?></p>
            <p>Bilangan kedua adalah <?=$bilangan2;?></p>
            <div class="col-8">
              <hr />
            </div>
            <p>Hasil penjumlahan adalah <?=penjumlahan($bilangan1,$bilangan2);?></p>
            <p>Hasil pengurangan adalah <?=pengurangan($bilangan1,$bilangan2);?></p>
            <p>Hasil perkalian adalah <?=perkalian($bilangan1,$bilangan2);?></p>
            <p>Hasil pembagian adalah <?=pembagian($bilangan1,$bilangan2);?></p>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
