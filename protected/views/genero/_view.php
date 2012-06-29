<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('generoId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->generoId), array('view', 'id'=>$data->generoId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>