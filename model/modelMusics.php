<?php

function getAllMusics() {
    $bdd = dbConnect();
    try
    {
        $query = $bdd->query('SELECT * FROM musics ORDER BY created_at ASC');
        $musics = $query->fetchAll();
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    return $musics;
}

function getMusic($id){
    $bdd = dbConnect();
    try
    {  
        $query = $bdd->prepare('SELECT * FROM musics WHERE id = ?');
        $query->execute(array($id));
        $music = $query->fetch();
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    return $music;
}

function htmlMusics($musics){
    $html = '';
    foreach($musics as $music){
        $html .= '<div class="music-card">
            <p class="music-title">'.htmlspecialchars($music['title']).'</p>
            <p class="music-authors">'.htmlspecialchars($music['authors']).'</p>
            <img src="public/img/music/'.htmlspecialchars($music['img']).'" alt="image '.htmlspecialchars($music['title']).'">
            <p class="music-created-at">'.htmlspecialchars($music['created_at']).'</p>
        </div>';
    }
    return $html; 
}

function htmlMusicsAdminTable($musics) {
    $html = '';
    foreach($musics as $music){
        $html .= '<tr>
            <th>'.$music['id'].'</th>
            <td><img class="min-img" src="public/img/musics/'.$music['img'].'"></td>
            <td>'.$music['title'].'</td>
            <td>'.$music['authors'].'</td>
            <td>'.$music['created_at'].'</td>
            <td>'.$music['credits'].'</td>
            <td>'.$music['posted_at'].'</td>
            <td>'.$music['img'].'</td>
            <td>
                <button class="editMusic edit-button sm-button" id="edit_'.$music['id'].'" ><i class="fas fa-edit"></i></button>
                <button class="deleteMusic delete-button sm-button" id="delete_'.$music['id'].'" ><i class="fas fa-trash-alt"></i></button>            
            </td>
        </tr>';
    }
    return $html;
}

function deleteMusic($id) {
    $bdd = dbConnect();
    try
    {    
        $query = $bdd->prepare('DELETE FROM musics WHERE id = ? ');
        $query->execute(array($id));
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
}

function addMusic($title, $authors, $created_at, $credits){
    $bdd = dbConnect();
    $date = date("Y-m-d H:i:s");
    try
    {    
        $query = $bdd->prepare('INSERT INTO musics (title, authors, created_at, credits, posted_at) VALUES (?, ?, ?, ?, ?)');
        $query->execute(array($title, $authors, $created_at, $credits, $date));
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
}

function editMusic($id, $title, $authors, $created_at, $credits){
    $bdd = dbConnect();
    try
    {    
        $query = $bdd->prepare('UPDATE musics SET title = ?, authors = ?, created_at = ?, credits = ?  WHERE id = ?');
        $query->execute(array($title, $authors, $created_at, $credits, $id));
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
}