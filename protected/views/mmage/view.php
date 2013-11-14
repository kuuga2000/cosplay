<?php
/* @var $this MmageController */
/* @var $model Mmage */

$this->breadcrumbs=array(
	'Mmages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Mmage', 'url'=>array('index')),
	array('label'=>'Create Mmage', 'url'=>array('create')),
	array('label'=>'Update Mmage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Mmage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mmage', 'url'=>array('admin')),
);
?>

<h1>View Mmage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'image_content',
		'image_description',
		'gallery_id',
		'post_id',
	),
)); ?>
