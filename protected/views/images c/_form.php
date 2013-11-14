<?php
/* @var $this ImagesController */
/* @var $model Image */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'image-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data',),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'image_content'); ?>
		<?php echo $form->fileField($model,'image_content',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'image_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_description'); ?>
		<?php echo $form->textField($model,'image_description',array('size'=>60,'maxlength'=>5000)); ?>
		<?php echo $form->error($model,'image_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gallery_id'); ?>
		<?php //echo $form->textField($model,'gallery_id'); 
			echo $form->dropDownList($model,'gallery_id',CHtml::listData(Gallery::model()->findAll(), 'id', 'gallery_title'),array('empty'=>'--gallery--'));
		?>
		<?php echo $form->error($model,'gallery_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_id'); ?>
		<?php //echo $form->textField($model,'post_id'); 
			echo $form->dropDownList($model,'post_id',CHtml::listData(Post::model()->findAll(), 'id', 'post_title'),array('empty'=>'--Post--'));	
		?>
		<?php echo $form->error($model,'post_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->