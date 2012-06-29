<?php
$this->breadcrumbs=array(
	'Obras'=>array('index'),
	$model->obraId,
);

$this->menu=array(
	array('label'=>'List Obra', 'url'=>array('index')),
	array('label'=>'Create Obra', 'url'=>array('create')),
	array('label'=>'Update Obra', 'url'=>array('update', 'id'=>$model->obraId)),
	array('label'=>'Delete Obra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->obraId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Obra', 'url'=>array('admin')),
);
?>

<h1>View Obra #<?php echo $model->obraId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'obraId',
		'nombre',
		'autor',
		'director',
		'actores',
		'salas',
		'horarios',
		'precios',
		'temporada',
		'afiche',
		'resena',
		'generoId',
	),
)); ?>
