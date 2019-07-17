<?php global $d; ?>

<header>
    <div class="cabecera">
        <a href="<?= $d['site_url'] ?>" style="text-decoration:none; color: #fff;">
            <img src="<?= d_asset('img/logo_cole.png') ?>" alt="">
            <h1>Colegio</h1>
        </a>
    </div>
    <nav class="navegacion">
        <ul>
            <?php if($d['pagina'] != 'inicio'): ?>
                <li><a href="<?= d_url('') ?>">INICIO</a></li>
            <?php endif ?>

            <?php if($d['pagina'] != 'sesiones'): ?>
                <li><a href="<?= d_url('sesiones') ?>">INICIAR SESION <i class="fa fa-address-card"></i></a></li>
            <?php endif ?>
            <?php if($d['pagina'] != 'matricula-estudiante'): ?>
                <li><a href="<?= d_url('matricula-estudiante') ?>">ESTUDIANTE <i class="fa fa-address-card"></i></a></li>
            <?php endif ?>
            <?php if($d['pagina'] != 'matricula-docente'): ?>
                <li><a href="<?= d_url('matricula-docente') ?>">DOCENTE <i class="fa fa-address-card"></i></a></li>
            <?php endif ?>
            
            <li class="menu"><a href="<?= d_url('about') ?>">ABOUT <i class="fa fa-child"></i></a>
            <ul class="submenu">
                <?php if($d['pagina'] != 'about'): ?>
                    <li><a href="<?= d_url('about') ?>">ABOUT<i></i></a></li>
                <?php endif ?>
                <?php if($d['pagina'] != 'mision-vision'): ?>
                    <li><a href="<?= d_url('mision-vision') ?>">Mision/Vision<i></i></a></li>
                <?php endif ?>
                </ul>
            </li>
            <?php if($d['pagina'] != 'noticias'): ?>
                <li><a href="<?= d_url('noticias') ?>">NOTICIAS <i class="fa fa-newspaper"></i></a></li>
            <?php endif ?>
        </ul>
        <div class="btn-sli">
            <i class="fa fa-bars"></i>
        </div>
    </nav>
</header>