<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
        <div class="row">
            <div class="col-md-4">
                <div class="colonne">
                    <div class="avatarnom">
                        <div class="avatar"></div>
                        <div class="parentsname">
                            NOM Prénom
                        </div>
                        <a href="#"><img src="./Images/picto_edit.svg" style="float: right;width: 4vh;"></a>
                    </div>

                    <span class="elementlist">Métier : </span><br>
                    <span class="elementlist">Situation : </span><br>
                    <span class="elementlist">Téléphone : </span><br>
                    <span class="elementlist">Email : </span><br>
                    <span class="elementlist">Adresse : </span><br>
                </div>
            </div>
            <div class="col-md-4">
                <div class="colonne">
                    <div class="categorie">Communautés</div><br>
<?php
while ($data = $posts->fetch())
{
?>
    <div class="news">
            <a href="post.php?id=<?= $data['id'] ?>"><?= htmlspecialchars($data['title']) ?></a>
    </div>
<?php
}
$posts->closeCursor();
?>
               </div>
            </div>
            <div class="col-md-4">
                <div class="colonne">
                    <div class="categorie">Enfants</div><br>
                    <div class="enfant">
                        <table style="width: 100%;">
                            <tr>
                                <td>
                                    <div class="avatarenfant"></div>
                                </td>
                                <td>
                                    <span class="kidsname">Jeanne</span><br>
                                    <span class="kidsetablissement">Collège Honoré d'Urfé</span>
                                </td>
                                <td>
                                    <span class="kidsage">12 ans</span><br><span class="kidslevel">6ème</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="enfant">
                           <table style="width: 100%;">
                            <tr>
                                <td>
                                    <div class="avatarenfant"></div>
                                </td>
                                <td>
                                    <span class="kidsname">Marc</span><br>
                                    <span class="kidsetablissement">Ecole primaire de la cotonne</span>
                                </td>
                                <td>
                                    <span class="kidsage">9 ans</span><br><span class="kidslevel">CM1</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>