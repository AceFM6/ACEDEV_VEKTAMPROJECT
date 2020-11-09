<?php 
$title = " - Musics";
ob_start();
require('element/header.php');
?>

<div class="container">
    <h2>Records</h2>
<?= htmlMusics($musics) ?>
</div>

<?php 
require('element/footer.php');
$content = ob_get_clean();
require('template.php');
?>