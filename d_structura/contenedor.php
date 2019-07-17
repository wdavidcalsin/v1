<?php global $d; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $d['titulo'] ?></title>
    <meta name="description" content="<?= $d['descripcion'] ?>"/>
    <link rel="stylesheet" href="<?= d_asset('css/estilos.css') ?>">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
    <script type="text/javascript">
        var url = "<?= $d['site_url'] ?>";
    </script>
</head>
<body class="d_animacion fadeIn">
    <?= d_ver('header/header_contenedor') ?>
    <?= $d['contenido'] ?>
    <?= d_ver('footer/footer_contenedor') ?>

    <script type="text/javascript" src="<?= d_asset('js/jquery.js') ?>"></script>
</body>
</html>