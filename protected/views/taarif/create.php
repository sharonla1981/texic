<?php
/* @var $this TaarifController */
/* @var $model Taarif */

$this->breadcrumbs=array(
	'Taarifs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Taarif', 'url'=>array('index')),
	array('label'=>'Manage Taarif', 'url'=>array('admin')),
);
?>

<h1>Create Taarif</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>