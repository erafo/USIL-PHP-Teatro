<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Bienvenidos a su Portal de Teatro preferido</h1>

<div id="gmenu">
	<?php
	foreach ($Generos as $Genero):?> 
		<h6><?php echo CHtml::link($Genero->nombre, array('votaciones/browse/', 'gid' => $Genero->generoId));?></h6>
	<?php endforeach?>
	
</div>
<!--
<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <tt><?php echo __FILE__; ?></tt></li>
	<li>Layout file: <tt><?php echo $this->getLayoutFile('main'); ?></tt></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
-->