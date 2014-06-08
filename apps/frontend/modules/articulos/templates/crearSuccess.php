
  	
<div class="cuerpo">
    <div class="container">

    <div class="contenido">

      <div class="">
          <h1>Este es tu nuevo articulo</h1>
       <p> Introduce los datos para crear un nuevo articulo </p>
        </div>
      <form class="formulario" action="<?php echo url_for('articulos/crear'); ?>" method="post">
          <table border="2">
            <?php echo $formulario ?>
           <tr>
              <td colspan="2">
            <input type="submit" value="guardar">
              </td>
            </tr>
        </table>
      </form>
    </div>
  </div>
</div>
