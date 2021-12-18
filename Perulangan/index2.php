<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-baris {
            background-color: aqua;
        }
        .warna-kolom{
            background-color: blueviolet;
        }
    </style>
</head>
<body>
    <table border="5" cellpadding="50" cellspacing="5">
        <?php for($i = 1; $i <= 5; $i++) : ?>

            <?php if($i % 2 == 1) : ?>
                <tr class="warna-baris">
                <?php else : ?>
                <tr>
            <?php endif; ?>
            
            <?php for($j = 1; $j <= 5; $j++) : ?>

                <?php if($j % 2 == 1) : ?>
                    <td class="warna-kolom">
                    <?php else : ?>
                    <td>
                <?php endif; ?>

                <?php echo "$i,$j" ?>

            <?php endfor; ?>
        <?php endfor; ?>
    </table>
</body>
</html>