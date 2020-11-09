<?php 
$title = " - Artworks";
ob_start();
require('element/header.php');
?>

<div class="container">
    <h2>Artworks</h2>
    <?= htmlArtworks($artworks) ?>
</div>

<?php 
require('element/footer.php');
$content = ob_get_clean();
require('template.php');
?>