<?php 
$title = " - News";
ob_start(); 
require('element/header.php');
?>

<div class="container">
    <h2>News</h2>
    <?= htmlNews($posts) ?>
</div>

<?php 
require('element/footer.php');
$content = ob_get_clean();
require('template.php');
?>