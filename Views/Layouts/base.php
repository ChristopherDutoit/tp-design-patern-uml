<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$page_description; ?>">
    <title><?=$page_title;?></title>
    <link href="<?= URL ?>public/style/main.css" rel="stylesheet"/>
    <?php if(!empty($page_css)) : ?>
        <?php foreach($page_css as $p) : ?>
            <link href="<?= URL ?>public/style/<?= $p ?>" rel="stylesheet" />
        <?php endforeach; ?>
    <?php endif; ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors:{
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>

</head>
<body>
    <?php require_once('Views/Layouts/header.php') ; ?>
    <?php require_once('Views/Layouts/menu.php');?>
    <?php require_once('Services/Toolbox.php');?>
<?php
try{
    Toolbox::displayAlerts();
} catch (Exception $e){
    throw new \RuntimeException($e->getMessage());
}
?>
    <?= $page_content; ?>
    <?php require_once('Views/Layouts/footer.php') ; ?>
</body>
<script src="<?= URL ?>/public/Javascript/navbar.js"> </script>

<?php if(!empty($page_javascript)) : ?>
    <script src="<?= URL?>public/Javascript/<?= $page_javascript ?>"></script>
    <?php endif; ?>
</html>