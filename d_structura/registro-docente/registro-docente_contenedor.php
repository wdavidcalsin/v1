<section>
    <div class="estudiante_inisio_sesion docente_registrase">
        <div class="atras">
            <a href="<?= d_url('sesiones') ?>"><i class="fa fa-angle-left"></i></a>
        </div>
        <div class="login">
            <h1>Registrarse Docente</h1>
            <form id="r-d" method="POST">
                <div>
                    <label for="">Correo Electronico
                        <input type="email" placeholder="ejemplo@gmail.com" name="email">
                    </label>
                    <label for="">Usuario
                        <input type="text" placeholder="Ingrese su Usuario" name="username">
                    </label>
                    
                </div>
                <div>
                    <label for="">Contraseña
                        <input type="password" placeholder="Ingrese su Contraseña" name="contrasena">
                    </label>
                    <label for="">Codigo de Docente <i class="fa fa-question-circle verificacion"> <span class="item_verifi">Su codigo de verificacion fue dado a la Hora de matricularse</span></i>
                        <input type="text" placeholder="Ingrese su Codigo de Verificacion" name="token_input">
                    </label>
                </div>
                <input type="hidden" name="accion" value="r-docente">
                <button id="send">Registrar</button>
                <h3 id="sms-result"></h3>
            </form>
            
        </div>            
    </div>
</section>

<script type="text/javascript">

window.addEventListener('load', function(){


    $("#send").click(function(e){
        var datos = $("#r-d").serialize()
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