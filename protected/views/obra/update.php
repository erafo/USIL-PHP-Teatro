<?php
$this->breadcrumbs=array(
	'Obras'=>array('index'),
	$model->obraId=>array('view','id'=>$model->obraId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Obra', 'url'=>array('index')),
	array('label'=>'Create Obra', 'url'=>array('create')),
	array('label'=>'View Obra', 'url'=>array('view', 'id'=>$model->obraId)),
	array('label'=>'Manage Obra', 'url'=>array('admin')),
);
?>

<h1>Update Obra <?php echo $model->obraId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>