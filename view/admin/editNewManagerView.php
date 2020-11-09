<?php 
$title = " - Edit New";
ob_start();
?>

<div class="container">
    <?php if($id == 0): ?>
    <h1>Add New</h1>
    <?php else: ?>
    <h1>Edit New</h1>
    <?php endif ?>
    <form action="?action=editNew&id=<?= $id ?>&post=true" method="post" id="edit-form">
        <div class=form>
            <label for="title">Title</label>
            <input name="title" id="title" placeholder="Title" <?php if($id != 0): ?>value="<?= $new['title'] ?>"<?php endif ?> required>
        </div>
        <div class=form>
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="20" placeholder="Content" required><?php if($id != 0): ?><?= $new['content'] ?><?php endif ?></textarea>
        </div>
        <div class="form-button-group">
            <button type="submit">
                <?php if($id == 0): ?>
                ADD
                <?php else: ?>
                EDIT
                <?php endif ?>
            </button>
            <button class="delete-button" onclick="backNewManager()">BACK</button>
        </div>
    </form>
</div>

<?php 
$content = ob_get_clean();
require('adminTemplate.php');
?>