<?php 
$title = " - About Me";
ob_start();
require('element/header.php');
?>

<div class="container">
    <h2>About Me</h2>
        <div id="container-text">
            <h3>Who I am ?</h3>
            <p>Hi, my name is Vektam, I am a 21 year old music producer from France.
                I make different style of music, but I tend to only upload and share my bass
                oriented music (Dubstep, Drum&bass, G-house, Riddim).<br/><br/>I am currently an 
                administrator of BassCreature Records as well as their graphist: You can see 
                my latest work in the Artwork section.<br/><br/>My musics are displayed in the Music 
                section, after a huge break from music production, 
                I can’t wait to show off my new projects, stay tuned!<br/><br/>Peace !</p>
        </div>
        <img src="public/img/pictures-vektam/vektam-black&white.jpg" alt="pictures-vektam black and white">
</div>


<?php 
require('element/footer.php');
$content = ob_get_clean();
require('template.php');
?>