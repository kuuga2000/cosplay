<?php
/* @var $this GalleriesController */
/* @var $model Gallery */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gallery-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'gallery_title'); ?>
		<?php echo $form->textField($model,'gallery_title',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'gallery_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gallery_cover'); ?>
		<?php echo $form->textField($model,'gallery_cover',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'gallery_cover'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gallery_description'); ?>
		<?php echo $form->textArea($model,'gallery_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'gallery_description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->