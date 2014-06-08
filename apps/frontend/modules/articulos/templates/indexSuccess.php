<?php if($articulos->count() == 0): ?>
	No hay artículos
<?php else: ?>
	<table>
	<?php foreach ($articulos as $articulo): ?>
	<tr> 
		<td> <?php echo $articulo->id_articulo?></td>

		<td> <?php echo $articulo->nombre?></td>

		<td> <?php echo $articulo->descripcion?></td>
		
		<td> <?php echo $articulo->localidad?></td>


	</tr>
	<?php endforeach;?>
	</table>

<?php endif; ?>
