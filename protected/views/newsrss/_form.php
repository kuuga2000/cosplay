<?php
/* @var $this NewsadminController */
/* @var $model News */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>TRUE
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'news_title'); ?>
		<?php echo $form->textField($model,'news_title',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'news_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'news_postdate'); ?>
		<?php echo $form->textField($model,'news_postdate'); ?>
		<?php echo $form->error($model,'news_postdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'news_content'); ?>
		<?php echo $form->textArea($model,'news_content',array('rows'=>6, 'cols'=>50,'id'=>'editor1')); ?>
		<?php echo $form->error($model,'news_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'news_image'); ?>
		<?php echo $form->textField($model,'news_image',array('size'=>60,'maxlength'=>5000)); ?>
		<?php echo $form->error($model,'news_image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'news_video'); ?>
		<?php echo $form->textField($model,'news_video',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'news_video'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'translated'); ?>
		<?php echo $form->textField($model,'translated',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'translated'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script type="text/javascript">
			//<![CDATA[

				// This call can be placed at any point after the
				// <textarea>, or inside a <head><script> in a
				// window.onload event handler.

				// Replace the <textarea id="editor"> with an CKEditor
				// instance, using default configurations.
				CKEDITOR.replace( 'editor1',
                {
                    filebrowserBrowseUrl :'<?=$this->baseUrl();?>/ckeditor2/js/ckeditor/filemanager/browser/default/browser.html?Connector=http://localhost:85/ckeditor2/js/ckeditor/filemanager/connectors/php/connector.php',
                    filebrowserImageBrowseUrl : '<?=$this->baseUrl();?>/ckeditor2/js/ckeditor/filemanager/browser/default/browser.html?Type=Image&Connector=http://localhost:85/ckeditor2/js/ckeditor/filemanager/connectors/php/connector.php',
                    filebrowserFlashBrowseUrl :'<?=$this->baseUrl();?>/ckeditor2/js/ckeditor/filemanager/browser/default/browser.html?Type=Flash&Connector=http://localhost:85/ckeditor2/js/ckeditor/filemanager/connectors/php/connector.php',
					filebrowserUploadUrl  :'<?=$this->baseUrl();?>/ckeditor2/js/ckeditor/filemanager/connectors/php/upload.php?Type=File',
					filebrowserImageUploadUrl : '<?=$this->baseUrl();?>/ckeditor2/js/ckeditor/filemanager/connectors/php/upload.php?Type=Image',
					filebrowserFlashUploadUrl : '<?=$this->baseUrl();?>/ckeditor2/js/ckeditor/filemanager/connectors/php/upload.php?Type=Flash'
				});

			//]]>
			</script>