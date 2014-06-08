
<div class="cuerpo">
    <div class="container">

    <div class="contenido">
<form action="<?php echo url_for('contacto/index')?>">

    
<table>
<?php foreach ($contacto as $elemento): ?>
 <tr>
    
  <td>
    <?php echo $elemento->renderLabel() ?>
  </td>
  <td>
      <?php echo $elemento ?>
  </td>

</tr>
<?php endforeach; ?>
</table>
<input type="submit" value="Enviar">

</form>
    </div>
  </div>
</div>



      