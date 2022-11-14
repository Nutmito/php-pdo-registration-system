<?php include 'config/db.php';

    if ($_SESSION == NULL) {
        header('Location: login');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.bundle.js"></script>
    <link rel="icon" href="favicon.png">
    
</head>
<body>
    <?php include 'template/navbar.php' ?>
</body>
</html>