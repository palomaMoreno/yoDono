 <header>
        <div class="container">
            <div>
           
                  
                  <div >
                    <a href=""><img  id="portada"  <img src="/images/yodono.jpg"  alt="Yo dono y todos ganamos" title="Yo dono y todos ganamos" /></a>
                     </div>

                     <ul id="redesSociales">
                
                        <li><a href="" target="_blank"><img src="/images/icono-twitter.png" alt="Síguenos en twitter" title="Síguenos en twitter" class="imagenRedes"  /></a></li>
                        <li><a href="https://es-es.facebook.com/" target="_blank"><img src="/images/icono-facebook.png" alt="Síguenos en Facebook" title="Síguenos en Facebook" class="imagenRedes"/></a></li>
                    </ul> 
                
                <div  id="headerDerecha">
                     
                    <ul id="menuHeader">
                         <li><a href="<?php echo url_for('@homepage');?>"> Inicio </a></li>
                         <li><a href="<?php echo url_for('login/index') ?>">Área de <span class="enMorado">clientes</span></a></li>
        
                        <li><a href="<?php echo url_for('contacto/index');?>">Contacto</a></li>
                        <li><a href="<?php echo url_for('usuarios/crear');?>"> Crear un nuevo Usuario</a></li>
                     </ul>
                </div>
               
                </div>
                

            <div class="Buscar">
                    <h2>Elige ĺa categoria</h2>
              <form action="<?php echo url_for('@listado_articulos');?>" method="get">
                <select name="categoria_id">
                  <option value="0">Todos</option>
                  <?php foreach ($categorias as $categoria): ?>
                    <option value="<?php echo $categoria->id_categoria; ?>"><?php echo $categoria->nombre; ?></option>
                  <?php endforeach; ?>
                </select>
                <input type="submit" value="Buscar" />
                  <div class="nota">
                      <p>  Encontraras productos como (chaquetas, tostadoras, cunas, ...)</p>
                  </div>
            </div>
                </form>
              
                </div>
            </div>
        </div>
    </header>