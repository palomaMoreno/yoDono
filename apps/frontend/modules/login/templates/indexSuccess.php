<div class="cuerpo">
    <div class="container">
    
               
                <div>
            
                    <p>En tu área de Usuario podrás consultar y crear nuevos articulos</p>
                    
                    <?php if ($error == true): ?>
                        Usuario no existe o nombre/clave erróneas.
                    <?php endif; ?>
                  

                    <form action="<?php echo url_for('login/doLogin') ?>" id="formAccesoUsuario"  method="post">
                        <fieldset>
                            <label for="usuario">Nombre de usuario</label>
                            <div>
                                <input type="text" id="usuario" name="usuario" placeholder="Usuario" />
                            </div>
                        </fieldset>
                        <fieldset >
                            <label  for="password">Contraseña</label>
                            <div>
                                <input type="password" id="password" name="password" placeholder="Contraseña" />
                            </div>
                        </fieldset>
                        <fieldset>
                            <div>
                              
                                <button type="submit" >Iniciar sesión</button>
                            </div>
                        </fieldset>
                        
                    </form>
                </div>
    </div>
</div>

