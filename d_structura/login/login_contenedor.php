<section>
    <div class="estudiante_inisio_sesion">
        <div class="atras">
            <a href="<?= d_url('sesiones') ?>"><i class="fa fa-angle-left"></i></a>
        </div>
        <div class="login">
            <h1>Iniciar Sesion</h1>
            <form id="login">
                <label for="username">Usuario
                    <input type="text" id="username" placeholder="Ingrese su Usuario" name="username">
                </label>
                <label for="password">Contraseña
                    <input type="text" id="password" placeholder="Ingrese su Contraseña" name="contrasena">
                </label>
                <input type="hidden" name="accion" value="login">
                <button id="send">Iniciar sesion</button>
                <h3 id="sms-result"></h3>
            </form>
        </div>            
    </div>
</section>
<script type="text/javascript">

window.addEventListener('load', function(){


    $("#send").click(function(e){
        var datos = $("#login").serialize()
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