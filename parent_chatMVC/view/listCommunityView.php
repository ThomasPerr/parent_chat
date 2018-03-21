<?php $title = 'Mes Communautés'; ?>

<?php ob_start(); ?>
<h1>Mes Communautés !</h1>
<p>Liste des Communautés :</p>


<?php
while ($data = $community->fetch())
{
?>
    <div class="news">
        <h3>
        
            <?= htmlspecialchars($data['title']) ?>
                
        </h3>
        <p>
        <a href="post.php?id=<?= $data['id'] ?>"><?= htmlspecialchars($data['description']) ?></a>   
        </p>
    </div>
<?php
}
$community->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>