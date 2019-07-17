<section>
    <div class="estudiante_inisio_sesion estudiante_registrar">
        <div class="atras">
            <a href="<?= d_url('sesiones') ?>"><i class="fa fa-angle-left"></i></a>
        </div>
        <div class="login">
            <h1>Registro para Estudiantes</h1>
            <form id="r-e" method="POST">
                <div>
                    <label for="email">Correo Electronico
                        <input type="email" id="email" placeholder="ejemplo@gmail.com" name="email">
                    </label>
                    <label for="username">Usuario
                        <input type="text" id="username" placeholder="Ingrese su Usuario" name="username">
                    </label>
                </div>
                <div>
                    <label for="password">Contraseña
                        <input type="password" id="password" placeholder="Ingrese su Contraseña" name="contrasena">
                    </label>
                    <label for="token">Codigo de Verificacion <i class="fa fa-question-circle verificacion"> <span class="item_verifi">Su codigo de verificacion fue dado a la Hora de matricularse</span></i>
                        <input type="text" id="token" placeholder="Ingrese su Codigo de Verificacion" name="token_input">
                    </label>
                </div>
                <input type="hidden" name="accion" value="r-estudiante">
                <button id="send">Registrar</button>
                <h3 id="sms-result"></h3>
            </form>
            
        </div>            
    </div>
</section>
<script type="text/javascript">

window.addEventListener('load', function(){


    $("#send").click(function(e){
        var datos = $("#r-e").serialize()
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