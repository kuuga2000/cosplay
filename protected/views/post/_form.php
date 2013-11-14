<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="form">
	<?php $form = $this -> beginWidget('CActiveForm', array('id' => 'post-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation' => false,
	//added
		'htmlOptions' => array('enctype' => 'multipart/form-data', ), ));
	?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>
	<?php echo $form -> errorSummary($model);?>

	<div class="row">
		<?php echo $form -> labelEx($model, 'post_title');?>
		<?php echo $form -> textField($model, 'post_title', array('size' => 60, 'maxlength' => 500));?>
		<?php echo $form -> error($model, 'post_title');?>
	</div>
	<div class="row">
		<?php echo $form -> labelEx($model, 'post_content');?>
		<?php echo $form -> textArea($model, 'post_content', array('rows' => 6, 'cols' => 50,'id'=>'editor1')); ?>
		<?php echo $form -> error($model, 'post_content');?>
	</div>
	<div class="row">
		<?php echo $form -> labelEx($model, 'post_image');?>
		<?php echo $form -> fileField($model, 'post_image', array('size' => 60, 'maxlength' => 500));?>
		<?php echo $form -> error($model, 'post_image');?>
	</div>
	<div class="row">
		<?php echo $form -> labelEx($model, 'author');?>
		<?php echo $form -> textField($model, 'author');?>
		<?php echo $form -> error($model, 'author');?>
	</div>
	 
		<?php echo $form -> hiddenField($model, 'post_date', array('value' => $model -> isNewRecord ? date("Y-m-d") : $model -> post_date));?>
	 
	<div class="row">
		<?php echo $form -> labelEx($model, 'category_id');?>
		<?php echo $form -> dropDownList($model, 'category_id', CHtml::listData(Category::model() -> findAll(), 'id', 'category_name'), array('empty' => '--category--'));?>
		<?php echo $form -> error($model, 'category_id');?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model -> isNewRecord ? 'Create' : 'Save');?>
	</div>
	<?php $this -> endWidget();?>
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
                    filebrowserBrowseUrl :'<?=$this->baseUrl();?>/img01/js/ckeditor/filemanager/browser/default/browser.html?Connector=http://localhost:85/ckeditor2/js/ckeditor/filemanager/connectors/php/connector.php',
                    filebrowserImageBrowseUrl : '<?=$this->baseUrl();?>/img01/js/ckeditor/filemanager/browser/default/browser.html?Type=Image&Connector=http://localhost:85/ckeditor2/js/ckeditor/filemanager/connectors/php/connector.php',
                    filebrowserFlashBrowseUrl :'<?=$this->baseUrl();?>/img01/js/ckeditor/filemanager/browser/default/browser.html?Type=Flash&Connector=http://localhost:85/ckeditor2/js/ckeditor/filemanager/connectors/php/connector.php',
					filebrowserUploadUrl  :'<?=$this->baseUrl();?>/img01/js/ckeditor/filemanager/connectors/php/upload.php?Type=File',
					filebrowserImageUploadUrl : '<?=$this->baseUrl();?>/img01/js/ckeditor/filemanager/connectors/php/upload.php?Type=Image',
					filebrowserFlashUploadUrl : '<?=$this->baseUrl();?>/img01/js/ckeditor/filemanager/connectors/php/upload.php?Type=Flash'
				});

			//]]>
			</script>