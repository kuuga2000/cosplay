<?php
/* @var $this ImagesController */
/* @var $model Image */

$this->breadcrumbs=array(
	'Images'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Image', 'url'=>array('index')),
	array('label'=>'Manage Image', 'url'=>array('admin')),
);
?>

<h1>Create Image</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>