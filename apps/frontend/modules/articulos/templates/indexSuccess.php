<div class="cuerpo">
	 <div class="container">
 			<div class="contenido">
<?php if($articulos->count() == 0): ?>
	No hay artículos
<?php else: ?>
	<div class="nota"></div>
<div class="tabla">
	<table>
	<tr>
	<th>id_articulo</th>
	<th>nombre</th>
	<th>descripcion</th>
	<th>localidad</th>
	</tr>
	<?php foreach ($articulos as $articulo): ?>
	<tr> 
		<td> <?php echo $articulo->id_articulo?></td>

		<td> <?php echo $articulo->nombre?></td>

		<td> <?php echo $articulo->descripcion?></td>
		
		<td> <?php echo $articulo->localidad?></td>

		<td><a href="<?php echo url_for('contacto/index')?>">Enviar Mensaje</a></td>
								

	</tr>
	<?php endforeach;?>
	</table>
	</div>
<?php endif; ?>
</div>
</div>
</div>