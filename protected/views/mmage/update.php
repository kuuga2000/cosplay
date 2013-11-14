<?php
/* @var $this MmageController */
/* @var $model Mmage */

$this->breadcrumbs=array(
	'Mmages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mmage', 'url'=>array('index')),
	array('label'=>'Create Mmage', 'url'=>array('create')),
	array('label'=>'View Mmage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Mmage', 'url'=>array('admin')),
);
?>

<h1>Update Mmage <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>