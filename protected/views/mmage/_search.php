<?php
/* @var $this MmageController */
/* @var $model Mmage */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image_content'); ?>
		<?php echo $form->textField($model,'image_content',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image_description'); ?>
		<?php echo $form->textField($model,'image_description',array('size'=>60,'maxlength'=>5000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gallery_id'); ?>
		<?php echo $form->textField($model,'gallery_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'post_id'); ?>
		<?php echo $form->textField($model,'post_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->