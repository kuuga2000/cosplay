<?php
/* @var $this MmageController */
/* @var $model Mmage */

$this->breadcrumbs=array(
	'Mmages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mmage', 'url'=>array('index')),
	array('label'=>'Manage Mmage', 'url'=>array('admin')),
);
?>

<h1>Create Mmage</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>