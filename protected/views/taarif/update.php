<?php
/* @var $this TaarifController */
/* @var $model Taarif */

$this->breadcrumbs=array(
	'Taarifs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Taarif', 'url'=>array('index')),
	array('label'=>'Create Taarif', 'url'=>array('create')),
	array('label'=>'View Taarif', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Taarif', 'url'=>array('admin')),
);
?>

<h1>Update Taarif <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>