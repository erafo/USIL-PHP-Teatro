<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'obra-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textArea($model,'nombre',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'autor'); ?>
		<?php echo $form->textArea($model,'autor',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'autor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'director'); ?>
		<?php echo $form->textArea($model,'director',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'director'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actores'); ?>
		<?php echo $form->textArea($model,'actores',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'actores'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salas'); ?>
		<?php echo $form->textArea($model,'salas',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'salas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horarios'); ?>
		<?php echo $form->textArea($model,'horarios',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'horarios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precios'); ?>
		<?php echo $form->textArea($model,'precios',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'precios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'temporada'); ?>
		<?php echo $form->textArea($model,'temporada',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'temporada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'afiche'); ?>
		<?php echo $form->textArea($model,'afiche',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'afiche'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resena'); ?>
		<?php echo $form->textArea($model,'resena',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'resena'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'generoId'); ?>
		<?php echo $form->textField($model,'generoId'); ?>
		<?php echo $form->error($model,'generoId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->