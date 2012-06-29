<?php
$this->breadcrumbs=array(
	'Votaciones',
);?>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=398003753579713";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<?php echo $this->message;?>


<?php if($_GET("id")){
	foreach ($Generos as $Genero) {
		echo '<h1>' . $Genero->Nombre . "</h1><br/>";
		$desc = $Genero->Description;
		
	}
?>
	<div id="gmenu">
		<?php echo $desc; ?>
	</div>
	<table>
		<tr>
			<?php 
				$contarFilas=0;
				foreach ($Obras as $Obra){
					//$aid = $Obra->
					$contarFilas++;
					if ($contarFilas % 2) echo "</tr> <tr>";
				
				echo "<td><center>strong>" . $aname . "</strong>";
				echo CHtml::link('<img src=" ' . Yii::app()->request->baseUrl . $Obra->ObraArtUrl . '" /><br/>', array('votaciones/details/','obra'=>$Obra->ObraId));
				echo $Obra->Nombre . "<br/>" . $Obra->autor . "</center></td>";
				}
			?>
			
		</tr>
	</table>
<?php } 
elseif ($_GET["obra"]) {
	foreach ($Obras as $Obra) {
		echo '<img serc=" ' . Yii::app()->request->baseUrl . $Obra->ObraArtUrl . '" /><br/>';
		echo $Obra->Nombre . "<br/>";
		echo $Obra->Autor . "<br/>";
		echo CHtml::link('Add to cart', array('votaciones/cart', 'obra'=> $Obra->obraId()) . "<br/>");
		
	}
}

?>
	

<?php if(Yii::app()->user->id==null) 
	echo '<p>Hola no estas logueado, no podras votar por tu obra favorita</p>';
else
	echo '<p>Vota por tu obra favorita</p>';
?>	
</p>	
<section>
	<article>
		<header><h3>Titulo obra</h3>
				
		</header>
		<p>		Nombre: 	</br>
				Autor: thomas spelg	</br>
				Director: Steven Spilberg	</br>
				Actores: erik	</br>
				Salas: 3, 4 , 5	</br>
				Horarios: 3:00 a 500 pm</br>
				precio</br>
				temporada</br>
				afiche</br>
				resena	</br>
		</p>
		<img src="../USIL-PHP-Teatro/images/obras/1.jpg" alt="Texto Alternativo"  class="alignright">
	
		<footer>
			<form name="input" action="html_form_action.asp" method="get">
				<?php 
					if(Yii::app()->user->id!=null){ 	
					echo '<input type="submit" value="Gusta" />';
					echo '<input type="submit" value="NoGusta" />';
					}
				?>
			</form>
		</footer>
	</article>
	<div class="fb-comments" data-href="http://example.com" data-num-posts="1" data-width="470"></div>
</section>



