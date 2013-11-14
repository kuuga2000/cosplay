<?php
/* @var $this NewsadminController */
/* @var $model News */
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
		<?php echo $form->label($model,'news_title'); ?>
		<?php echo $form->textField($model,'news_title',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'news_postdate'); ?>
		<?php echo $form->textField($model,'news_postdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'news_content'); ?>
		<?php echo $form->textArea($model,'news_content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'news_image'); ?>
		<?php echo $form->textField($model,'news_image',array('size'=>60,'maxlength'=>5000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'news_video'); ?>
		<?php echo $form->textField($model,'news_video',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'translated'); ?>
		<?php echo $form->textField($model,'translated',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->