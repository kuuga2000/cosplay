<!-- BEGIN .homepage-slider-wrapper -->
<title>Lorem ipsum &amp; dolor</title>
<div class="homepage-slider-wrapper">
	<!-- BEGIN .homepage-slider -->
	<div class="homepage-slider">
		<div id="homepage-slider">
			<img src="<?=Yii::app() -> request -> baseUrl;?>/assets/thumb/thumb.php?w=871&h=350&zc=0&src=../../images/2013-09-18-012336.jpeg" alt="&lt;a href=&quot;#&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elitam eunisi dapibus adipiscing magna sed cursus sapien condimentum&lt;/a&gt;" width="871" height="350" />
			<img src="<?=Yii::app() -> request -> baseUrl;?>/assets/thumb/thumb.php?w=871&h=350&zc=0&src=../../images/2013-09-18-012300.jpeg" alt="&lt;a href=&quot;#&quot;&gt;Pellentesque placerat sollicitudin metus, vitae consequat felis varius sit amet condimentum porta&lt;/a&gt;" width="871" height="350" />
			<img src="<?=Yii::app() -> request -> baseUrl;?>/assets/thumb/thumb.php?w=871&h=350&zc=0&src=../../images/2013-09-21-170525.jpeg" alt="&lt;a href=&quot;#&quot;&gt;Nullam pretium tincidunt turpis eget pretium orci venenatis sollicitudin sagittis odio&lt;/a&gt;" width="871" height="350" />
		</div>
		<div id="navigation"></div>
		<div id="control"></div>
		<div class="shadow">
			&nbsp;
		</div>
		<!-- END .homepage-slider -->
	</div>
	<!-- END .homepage-slider-wrapper -->
</div>
<!-- BEGIN .homepage-title -->
<!--<div class="homepage-title">
	Etiam ac ultricies sem. In lobortis urna a nulla tristique ut rutrum eros. Morbi vehicula accumsan neque, tempor sollicitudin nulla auctor eu. <!-- END .homepage-title -->
<!--</div>-->
<!-- BEGIN .homepage-block-1 -->
 
<!-- BEGIN .homepage-block-1 -->
<div class="homepage-block-1">
	<div class="main-title">
		<span>Latest in news</span><a href="<?=$this->baseUrl();?>/index-news">+ index</a>
	</div>
	<!-- BEGIN .layout-2 -->
	<div class="layout-2">
		<?php foreach($dataProvider as $data):?>
		<div class="item">
			 
			<a href="<?=$this->baseUrl();?>/news/<?=$data['id'];?>/<?=$this->addStrip($data['news_title']);?>.html"><img src="<?=empty($data['news_image'])?'images/no-image-130x130.jpg':$data['news_image'];?>" alt="" class="image" /></a>
			<div class="title">
				<a href="<?=$this->baseUrl();?>/news/<?=$data['id'];?>/<?=$this->addStrip($data['news_title']);?>.html" class="text"><?=$data['news_title'];?></a> 
			</div>
		</div>
	    <? endforeach;?>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <?php foreach($dataProvider_2 as $data):?>
		<div class="item">
			 
			<a href="<?=$this->baseUrl();?>/news/<?=$data['id'];?>/<?=$this->addStrip($data['news_title']);?>.html"><img src="<?=empty($data['news_image'])?'images/no-image-130x130.jpg':$data['news_image'];?>" alt="" class="image" /></a>
			<div class="title">
				<a href="<?=$this->baseUrl();?>/news/<?=$data['id'];?>/<?=$this->addStrip($data['news_title']);?>.html" class="text"><?=$data['news_title'];?></a> 
			</div>
		</div>
	    <? endforeach;?>
	     <p>&nbsp;</p>
	     <p>&nbsp;</p>
	    <?php foreach($dataProvider_3 as $data):?>
		<div class="item">
			 
			<a href="<?=$this->baseUrl();?>/news/<?=$data['id'];?>/<?=$this->addStrip($data['news_title']);?>.html"><img src="<?=empty($data['news_image'])?'images/no-image-130x130.jpg':$data['news_image'];?>" alt="" class="image" /></a>
			<div class="title">
				<a href="<?=$this->baseUrl();?>/news/<?=$data['id'];?>/<?=$this->addStrip($data['news_title']);?>.html" class="text"><?=$data['news_title'];?></a> 
			</div>
		</div>
	    <? endforeach;?>
		<!-- BEGIN .layout-2 -->
	</div>
	<!-- END .homepage-block-1 -->
