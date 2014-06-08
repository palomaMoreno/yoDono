
<div class="cuerpo">
    <div class="container">

		<div class="contenido">
				<h1>Las  Categorias son:</h1>
			<table>
			<?php foreach ($categorias as $categoria): ?>
			<tr> 
				<td> <?php echo $categoria->id_categoria?></td>

				<td> <?php echo $categoria->nombre?></td>

			</tr>
			<?php endforeach;?>
			</table>

		</div>
	</div>
</div>



			