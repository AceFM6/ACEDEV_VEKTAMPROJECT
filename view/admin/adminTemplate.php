
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/adminstyle.css">
    <link rel="stylesheet" href="public/css/admincontainer.css">
    <link rel="shortcut icon" href="public/img/logo-vektam/favicon.png" type="image/x-icon">
    <title>Dashboard<?= $title ?></title>
</head>
<body>

    <?php require('element/navAdmin.php'); ?>

    <div id="container">
        <?= $content ?>
    </div>

    <script src="https://kit.fontawesome.com/d05518e593.js" crossorigin="anonymous"></script>
    <script src="public/js/admin.js" ></script>
</body>
</html>