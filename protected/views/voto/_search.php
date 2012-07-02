<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'votoId'); ?>
		<?php echo $form->textField($model,'votoId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'puntuacion'); ?>
		<?php echo $form->textField($model,'puntuacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'userId'); ?>
		<?php echo $form->textField($model,'userId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obraId'); ?>
		<?php echo $form->textField($model,'obraId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->