<?php
//ubah timezone menjadi jakarta
date_default_timezone_set("Asia/Jakarta");

//ambil jam dan menit
$jam = date('H:i');

//atur salam menggunakan IF
if ($jam > '05:30' && $jam < '10:00') {
    $salam = 'Pagi!';
} elseif ($jam >= '10:00' && $jam < '15:00') {
    $salam = 'Siang!';
} elseif ($jam < '18:00') {
    $salam = 'Sore!';
} else {
    $salam = 'Malam!';
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Botstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>Document</title>
  </head>
  <body>
    <div class="container bg-dark">
      <div class="row">
        <div class="col">
          <div class="text-center text-light justify-content-center">
            <h1 class="display-4"> <?php echo "Hallo Selamat, " . $salam; ?></h1>
            <hr class="my-4" />
            <?php echo date("l, d-M-Y") ?>
            <br>
            <?php echo time() ?>
            <br>
            <?php echo date("l", mktime(0,0,0,19,4,1998));?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
