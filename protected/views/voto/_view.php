<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('votoId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->votoId), array('view', 'id'=>$data->votoId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('puntuacion')); ?>:</b>
	<?php echo CHtml::encode($data->puntuacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::encode($data->userId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obraId')); ?>:</b>
	<?php echo CHtml::encode($data->obraId); ?>
	<br />


</div>