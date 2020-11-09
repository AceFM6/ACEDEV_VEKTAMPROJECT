<?php 
$title = " - Music New";
ob_start();
?>

<div class="container">
    <?php if($id == 0): ?>
    <h1>Add Music</h1>
    <?php else: ?>
    <h1>Edit Music</h1>
    <?php endif ?>
    <form action="?action=editMusic&id=<?= $id ?>&post=true" method="post" id="edit-form">
        <div class=form>
            <label for="title">Title</label>
            <input name="title" id="title" placeholder="Title" <?php if($id != 0): ?>value="<?= $music['title'] ?>"<?php endif ?> required>
        </div>
        <div class=form>
            <label for="authors">Authors</label>
            <input name="authors" id="authors" placeholder="Authors" <?php if($id != 0): ?>value="<?= $music['authors'] ?>"<?php endif ?> required>
        </div>
        <div class=form>
            <label for="Authors">Created at</label>
            <input type="date" name="created_at" id="created_at" placeholder="<?= date("H:i:s") ?>" <?php if($id != 0): ?>value="<?= $music['created_at'] ?>"<?php endif ?> required>
        </div>
        <div class=form>
            <label for="credits">Content</label>
            <textarea name="credits" id="credits" cols="30" rows="20" placeholder="Crédits" required><?php if($id != 0): ?><?= $music['credits'] ?><?php endif ?></textarea>
        </div>
        <div class="form-button-group">
            <button type="submit">
                <?php if($id == 0): ?>
                ADD
                <?php else: ?>
                EDIT
                <?php endif ?>
            </button>
            <button class="delete-button" onclick="backMusicsManager()">BACK</button>
        </div>
    </form>
</div>

<?php 
$content = ob_get_clean();
require('adminTemplate.php');
?>