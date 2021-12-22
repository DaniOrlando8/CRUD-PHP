<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
<?php if ( !isset($_POST["submit"])) : 
        header("Location: post.php");
        exit;   
    ?>
<?php endif ?>
<h1>Selamat datang, <?php echo $_POST["username"] ?></h1>
</body>
</html>