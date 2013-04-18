<?php
/* @var $this TaarifController */
/* @var $model Taarif */

$this->breadcrumbs=array(
	'Taarifs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Taarif', 'url'=>array('index')),
	array('label'=>'Create Taarif', 'url'=>array('create')),
	array('label'=>'Update Taarif', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Taarif', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Taarif', 'url'=>array('admin')),
);
?>

<h1>View Taarif #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'taarif',
	),
)); ?>
