<?php 
$title = " - News";
?>

<div class="container">
    <h1>News management</h1>
    <div class="option-bar">
        <input type="text" placeholder=" TITLE">
        <button class="create-button sm-button" onclick="addNew()"><i class="fas fa-plus"></i></button>
    </div>

    <table>
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>paths/img</th>
            <th>Created At</th>
            <th id='actions'>actions</th>
        </thead>
        <tbody>
            <?= htmlNewsAdminTable($news) ?>
        </tbody>
    </table>

</div>

<?php 
$content = ob_get_clean();
require('adminTemplate.php');
?>