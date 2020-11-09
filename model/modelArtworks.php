<?php

function getAllArtworks() {
    $bdd = dbConnect();
    try
    {  
        $query = $bdd->query('SELECT * FROM artworks ORDER BY id ASC');
        $artworks = $query->fetchAll();
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    return $artworks;
}

function htmlArtworks($artworks) {
    $html = '';
    foreach($artworks as $artwork) {
        $html .= '<div class="artwork">
            <img src="public/img/artwork/'.htmlspecialchars($artwork['img']).'" alt="img '.htmlspecialchars($artwork['content']).'">
            <p class="artwork-content">'.htmlspecialchars($artwork['content']).'</p>
        </div>';
    }    
    return $html;
}

function getArtwork($id){
    $bdd = dbConnect();
    try
    {  
        $query = $bdd->prepare('SELECT * FROM artworks WHERE id = ?');
        $query->execute(array($id));
        $artwork = $query->fetch();
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    return $artwork;
}

function htmlArtworksAdminTable($artworks) {
    $html = '';
    foreach($artworks as $artwork){
        $html .= '<tr>
            <th>'.$artwork['id'].'</th>
            <td><img class="min-img" src="public/img/artworks/'.$artwork['img'].'"></td>
            <td>'.$artwork['img'].'</td>
            <td>'.$artwork['content'].'</td>
            <td>'.$artwork['posted_at'].'</td>
            <td>
                <button class="editArtwork edit-button sm-button" id="edit_'.$artwork['id'].'" ><i class="fas fa-edit"></i></button>
                <button class="deleteArtwork delete-button sm-button" id="delete_'.$artwork['id'].'" ><i class="fas fa-trash-alt"></i></button>            
            </td>
        </tr>';
    }
    return $html;
}

function addArtwork($content){
    $bdd = dbConnect();
    $date = date("Y-m-d H:i:s");
    try
    {    
        $query = $bdd->prepare('INSERT INTO artworks ( content, posted_at) VALUES (?, ?)');
        $query->execute(array( $content, $date));
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
}

function editArtwork($id, $content){
    $bdd = dbConnect();
    try
    {    
        $query = $bdd->prepare('UPDATE artworks SET content = ? WHERE id = ?');
        $query->execute(array($content, $id));
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
}

function deleteArtwork($id) {
    $bdd = dbConnect();
    try
    {    
        $query = $bdd->prepare('DELETE FROM artworks WHERE id = ? ');
        $query->execute(array($id));
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
}