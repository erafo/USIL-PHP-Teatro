<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'voto-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'puntuacion'); ?>
		<?php echo $form->textField($model,'puntuacion'); ?>
		<?php echo $form->error($model,'puntuacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userId'); ?>
		<?php echo $form->textField($model,'userId'); ?>
		<?php echo $form->error($model,'userId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'obraId'); ?>
		<?php echo $form->textField($model,'obraId'); ?>
		<?php echo $form->error($model,'obraId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->