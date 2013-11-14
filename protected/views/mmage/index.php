<?php
/* @var $this MmageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mmages',
);

$this->menu=array(
	array('label'=>'Create Mmage', 'url'=>array('create')),
	array('label'=>'Manage Mmage', 'url'=>array('admin')),
);
?>

<h1>Mmages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
