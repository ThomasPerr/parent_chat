<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="./public/css/style_profile.css">
		<link href="./public/css/style_header.css" rel="stylesheet" /> 
		<link href="./public/css/style_footer.css" rel="stylesheet" /> 
    </head>
        
    <body>
    	<?= include "header.php"; ?>
        <?= $content ?>
        <?= include "footer.php"; ?>
    </body>
</html>