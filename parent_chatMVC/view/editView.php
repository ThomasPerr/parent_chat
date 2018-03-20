<?php $title = 'Mon bloc - Billet'; ?>

            <form action="index.php?action=editIfComment&amp;idEdit=<?= $_GET['idEdit'] ?>&idBillet=<?= $_GET['idBillet'] ?>" method="post">
                <div>
                    <label for="author">Auteur</label><br />
                    <input type="text" id="author" name="author" />
                </div>
                <div>
                    <label for="comment">Commentaire</label><br />
                    <textarea id="comment" name="comment"></textarea>
                </div>
                <div>
                    <input type="submit" />
                </div>
            </form>

<?php require('template.php'); ?>