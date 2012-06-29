<?php
$this->breadcrumbs=array(
	'Obras',
);

$this->menu=array(
	array('label'=>'Create Obra', 'url'=>array('create')),
	array('label'=>'Manage Obra', 'url'=>array('admin')),
);
?>

<h1>Obras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
