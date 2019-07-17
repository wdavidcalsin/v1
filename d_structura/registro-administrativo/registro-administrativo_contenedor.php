<section>
    <div class="estudiante_inisio_sesion administrativo_registrase">
        <div class="atras">
            <a href="<?= d_url('sesiones') ?>"><i class="fa fa-angle-left"></i></a>
        </div>
        <div class="login">
            <h1>Registrarse Administrativo</h1>
            <form action="">
                <div>
                    <label for="">Correo Electronico
                        <input type="email" placeholder="ejemplo@gmail.com">
                    </label>
                    <label for="">Usuario
                        <input type="text" placeholder="Ingrese su Usuario">
                    </label>
                    
                </div>
                <div>
                    <label for="">Contraseña
                        <input type="password" placeholder="Ingrese su Contraseña">
                    </label>
                    <label for="">Su labor: 
                            <select name="" id="" class="labores_adminis">
                                <option value="">Director</option>
                                <option value="">Portero</option>
                                <option value="">Jardinero</option>
                                <option value="">Secretario(a)</option>
                                <option value="">Auxiliar</option>
                            </select>
                    </label>
                    <br>
                    <br>
                    <br>
                    <label for="">Codigo de Administrativo <i class="fa fa-question-circle verificacion"> <span class="item_verifi">Su codigo de verificacion fue dado a la Hora de matricularse</span></i>
                        <input type="text" placeholder="Ingrese su Codigo de Verificacion">
                    </label>
                </div>

                <button type="button">Registrar</button>
            </form>
            
        </div>            
    </div>
</section>