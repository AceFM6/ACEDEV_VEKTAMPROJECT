<?php 
$title = " - Artwork New";
ob_start();
?>

<div class="container">
    <?php if($id == 0): ?>
    <h1>Add Artwork</h1>
    <?php else: ?>
    <h1>Edit Artwork</h1>
    <?php endif ?>
    <form action="?action=editArtwork&id=<?= $id ?>&post=true" method="post" id="edit-form">
        <div class=form>
            <label for="content">Content</label>
            <input name="content" id="content" placeholder="Content" <?php if($id != 0): ?>value="<?= $artwork['content'] ?>"<?php endif ?> required>
        </div>
        <div class="form-button-group">
            <button type="submit">
                <?php if($id == 0): ?>
                ADD
                <?php else: ?>
                EDIT
                <?php endif ?>
            </button>
            <button class="delete-button" onclick="backArtworksManager()">BACK</button>
        </div>
    </form>
</div>

<?php 
$content = ob_get_clean();
require('adminTemplate.php');
?>