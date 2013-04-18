<?php
/* @var $this TaarifController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Taarifs',
);

$this->menu=array(
	array('label'=>'Create Taarif', 'url'=>array('create')),
	array('label'=>'Manage Taarif', 'url'=>array('admin')),
);
?>

<h1>Taarifs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
