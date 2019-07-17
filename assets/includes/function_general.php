<?php

function d_ver($page_url = '') {
    global $pv;
    $page         = './d_structura/' . $page_url . '.php';
    $page_content = '';
    ob_start();
    require($page);
    $page_content = ob_get_contents();
    ob_end_clean();
    return $page_content;
}


function d_url($a){
    global $d;
    return $d['site_url'].'/'.$a;
}
function d_ultimoDato($ptime, $sms = '') {
    global $pv;
    $etime = time() - $ptime;
    if ($etime < 1) {
        return '0 seconds';
    }
    $a        = array(
        365 * 24 * 60 * 60 => 'año',
        30 * 24 * 60 * 60 => 'mes',
        24 * 60 * 60 => 'dia',
        60 * 60 => 'hora',
        60 => 'minuto',
        1 => 'segundo'
    );
    $a_plural = array(
        'año' => 'años',
        'mes' => 'meses',
        'dia' => 'dias',
        'hora' => 'horas',
        'minuto' => 'minutos',
        'segundo' => 'segundos'
    );
    foreach ($a as $secs => $str) {
        $d = $etime / $secs;
        if ($d >= 1) {
            $r = round($d);
            if ($sms == '') {
                $time_ago = "Activo hace" . ' ' . $r . ' ' . ($r > 1 ? $a_plural[$str] : $str);
            } else {
                $time_ago = $sms . ' ' . $r . ' ' . ($r > 1 ? $a_plural[$str] : $str);
            }
            return $time_ago;
        }
    }
}


function d_post($a){
    return !(empty($_POST[$a])) ? $_POST[$a]: false;
}
function d_get($a) {
    return !(empty($_GET[$a])) ? $_GET[$a] : false;
}

function d_login($username, $password){
    global $sqlConnect;
    $sql = "SELECT d_estudiante.username, d_docente.username, d_estudiante.e_password, d_docente.e_password FROM d_estudiante, d_docente  WHERE d_estudiante.username = '$username' or d_docente.username = '$username' and d_estudiante.e_password = '$password' or d_docente.e_password = '$password' ";
    $query = mysqli_query($sqlConnect, $sql);
    if(mysqli_num_rows($query) > 0){
        return "Bien";
    } else {
        return "Mal";
    }
    // return $query;
}



// ===============================================================
// ===============================================================
// ===============================================================
// ===============================================================
// ===============================================================
// ===============================================================
// ===============================================================
// ===============================================================
// ===============================================================

function d_getConfig(){
    global $sqlConnect;
    $data = array();
    $sql = "SELECT * FROM " . D_CONFIG;
    $query = mysqli_query($sqlConnect, $sql);
    while($get_data = mysqli_fetch_assoc($query)){
        $data[$get_data['config_name']] = $get_data['config_value'];
    }
    return $data;
}
function d_asset($url){
    global $d;
    return $d['site_url'] . '/public/' . $url;
}