<?php $title = " - Music Producer"; ?>

<?php ob_start(); ?>
<header id="header-indexview">
    <nav>
        <ul>
            <li><a id="header-indexmusics" href="index.php?action=musics">Musics</a></li>
            <li><a id="header-indexartworks" href="index.php?action=artworks">Artworks</a></li>
            <li><a id="header-indexnews" href="index.php?action=news">News</a></li>
            <li><a id="header-indexabout" href="index.php?action=aboutme">About Me</a></li>
            <li><a id="header-indexlabels" href="index.php?action=labels">Labels</a></li>
            <li><a id="header-indexcontact" href="index.php?action=contactme">Contact Me</a></li>
        </ul>
    </nav> 
</header>

<div id="container-index">
    <a href="index.php">
        <img src="public/img/logo-vektam/cropped-logo-2019.png" alt="logo-vektam">
        <h1>Vektam</h1>
    </a>
</div>

<?php 
require('element/footer.php');
$content = ob_get_clean();
require('template.php');
?>