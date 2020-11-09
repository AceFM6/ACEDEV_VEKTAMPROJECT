<?php

function getAllNews() {
    $bdd = dbConnect();
    try
    {  
        $query = $bdd->query('SELECT * FROM posts ORDER BY id ASC');
        $news = $query->fetchAll();
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    return $news;
}

function getNew($id){
    $bdd = dbConnect();
    try
    {  
        $query = $bdd->prepare('SELECT * FROM posts WHERE id = ?');
        $query->execute(array($id));
        $new = $query->fetch();
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    return $new;
}

function htmlNews($posts) {
    $html = '';
    foreach($posts as $post){
        $html .= '<div class="post">
            <h3>'.htmlspecialchars($post['title']).'</h3>
            <p><img src="public/img/posts/'.htmlspecialchars($post['img']).'" alt=""></p>
        </div>';
    }  
    return $html;
}

function htmlNewsAdminTable($news) {
    $html = '';
    foreach($news as $new){
        $html .= '<tr>
            <th>'.$new['id'].'</th>
            <td>'.$new['title'].'</td>
            <td>'.substr($new['content'], 0, 50).'...</td>
            <td>'.$new['img'].'</td>
            <td>'.$new['created_at'].'</td>
            <td>
                <button class="editNew edit-button sm-button" id="edit_'.$new['id'].'" ><i class="fas fa-edit"></i></button>
                <button class="deleteNew delete-button sm-button" id="delete_'.$new['id'].'" ><i class="fas fa-trash-alt"></i></button>            
            </td>
        </tr>';
    }
    return $html;
}

function deleteNew($id) {
    $bdd = dbConnect();
    try
    {    
        $query = $bdd->prepare('DELETE FROM posts WHERE id = ? ');
        $query->execute(array($id));
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
}

function addNew($title, $content){
    $bdd = dbConnect();
    $date = date("Y-m-d H:i:s");
    try
    {    
        $query = $bdd->prepare('INSERT INTO posts (title, content, created_at) VALUES (?, ?, ?)');
        $query->execute(array($title, $content, $date));
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
}

function editNew($id, $title, $content){
    $bdd = dbConnect();
    try
    {    
        $query = $bdd->prepare('UPDATE posts SET title = ?, content = ? WHERE id = ?');
        $query->execute(array($title, $content, $id));
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
}