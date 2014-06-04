<table>
<?php foreach ($usuarios as $usuario): ?>
<tr> 
	<td> <?php echo $usuario->id_usuario?></td>

	<td> <?php echo $usuario->nombre?></td>

	<td> <?php echo $usuario->email?></td>
	
	<td> <?php echo $usuario->fecha_alta?></td>

</tr>
<?php endforeach;?>
</table>
