<?php
$this->breadcrumbs=array(
	'Generos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Genero', 'url'=>array('index')),
	array('label'=>'Manage Genero', 'url'=>array('admin')),
);
?>

<h1>Create Genero</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>