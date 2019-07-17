<aside class="matriculAsilef">
    <div class="img">
    </div>
    <h1>MENU de NAVEGACION</h1>
    <ul>
        <li><a href="matricula.html"><i class="fa fa-user-tie"></i>Estudiante</a></li>
        <li><a href="cursosDocentes.html"><i class="fa fa-book-reader"></i>Cursos y Docentes</a></li>
        <li><a href=""><i class="fa fa-home"></i>Horario</a></li>
        <li><a href=""><i class="fa fa-home"></i>Acerca de Nosotros</a></li>
    </ul>
</aside>
<section class="Matri-cuerpo">
    <div class="content1">
        <h2>Datos del Docente</h2>
        <form id="m-d" method="POST">
            <div class="nombre">
                <label>Nombre: <input type="text" name="nombre"></label>
            </div>
            <div class="apellidoP">
                <label>Apellido Paterno: <input type="text" name="appellido_p"></label>
            </div>
            <div class="apellidoM">
                <label>Apellido Materno: <input type="text" name="appellido_m"></label>
            </div>
            <div class="dniNacimi">
                <label>DNI: <input type="number" name="dni"></label>
                <label>Fecha de Nacimiento: <input type="date" name="fecha_n"></label>
            </div>
            <div class="gradoEstu">
                <label>Grado de Estudio: <input type="number" name="grado_es"></label>
            </div>
            <div class="direccLugaNa">
                <label>Direccion: <input type="text" name="direccion"></label>
                <label>Lugar de Nacimiento: <input type="text" name="lugar_n"></label>
            </div>
            <div class="gradoEstu">
                <label>Especialidad: <input type="text" name="especialidad"></label>
            </div>
            <input type="hidden" name="accion" value="m-docente">
            <div class="btn">
                <button id="send">Enviar Datos</button>
            </div>
        </form>
        <h3 id="sms-result"></h3>
    </div>
    <div class="content3">
        <div class="card-item">
            <div class="img">
                <img src="<?= d_asset('img/noticia2.jpg') ?>" alt="">
            </div>
            <div class="fo-item">
                <h2>En este colegio irlandés, niñas y niños pueden elegir uniforme con falda o pantalón</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque nulla distinctio fuga beatae sit, nostrum repudiandae enim sunt voluptatum eius!</p>
            </div>
        </div>
        <div class="card-item">
            <div class="img">
                <img src="<?= d_asset('img/noticia3.jpg') ?>" alt="">				</div>
            <div class="fo-item">
                <h2>Cómo cambiar el sistema educativo para transformar el mundo</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque nulla distinctio fuga beatae sit, nostrum repudiandae enim sunt voluptatum eius!</p>
            </div>
        </div>
        
    </div>
</section>
<script type="text/javascript">

window.addEventListener('load', function(){


    $("#send").click(function(e){
        var datos = $("#m-d").serialize()
        $.ajax({
            type: "POST",
            url: url+"/request.php",
            data: datos,
            success: function(r, e){
                if(e == "success"){
                    var a = JSON.parse(r);
                    $("#sms-result").html(a.sms)
                    alert(a.sms)
                } else {
                    alert("Ocurrio un error !")
                }
            }
        })
        return false
    })


})

</script>