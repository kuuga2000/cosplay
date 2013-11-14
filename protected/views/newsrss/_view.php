<?php
/* @var $this NewsadminController */
/* @var $data News */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_title')); ?>:</b>
	<?php echo CHtml::encode($data->news_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_postdate')); ?>:</b>
	<?php echo CHtml::encode($data->news_postdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_content')); ?>:</b>
	<?php echo CHtml::encode($data->news_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_image')); ?>:</b>
	<?php echo CHtml::encode($data->news_image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_video')); ?>:</b>
	<?php echo CHtml::encode($data->news_video); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('translated')); ?>:</b>
	<?php echo CHtml::encode($data->translated); ?>
	<br />


</div>