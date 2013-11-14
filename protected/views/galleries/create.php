<?php
/* @var $this GalleriesController */
/* @var $model Gallery */

$this->breadcrumbs=array(
	'Galleries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Gallery', 'url'=>array('index')),
	array('label'=>'Manage Gallery', 'url'=>array('admin')),
);
?>

<h1>Create Gallery</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>