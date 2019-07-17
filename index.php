<?php
require_once('assets/david_init.php');
$get_url = "null";
if(isset($_GET['url']) && !empty($_GET['url'])){
    $get_url = $_GET['url'];
} else {
    $get_url = "inicio";
}

$get_url = explode('/', $get_url);
$get_url1 = $get_url[0];
$get_url2 = isset($get_url[1]) ? $get_url[1] : null;
$get_url3 = isset($get_url[2]) ? $get_url[2] : null;



$page = $get_url1;
// echo $page;

switch ($page) {
    case 'inicio':
        include('d_requerimientos/d_inicio.php');
        break;
    case 'sesiones':
        include('d_requerimientos/d_sesiones.php');
        break;
    case 'login':
        include('d_requerimientos/d_login.php');
        break;
    case 'registro-estudiante':
        include('d_requerimientos/d_registro-estudiante.php');
        break;
    case 'registro-docente':
        include('d_requerimientos/d_registro-docente.php');
        break;
    case 'registro-administrativo':
        include('d_requerimientos/d_registro_administrativo.php');
        break;
    case 'registro-apoderado':
        include('d_requerimientos/d_registro_apoderado.php');
        break;
    case 'matricula-docente':
        include('d_requerimientos/d_matricula_docente.php');
        break;
    case 'matricula-estudiante':
        include('d_requerimientos/d_matricula_estudiante.php');
        break;
    case 'matricula-padres':
        incldue('d_requerimientos/d_matricula_padres');
    case 'about':
        include('d_requerimientos/d_about.php');
        break;
    case 'mision-vision':
        include('d_requerimientos/d_mision_vision.php');
        break;
    case 'noticias':
        include('d_requerimientos/d_noticias.php');
        break;
    default:
        include('d_requerimientos/d_404.php');
        break;
}
if (empty($d['contenido'])) {
    include('d_requerimientos/d_404.php');
}
echo d_ver('contenedor');

mysqli_close($sqlConnect);
unset($d);
unset($config);