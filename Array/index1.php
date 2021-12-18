<?php 
/*Perulangan pada array mengunakan for dan foreach*/

$arr1 = [12,12312,321321,123,321,999];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array 2</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <!-- Array pada For dengan looping -->
    <div class="d-flex bd-highlight">
        <?php for ($i=0; $i < count($arr1); $i++) : ?>
            <div class="p-2 bg-dark text-light border border-2 border-light">
                 <?= $arr1[$i] ?>
            </div>
        <?php endfor; ?>
    </div>

        <div><br></div>

    <!-- Array pada Foreach dengan looping -->
    <div class="d-flex bd-highlight">
        <?php foreach ($arr1 as $arr): ?>
            <div class="p-2 bg-dark text-light border border-2 border-light">
                <?= $arr ?>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>