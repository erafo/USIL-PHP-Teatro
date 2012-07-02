<?php

$this->breadcrumbs=array(
	'Votaciones',
);?>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=398003753579713";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php 
if (Yii::app()->user->id==null)
echo "Usted esta visitando esta pagina como visitante, si desea Votar por su obra favorita debe " . '<a href="http://localhost/final/USIL-PHP-Teatro/index.php/site/login">Logearse</a>' ;
foreach($listaobras as $obra){ 
?>
<hr>
<table>
<tr>
<td></td>
<td><h1><?php echo $obra->nombre ?><h1></td>
</tr>
<tr>
<td></td>
<td><img src="<?php echo $obra->afiche ?>"></td>
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



<?php 
$sumaparcial=0;
$sumatotal=0; 
if (Yii::app()->user->id!=null)
{
	foreach($listavotos as $votos){
		if ($votos->obraId == $obra->obraId){
		$sumatotal=$votos->puntuacion+$sumatotal; 
			if ($votos->userId == Yii::app()->user->id){
			$sumaparcial=$votos->puntuacion+$sumaparcial; 
				}
				
			}
	}
	
	if ($sumaparcial!=0){
		$sumatotal=$votos->puntuacion+$sumatotal; 
		echo "!!!!Gracias por Votar !!!!";
		}else{
		echo CHtml::link(CHtml::image("http://img341.imageshack.us/img341/8245/likev.png", "imagen de like"), array('like', 'gid' => $_GET["gid"], 'obra' =>$obra->obraId));
		echo CHtml::link(CHtml::image("http://img822.imageshack.us/img822/5628/dislikev.png", "imagen de like"), array('notlike', 'gid' => $_GET["gid"], 'obra' =>$obra->obraId));
		
		}
}



?>

<?php } ?>
<br>
<div class="fb-comments" data-href="http://example.com" data-num-posts="1" data-width="470"></div>
<br>

