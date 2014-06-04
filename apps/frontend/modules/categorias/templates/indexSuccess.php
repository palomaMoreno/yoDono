<table>
<?php foreach ($categorias as $categoria): ?>
<tr> 
	<td> <?php echo $categoria->id_categoria?></td>

	<td> <?php echo $categoria->nombre?></td>

</tr>
<?php endforeach;?>
</table>
