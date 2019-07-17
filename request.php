<?php
require_once("d_config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once('assets/david_init.php');

    $f = d_post("accion");

    if($f == "m-estudiante"){
        $data = array();
        $data['status'] = 400;

        $nombre = d_post('nombre');
        $apellido_p = d_post('appellido_p');
        $apellido_m = d_post('appellido_m');
        $dni = d_post('dni');
        $fecha_n = d_post('fecha_n');
        $grado = d_post('grado');
        $direccion = d_post('direccion');
        $lugar_n = d_post('lugar_n');
        if(!$nombre || !$apellido_p || !$apellido_m || !$dni || !$fecha_n || !$grado || !$direccion || !$lugar_n){
            $data['sms'] = "Todos los campos son obligatorios !";
            echo json_encode($data);
            return false;
        }

        // return false;

        $sql = "SELECT dni FROM d_estudiante WHERE dni = '$dni' ";
        $query = mysqli_query($d['sqlConnect'], $sql);

        if(mysqli_num_rows($query) > 0){
            $data['sms'] = "El estudiante ya se encuentra registrado";
        } else {
            $token = '$david'.sha1(mt_rand(1, 90000) . 'SALT')."2019$";

            $sql1 = "INSERT INTO d_estudiante (nombre, apellido_p, apellido_m, dni, fecha_n, grado, direccion, lugar_n, token_registro) VALUES ('$nombre', '$apellido_p', '$apellido_m', '$dni', '$fecha_n', '$grado', '$direccion', '$lugar_n', '$token') ";
            $query1 = mysqli_query($d['sqlConnect'], $sql1);

            if($query1){
                $data['sms'] = "Esudiante $nombre registrado exitosamente <br> Su token es: $token";
            } else {
                $data['sms'] = "Ocurrio un error al registrar ! vuelva a intentar mas tarde";
            }
        }

        echo json_encode($data);
    }



    if($f == "m-docente"){
        $data = array();
        $data['status'] = 400;

        $nombre = d_post('nombre');
        $apellido_p = d_post('appellido_p');
        $apellido_m = d_post('appellido_m');
        $dni = d_post('dni');
        $fecha_n = d_post('fecha_n');
        $grado_es = d_post('grado_es');
        $direccion = d_post('direccion');
        $lugar_n = d_post('lugar_n');
        $especialidad = d_post('especialidad');
        
        if(!$nombre || !$apellido_p || !$apellido_m || !$dni || !$fecha_n || !$grado_es || !$direccion || !$lugar_n || !$especialidad){
            $data['sms'] = "Todos los campos son obligatorios !";
            echo json_encode($data);
            return false;
        }

        // return false;

        $sql = "SELECT dni FROM d_docente WHERE dni = '$dni' ";
        $query = mysqli_query($d['sqlConnect'], $sql);

        if(mysqli_num_rows($query) > 0){
            $data['sms'] = "El docente ya se encuentra registrado";
        } else {
            $token = '$david'.sha1(mt_rand(1, 90000) . 'SALT')."2019$";

            $sql1 = "INSERT INTO d_docente (nombre, apellido_p, apellido_m, dni, fecha_n, grado_es, direccion, lugar_n, especialidad, token_registro) VALUES ('$nombre', '$apellido_p', '$apellido_m', '$dni', '$fecha_n', '$grado_es', '$direccion', '$lugar_n', '$especialidad', '$token') ";


            $query1 = mysqli_query($d['sqlConnect'], $sql1);

            if($query1){
                $data['sms'] = "Docente $nombre registrado exitosamente <br> Su token es:<em> $token </em>";
            } else {
                $data['sms'] = "Ocurrio un error al registrar ! vuelva a intentar mas tarde";
            }
        }

        echo json_encode($data);
    }

    if($f == "r-estudiante"){
        $data = array();
        $data['status'] = 400;

        $email = d_post('email');
        $username = d_post('username');
        $password = d_post('contrasena');
        $password = password_hash($password, PASSWORD_DEFAULT);
        $token_input = d_post('token_input');
        
        if(!$email || !$username || !$password || !$token_input){
            $data['sms'] = "Todos los campos son obligatorios !";
            echo json_encode($data);
            return false;
        }


        $sql = "SELECT d_estudiante.email, d_estudiante.username, d_docente.username, d_docente.email FROM d_estudiante, d_docente WHERE d_estudiante.username = '$username' or d_docente.username = '$username' ";

        $query = mysqli_query($d['sqlConnect'], $sql);

        if(mysqli_num_rows($query) > 0){
            $data['sms'] = "El ya esta registrado !";
        } else {
            $token = "NULL";

            $sql2 = "SELECT * FROM d_estudiante WHERE token_registro = '$token_input' and registro_estado = 0";
            $query2 = mysqli_query($d['sqlConnect'], $sql2);

            if(mysqli_num_rows($query2) > 0){
                $sql1 = "UPDATE d_estudiante SET email = '$email', username = '$username', e_password = '$password', token_registro = '$token', registro_estado = 1 ";
                $query1 = mysqli_query($d['sqlConnect'], $sql1);

                if($query1){
                    $data['sms'] = "Se registro exitosamente !";
                } else {
                    $data['sms'] = "Ocurrio un error al registrar ! vuelva a intentar mas tarde";
                }
            } else {
                $data['sms'] = "El token es incorrecto";
            }

        }
        echo json_encode($data);
    }


    if($f == "r-docente"){
        $data = array();
        $data['status'] = 400;

        $email = d_post('email');
        $username = d_post('username');
        $password = d_post('contrasena');
        $password = password_hash($password, PASSWORD_DEFAULT);
        $token_input = d_post('token_input');
        
        if(!$email || !$username || !$password || !$token_input){
            $data['sms'] = "Todos los campos son obligatorios !";
            echo json_encode($data);
            return false;
        }

        
        $sql = "SELECT d_estudiante.username, d_docente.username FROM d_docente, d_estudiante WHERE d_estudiante.username = '$username' or d_docente.username = '$username' ";

        $query = mysqli_query($d['sqlConnect'], $sql);

        if(mysqli_num_rows($query) > 0){
            $data['sms'] = "El Estudiante si se registro !";
        } else {
            $token = "NULL";

            $sql2 = "SELECT * FROM d_docente WHERE token_registro = '$token_input' and registro_estado = 0";
            $query2 = mysqli_query($d['sqlConnect'], $sql2);

            if(mysqli_num_rows($query2) > 0){
                $sql1 = "UPDATE d_docente SET email = '$email', username = '$username', e_password = '$password', token_registro = '$token', registro_estado = 1 ";
                $query1 = mysqli_query($d['sqlConnect'], $sql1);

                if($query1){
                    $data['sms'] = "Se registro exitosamente !";
                } else {
                    $data['sms'] = "Ocurrio un error al registrar ! vuelva a intentar mas tarde";
                }
            } else {
                $data['sms'] = "El token es incorrecto";
            }

        }
        echo json_encode($data);
    }
    if($f == "login"){
        $data = array();
        $data['sms'] = "This me empty";

        $username = d_post('username');
        $password = d_post('contrasena');

        $status = d_login($username, $password);

        $data['sms'] = $status;

        echo json_encode($data);
    }

    
} else {
    $d404 = $site_url . "/404";
	header("Location: $d404");
}