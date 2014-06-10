<div class="cuerpo">
    <div class="container">

		<div class="contenido">			

		<p>Bienvenido <?php echo $usuario->nombre?>:</p>
			<form action="<?php echo url_for('articulos/borrar'); ?>">
			<table>
				<tr> 
					<td> <?php echo $usuario->id_usuario?></td>
					<td> <?php echo $usuario->email?></td>
					<td> <?php echo $usuario->fecha_alta?></td>
					 <td colspan="2"> <input type="submit" value="borrar"></td>
				</tr>
			</table>
		</form>
		<a href="<?php echo url_for("articulos/crear?id_usuario=".$usuario->id_usuario); ?>">Crear un nuevo articulo</a>
</div>
</div>
</div>