<?php
/* @var $this AlbumController */
/* @var $data Album */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gallery_title')); ?>:</b>
	<?php echo CHtml::encode($data->gallery_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gallery_cover')); ?>:</b>
	<?php echo CHtml::encode($data->gallery_cover); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gallery_description')); ?>:</b>
	<?php echo CHtml::encode($data->gallery_description); ?>
	<br />


</div>