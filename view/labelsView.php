
<?php 
$title = " - Labels";
ob_start();
require('element/header.php');
?>

<div class="container">
    <h2>Labels</h2>
</div>

<?php 
require('element/footer.php');
$content = ob_get_clean();
require('template.php');
?>