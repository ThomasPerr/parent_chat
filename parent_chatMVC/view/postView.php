<?php $title = 'Mon bloc - Billet'; ?>

<?php ob_start(); ?>
 <h1><?php echo $data['title'];?></h1>
 


        <p><a href="./index.php">Retour à la liste de mes communautés</a></p>
<p>sujet du chat  :</p>
        <div class="news">
            <h3>
                <?= htmlspecialchars($post['title']) ?>
                <em>le <?= $post['creation_date_fr'] ?></em>
            </h3>
            
            <p>
                <?= nl2br(htmlspecialchars($post['content'])) ?>
            </p>
        </div>

        <h2>Commentaires</h2>

        <?php
        while ($comment = $comments->fetch())
        {
        ?>
            <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
            <span><a href="view/editView.php?idEdit=<?= $comment['id'] ?>&idBillet=<?= $_GET['id']?>">Modifier</a></span>

        <?php
        }
        ?>
            <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
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
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>