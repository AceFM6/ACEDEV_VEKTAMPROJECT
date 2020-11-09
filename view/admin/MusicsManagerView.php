<?php 
$title = " - Musics";
ob_start();
?>

<div class="container">
    <h1>Musics management</h1>

    <div class="option-bar">
        <input type="text" placeholder=" ID">
        <button class="create-button sm-button" onclick="addMusic()"><i class="fas fa-plus"></i></button>
    </div>

    <table>
        <thead>
            <th>ID</th>
            <th>Img</th>
            <th>Title</th>
            <th>Authors</th>
            <th>Created At</th>
            <th>Credits</th>
            <th>Posted At</th>
            <th>Paths/Img</th>
            <th id='actions'>actions</th>
        </thead>
        <tbody>
            <?= htmlMusicsAdminTable($musics) ?>
        </tbody>
    </table>

</div>

<?php 
$content = ob_get_clean();
require('adminTemplate.php');
?>