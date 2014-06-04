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

<form action="<?php echo url_for('contacto/index') ?>"method="post" >
<?php echo $contacto->renderHiddenFields() ?>
    
<table>
    
<?php if ($contacto['nombre']->hasError()):?>
        <tr>
            <td>
                <?php echo $contacto['nombre']->renderError() ?>
            </td>
        </tr>
        <?php endif; ?>
 <tr>
    
  <td>
    <?php echo $contacto['nombre']->renderLabel() ?>
  </td>
  <td>
      <?php echo  $contacto['nombre']?>
  </td>
  

</tr>
<?php if ($contacto['email']->hasError()):?>
        <tr>
            <td>
                <?php echo $contacto['email']->renderError() ?>
            </td>
        </tr>
        <?php endif; ?>

 <tr>
    
  <td>
    <?php echo $contacto['email']->renderLabel() ?>
  </td>
  <td>
      <?php echo  $contacto['email']?>
  </td>

</tr>
<?php if ($contacto['telefono']->hasError()):?>
        <tr>
            <td>
                <?php echo $contacto['telefono']->renderError() ?>
            </td>
        </tr>
        <?php endif; ?>
<tr>
    
  <td>
    <?php echo $contacto['telefono']->renderLabel() ?>
  </td>
  <td>
      <?php echo  $contacto['telefono']?>
  </td>

</tr>
<?php if ($contacto['mensaje']->hasError()):?>
        <tr>
            <td>
                <?php echo $contacto['mensaje']->renderError() ?>
            </td>
        </tr>
        <?php endif; ?>
<tr>
    
  <td >
    <?php echo $contacto['mensaje']->renderLabel() ?>
  </td>
  <td >
      <?php echo  $contacto['mensaje']?>
  </td>

</tr>

</table>
<input type="submit" value="Enviar">

</form>
