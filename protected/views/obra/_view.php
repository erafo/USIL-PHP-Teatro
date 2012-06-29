<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('obraId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->obraId), array('view', 'id'=>$data->obraId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('autor')); ?>:</b>
	<?php echo CHtml::encode($data->autor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('director')); ?>:</b>
	<?php echo CHtml::encode($data->director); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actores')); ?>:</b>
	<?php echo CHtml::encode($data->actores); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salas')); ?>:</b>
	<?php echo CHtml::encode($data->salas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horarios')); ?>:</b>
	<?php echo CHtml::encode($data->horarios); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('precios')); ?>:</b>
	<?php echo CHtml::encode($data->precios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('temporada')); ?>:</b>
	<?php echo CHtml::encode($data->temporada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('afiche')); ?>:</b>
	<?php echo CHtml::encode($data->afiche); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resena')); ?>:</b>
	<?php echo CHtml::encode($data->resena); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('generoId')); ?>:</b>
	<?php echo CHtml::encode($data->generoId); ?>
	<br />

	*/ ?>

</div>