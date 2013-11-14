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
<div class="homepage-title">
	Etiam ac ultricies sem. In lobortis urna a nulla tristique ut rutrum eros. Morbi vehicula accumsan neque, tempor sollicitudin nulla auctor eu. <!-- END .homepage-title -->
</div>
<!-- BEGIN .homepage-block-1 -->
<div class="homepage-block-1">
	<div class="main-title">
		<span>Latest in images</span><a href="#">+ index</a>
	</div>
	<!-- BEGIN .layout-1 -->
	<div class="layout-1">
		<? foreach($Cover as $image):?>
		<div class="featured">
			<a href="#"><img src="<?=Yii::app() -> request -> baseUrl;?>/assets/thumb/thumb.php?w=315&h=177&zc=1&src=../../images/<?=$image['gallery_cover'];?>" alt="" width="315" height="177" class="image" /></a>
			<div>
				<a href="#" class="title"><?=$image['gallery_title'];?></a><a href="#" class="comments">5</a>
			</div>
		</div>
		<? endforeach;?>
		<div class="list">
			<? foreach($ModelPost as $post):?>
			<div class="item">
				<div class="image">
					<a href="<?=Yii::app()->request->baseUrl;?>/read/<?=$post['id'];?>/<?=str_replace(' ','-',$post['post_title']);?>.html">
						<!--<img src="<?=Yii::app() -> request -> baseUrl;?>/images/thumbs/<?=$post['post_image'];?>" alt="" width="50" height="" />-->
						<img src="<?=Yii::app() -> request -> baseUrl;?>/assets/thumb/thumb.php?w=50&h=50&zc=1&src=../../images/<?=$post['post_image'];?>" alt="" width="50" height="50" />
						
					</a>
				</div>
				<div class="title">
					<a href="<?=Yii::app()->request->baseUrl;?>/read/<?=$post['id'];?>/<?=str_replace(' ','-',$post['post_title']);?>.html"><?=substr($post['post_title'],0,44);?></a>
				</div>
				<div class="info">
					<span class="date">10 / 01 / 2011</span><a href="#" class="comments">5</a>
				</div>
			</div>
			<? endforeach;?>
		</div>
		<div class="list">
			<? foreach($ModelPost_1 as $post_1):?>
			<div class="item">
				<div class="image">
					<a href="<?=Yii::app()->request->baseUrl;?>/read/<?=$post_1['id'];?>/<?=str_replace(' ','-',$post_1['post_title']);?>.html">
						<img src="<?=Yii::app() -> request -> baseUrl;?>/assets/thumb/thumb.php?w=50&h=50&zc=1&src=../../images/<?=$post_1['post_image'];?>" alt="" width="50" height="" /></a>
				</div>
				<div class="title">
					<a href="<?=Yii::app()->request->baseUrl;?>/read/<?=$post_1['id'];?>/<?=str_replace(' ','-',$post_1['post_title']);?>.html"><?=substr($post_1['post_title'],0,44);?></a>
				</div>
				<div class="info">
					<span class="date">10 / 01 / 2011</span><a href="#" class="comments">12</a>
				</div>
			</div>
			<? endforeach;?>
		</div>
		<!-- END .layout-1 -->
	</div>
	<!-- END .homepage-block-1 -->
</div>
<!-- BEGIN .homepage-block-1 -->
<div class="homepage-block-1">
	<div class="main-title">
		<span>Latest in videos</span><a href="#">+ index</a>
	</div>
	<!-- BEGIN .layout-2 -->
	<div class="layout-2">
		<div class="item">
			<a href="#"><img src="<?=Yii::app() -> request -> baseUrl;?>/assets/src/images/photos/no-image-150x100.jpg" alt="" width="151" height="100" class="image" /></a>
			<div class="title">
				<a href="#" class="text">Maecenas lacus nunc rutrum vitae pharetra eu portaleo imperdiet</a><a href="#" class="comments">5</a>
			</div>
		</div>
		<div class="item">
			<a href="#"><img src="<?=Yii::app() -> request -> baseUrl;?>/assets/src/images/photos/no-image-150x100.jpg" alt="" width="151" height="100" class="image" /></a>
			<div class="title">
				<a href="#" class="text">Curabitur accumsan libero sed dui aliquet ut volutpat sem facil</a><a href="#" class="comments">2</a>
			</div>
		</div>
		<div class="item">
			<a href="#"><img src="<?=Yii::app() -> request -> baseUrl;?>/assets/src/images/photos/no-image-150x100.jpg" alt="" width="151" height="100" class="image" /></a>
			<div class="title">
				<a href="#" class="text">Aenean aliquam est at erat sodales ultricies ellentes at nibh</a><a href="#" class="comments">35</a>
			</div>
		</div>
		<div class="item">
			<a href="#"><img src="<?=Yii::app() -> request -> baseUrl;?>/assets/src/images/photos/no-image-150x100.jpg" alt="" width="151" height="100" class="image" /></a>
			<div class="title">
				<a href="#" class="text">Etiam nisi mauris, tempor id vestibulum luctus lobortis acelit</a><a href="#" class="comments">7</a>
			</div>
		</div>
		<div class="item">
			<a href="#"><img src="<?=Yii::app() -> request -> baseUrl;?>/assets/src/images/photos/no-image-150x100.jpg" alt="" width="151" height="100" class="image" /></a>
			<div class="title">
				<a href="#" class="text">Fusce porta porttitor metus sed laciniaetiami sit amet dolor</a><a href="#" class="comments">10</a>
			</div>
		</div>
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