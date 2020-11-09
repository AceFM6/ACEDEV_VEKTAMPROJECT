<?php $title = " - Error 404"; ?>

<?php ob_start(); ?>

<div id="container">
    <a href="index.php">
        <img src="public/img/logo-vektam/cropped-logo-2019.png" alt="logo-vektam">
        <h1>ERREUR 404</h1>
    </a>
</div>

<?php 
$content = ob_get_clean();
require('template.php');
?>