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
        <a href="post.php?id=<?= $data['id'] ?>">
            <?= htmlspecialchars($data['title']) ?>
            <?= htmlspecialchars($data['description']) ?> </a>
            
        </h3>
    </div>
<?php
}
$community->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>