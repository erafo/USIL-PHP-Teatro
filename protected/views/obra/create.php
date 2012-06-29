<?php
$this->breadcrumbs=array(
	'Obras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Obra', 'url'=>array('index')),
	array('label'=>'Manage Obra', 'url'=>array('admin')),
);
?>

<h1>Create Obra</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>