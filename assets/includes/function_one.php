<?php
require_once('d_config.php');
$d = array();

$sqlConnect = $d['sqlConnect'] = mysqli_connect($serverName, $userName, $userPassword, $nameBd, 3306);

$Errores = array();
if (mysqli_connect_errno()) {
    $Errores[] = "David-> Falló al conectarse a la base de datos:  " . mysqli_connect_error();
}
if (!function_exists('curl_init')) {
    $Errores[] = "David-> No tiene instalado PHP en el servidor";
}
if (!version_compare(PHP_VERSION, '5.5.0', '>=')) {
    $Errores[] = "David-> PHP_VERSION requerido >= 5.5.0 , su version de PHP actualmente es : " . PHP_VERSION . "\n";
}
$query = mysqli_query($sqlConnect, "SET NAMES utf8");

if (isset($Errores) && !empty($Errores)){
    foreach ($Errores as $error){
        echo "<h3> $error </h3>";
    }
    die();
    exit();
}
$config = d_getConfig();
$d['site_url'] = $site_url;
$d['config'] = $config;