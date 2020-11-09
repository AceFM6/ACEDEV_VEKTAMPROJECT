<?php 
$title = " - Artworks";
ob_start();
?>

<div class="container">
    <h1>Artworks management</h1>

    <div class="option-bar">
        <input type="text" placeholder=" ID">
        <button class="create-button sm-button" onclick="addArtwork()"><i class="fas fa-plus"></i></button>
    </div>

    <table>
        <thead>
            <th>ID</th>
            <th>Img</th>
            <th>Paths/Img</th>
            <th>Content</th>
            <th>Posted At</th>
            <th id='actions'>actions</th>
        </thead>
        <tbody>
            <?= htmlArtworksAdminTable($artworks) ?>
        </tbody>
    </table>

</div>

<?php 
$content = ob_get_clean();
require('adminTemplate.php');
?>