<?php
$this->breadcrumbs=array(
	'Generos'=>array('index'),
	$model->generoId,
);

$this->menu=array(
	array('label'=>'List Genero', 'url'=>array('index')),
	array('label'=>'Create Genero', 'url'=>array('create')),
	array('label'=>'Update Genero', 'url'=>array('update', 'id'=>$model->generoId)),
	array('label'=>'Delete Genero', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->generoId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Genero', 'url'=>array('admin')),
);
?>

<h1>View Genero #<?php echo $model->generoId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'generoId',
		'nombre',
		'descripcion',
	),
)); ?>
