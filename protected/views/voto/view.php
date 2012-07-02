<?php
$this->breadcrumbs=array(
	'Votos'=>array('index'),
	$model->votoId,
);

$this->menu=array(
	array('label'=>'List Voto', 'url'=>array('index')),
	array('label'=>'Create Voto', 'url'=>array('create')),
	array('label'=>'Update Voto', 'url'=>array('update', 'id'=>$model->votoId)),
	array('label'=>'Delete Voto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->votoId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Voto', 'url'=>array('admin')),
);
?>

<h1>View Voto #<?php echo $model->votoId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'votoId',
		'puntuacion',
		'userId',
		'obraId',
	),
)); ?>
