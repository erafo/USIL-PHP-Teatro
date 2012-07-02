<?php
$this->breadcrumbs=array(
	'Votos'=>array('index'),
	$model->votoId=>array('view','id'=>$model->votoId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Voto', 'url'=>array('index')),
	array('label'=>'Create Voto', 'url'=>array('create')),
	array('label'=>'View Voto', 'url'=>array('view', 'id'=>$model->votoId)),
	array('label'=>'Manage Voto', 'url'=>array('admin')),
);
?>

<h1>Update Voto <?php echo $model->votoId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>