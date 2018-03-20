<?php
require('model/frontend.php');

if (isset($_GET['idEdit']) && $_GET['idEdit'] > 0) {
    $comments = editComment($_GET['idEdit']);
    require('view/postView.php');
}
else {
    echo 'Erreur : aucun identifiant de billet envoyé';
}

