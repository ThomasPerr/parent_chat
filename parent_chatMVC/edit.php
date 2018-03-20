<?php
require('model/frontend.php');

if (isset($_GET['idComment']) && $_GET['idComment'] > 0) {
    
    if (isset($_POST) && !empty($_POST['comment'])) {
        
        $idComment = $_GET['idComment'];
        
        $author = $_POST['author'];
        
        $comment = $_POST['comment'];
        
        editComment($idComment, $author, $comment);
        
        // todo redirect to list of comments
    }    
    else {
        $comment = getComment($_GET['idComment']);
        require('view/editView.php');
    }
}
else {
    echo 'Erreur : aucun identifiant de billet envoyé';
}

