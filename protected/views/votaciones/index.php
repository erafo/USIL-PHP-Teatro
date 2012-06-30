<?php
$this->breadcrumbs=array(
	'Votaciones',
);?>
<?php foreach($listaobras as $obra){ ?>
<table>
<tr>
<td></td>
<td><h1><?php echo $obra->nombre ?><h1></td>
</tr>
<tr>
<td></td>
<td><img src="<?php echo $obra->afiche ?>"</td>
</tr>
<tr>
<td>Autor</td>
<td><?php echo $obra->autor ?></td>
</tr>
<tr>
<td>Director</td>
<td><?php echo $obra->director ?></td>
</tr>
<tr>
<td>Actores</td>
<td><?php echo $obra->actores ?></td>
</tr>
<tr>
<td>Salas</td>
<td><?php echo $obra->salas ?></td>
</tr>
<tr>
<td>Horarios</td>
<td><?php echo $obra->horarios ?></td>
</tr>
<tr>
<td>Precios</td>
<td><?php echo $obra->precios ?></td>
</tr>
<tr>
<td>Temporada</td>
<td><?php echo $obra->temporada ?></td>
</tr>

<tr>
<td>Resena</td>
<td><?php echo $obra->resena ?></td>
</tr>
</table>

	<?php if(Yii::app()->user->id!=null) { ?>
		<form name="input" action="html_form_action.asp" method="get">
					<input type="submit" value="Gusta" />
				<input type="submit" value="NoGusta" />
		</form>		
	<?php } else {?>
		<p>Si desea botar por su obra preferida debe de estar registrado<p>
	
	<?php } ?>


<?php } ?>
