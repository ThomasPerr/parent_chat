<?php $title = 'Mon bloc - Billet'; ?>

<?php ob_start(); ?>

            <form action="edit.php?idComment=<?= $_GET['idComment'] ?>" method="post">
                <div>
                    <label for="author">Auteur</label><br />
                    <input type="text" id="author" name="author" value="<?= $comment["author"] ?>" />
                </div>
                <div>
                    <label for="comment">Commentaire</label><br />
                    <textarea id="comment" name="comment"><?= $comment["comment"] ?></textarea>
                </div>
                <div>
                    <input type="submit" />
                </div>
            </form>
            
<?php $content = ob_get_clean(); ?>            

<?php require('template.php'); ?>