</div>
<!-- BEGIN .homepage-block-1 -->
<div class="homepage-block-1">
	<div class="main-title">
		<span>Latest in events</span><a href="#">+ index</a>
	</div>
	<!-- BEGIN .layout-3 -->
	<div class="layout-3">
		<div class="list">
			<? foreach($ModelEvent as $event):?>
			<div class="item">
				<div class="image">
					<a href="<?=Yii::app()->request->baseUrl;?>/read/<?=$event['id'];?>/<?=str_replace(' ','-',$event['post_title']);?>.html">
						<img src="<?=Yii::app() -> request -> baseUrl;?>/assets/thumb/thumb.php?w=50&h=50&zc=1&src=../../images/<?=$event['post_image'];?>" alt="" width="50" height="" /></a>
				</div>
				<div class="title">
					<a href="<?=Yii::app()->request->baseUrl;?>/read/<?=$event['id'];?>/<?=str_replace(' ','-',$event['post_title']);?>.html"><?=substr($event['post_title'],0,44);?></a>
				</div>
				<div class="info">
					<span class="date">10 / 01 / 2011</span><a href="#" class="comments">12</a>
				</div>
			</div>
			<? endforeach;?>
		</div>
		<div class="list">
			<? foreach($ModelEvent_1 as $event_1):?>
			<div class="item">
				<div class="image">
					<a href="<?=Yii::app()->request->baseUrl;?>/read/<?=$event_1['id'];?>/<?=str_replace(' ','-',$event_1['post_title']);?>.html">
						<img src="<?=Yii::app() -> request -> baseUrl;?>/assets/thumb/thumb.php?w=50&h=50&zc=1&src=../../images/<?=$event_1['post_image'];?>" alt="" width="50" height="" /></a>
				</div>
				<div class="title">
					<a href="<?=Yii::app()->request->baseUrl;?>/read/<?=$event_1['id'];?>/<?=str_replace(' ','-',$event_1['post_title']);?>.html"><?=substr($event_1['post_title'],0,44);?></a>
				</div>
				<div class="info">
					<span class="date">10 / 01 / 2011</span><a href="#" class="comments">7</a>
				</div>
			</div>
			<? endforeach;?>
		</div>
		<div class="list">
			<? foreach($ModelEvent_2 as $event_2):?>
			<div class="item">
				<div class="image">
					<a href="<?=Yii::app()->request->baseUrl;?>/read/<?=$event_2['id'];?>/<?=str_replace(' ','-',$event_2['post_title']);?>.html">
						<img src="<?=Yii::app() -> request -> baseUrl;?>/assets/thumb/thumb.php?w=50&h=50&zc=1&src=../../images/<?=$event_2['post_image'];?>" alt="" width="50" height="" /></a>
				</div>
				<div class="title">
					<a href="<?=Yii::app()->request->baseUrl;?>/read/<?=$event_2['id'];?>/<?=str_replace(' ','-',$event_2['post_title']);?>.html"><?=substr($event_2['post_title'],0,44);?></a>
				</div>
				<div class="info">
					<span class="date">10 / 01 / 2011</span><a href="#" class="comments">7</a>
				</div>
			</div>
			<? endforeach;?>
		</div>
		<!-- BEGIN .layout-3 -->
	</div>
	<!-- END .homepage-block-1 -->
</div>