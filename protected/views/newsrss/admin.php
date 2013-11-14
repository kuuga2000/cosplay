<?php
/* @var $this NewsadminController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List News', 'url'=>array('index')),
	array('label'=>'Create News', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#news-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage News</h1>

 

 
<a href="<?=$this->createUrl('newsrss/create');?>" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'news-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'summaryText'=>'',
	'columns'=>array(
		'id',
		'news_title',
		'news_postdate',
		//'news_content',
		//'news_image',
		//'news_video',
		/*
		'translated',
		*/
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
