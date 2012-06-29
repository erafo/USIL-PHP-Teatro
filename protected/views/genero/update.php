<?php
$this->breadcrumbs=array(
	'Generos'=>array('index'),
	$model->generoId=>array('view','id'=>$model->generoId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Genero', 'url'=>array('index')),
	array('label'=>'Create Genero', 'url'=>array('create')),
	array('label'=>'View Genero', 'url'=>array('view', 'id'=>$model->generoId)),
	array('label'=>'Manage Genero', 'url'=>array('admin')),
);
?>

<h1>Update Genero <?php echo $model->generoId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>