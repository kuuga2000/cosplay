<div class="main-column-wrapper">
<!-- BEGIN .main-column-left -->
<div class="main-column-left">
	<!-- BEGIN .post -->
	<div class="post">
		<div class="post-title">
			<b>
			<cufon style="width: 76px; height: 26px;" alt="Photo " class="cufon cufon-canvas">
				<canvas style="width: 109px; height: 31px; top: -7px; left: -4px;" height="31" width="109"></canvas>
				<cufontext>
					Photo
				</cufontext>
			</cufon>
			<cufon style="width: 80px; height: 26px;" alt="gallery" class="cufon cufon-canvas">
				<canvas style="width: 106px; height: 31px; top: -7px; left: -4px;" height="31" width="106"></canvas>
				<cufontext>
					gallery
				</cufontext>
			</cufon></b>
		</div>
		<!-- BEGIN .photo-gallery -->
		<div class="photo-gallery">
			<!-- BEGIN .row -->
			<div class="row">
				<!-- BEGIN .index-item -->
				<?php foreach($dataPhoto as $photo):?>
				<div class="index-item">
					<?=$photo['gallery_title'];?>
					<a href="<?=$this->baseUrl();?>/photo-album/<?=$this->addStrip($photo['gallery_title']);?>"><img src="<?=Yii::app()->request->baseUrl;?>/assets/thumb/thumb.php?w=125&h=125&zc=1&src=../../images/<?=$photo['gallery_cover'];?>" title="<?=$photo['gallery_title'];?>" alt="" height="125" width="125"></a>
					<a href="<?=$this->baseUrl();?>/photo-album/<?=$this->addStrip($photo['gallery_title']);?>"><?=$photo['gallery_description'];?></a>
					<!-- END .index-item -->
				</div>
				<?php endforeach;?>
			</div>
			<!-- BEGIN .row -->
			<div class="row">
			<!-- BEGIN .index-item -->
				<?php foreach($dataPhoto_1 as $photo):?>
				<div class="index-item">
					<?=$photo['gallery_title'];?>
					<a href="<?=$this->baseUrl();?>/photo-album/<?=$this->addStrip($photo['gallery_title']);?>"><img src="<?=Yii::app()->request->baseUrl;?>/assets/thumb/thumb.php?w=125&h=125&zc=1&src=../../images/<?=$photo['gallery_cover'];?>" title="<?=$photo['gallery_title'];?>" alt="" height="125" width="125"></a>
					<a href="<?=$this->baseUrl();?>/photo-album/<?=$this->addStrip($photo['gallery_title']);?>"><?=$photo['gallery_description'];?></a>
					<!-- END .index-item -->
				</div>
				<?php endforeach;?>
			</div>
			<!-- BEGIN .row -->
			<div class="row">
				<!-- BEGIN .index-item -->
				<?php foreach($dataPhoto_2 as $photo):?>
					
				<div class="index-item">
					<?=$photo['gallery_title'];?>
					<a href="<?=$this->baseUrl();?>/photo-album/<?=$this->addStrip($photo['gallery_title']);?>"><img src="<?=Yii::app()->request->baseUrl;?>/assets/thumb/thumb.php?w=125&h=125&zc=1&src=../../images/<?=$photo['gallery_cover'];?>" title="<?=$photo['gallery_title'];?>" alt="" height="125" width="125"></a>
					
					<a href="<?=$this->baseUrl();?>/photo-album/<?=$this->addStrip($photo['gallery_title']);?>"><?=$photo['gallery_description'];?></a>
					<!-- END .index-item -->
				</div>
				<?php endforeach;?>
			</div>
			<!-- BEGIN .pages -->
			<div class="pages">
				<div>
					<a href="#">
					<cufon style="width: 12px; height: 20px;" alt="1" class="cufon cufon-canvas">
						<canvas style="width: 28px; height: 24px; top: -5px; left: -4px;" height="24" width="28"></canvas>
						<cufontext>
							1
						</cufontext>
					</cufon></a>
					<a href="#" class="active">
					<cufon style="width: 12px; height: 20px;" alt="2" class="cufon cufon-canvas">
						<canvas style="width: 28px; height: 24px; top: -5px; left: -4px;" height="24" width="28"></canvas>
						<cufontext>
							2
						</cufontext>
					</cufon></a>
					<a href="#">
					<cufon style="width: 12px; height: 20px;" alt="3" class="cufon cufon-canvas">
						<canvas style="width: 28px; height: 24px; top: -5px; left: -4px;" height="24" width="28"></canvas>
						<cufontext>
							3
						</cufontext>
					</cufon></a>
					<a href="#">
					<cufon style="width: 12px; height: 20px;" alt="4" class="cufon cufon-canvas">
						<canvas style="width: 28px; height: 24px; top: -5px; left: -4px;" height="24" width="28"></canvas>
						<cufontext>
							4
						</cufontext>
					</cufon></a>
					<a href="#">
					<cufon style="width: 12px; height: 20px;" alt="5" class="cufon cufon-canvas">
						<canvas style="width: 28px; height: 24px; top: -5px; left: -4px;" height="24" width="28"></canvas>
						<cufontext>
							5
						</cufontext>
					</cufon></a>
					<a href="#">
					<cufon style="width: 12px; height: 20px;" alt="6" class="cufon cufon-canvas">
						<canvas style="width: 28px; height: 24px; top: -5px; left: -4px;" height="24" width="28"></canvas>
						<cufontext>
							6
						</cufontext>
					</cufon></a>
					<a href="#">
					<cufon style="width: 12px; height: 20px;" alt="7" class="cufon cufon-canvas">
						<canvas style="width: 28px; height: 24px; top: -5px; left: -4px;" height="24" width="28"></canvas>
						<cufontext>
							7
						</cufontext>
					</cufon></a>
				</div>
				<a href="#" class="next">
				<cufon style="width: 41px; height: 20px;" alt="Next" class="cufon cufon-canvas">
					<canvas style="width: 61px; height: 24px; top: -5px; left: -4px;" height="24" width="61"></canvas>
					<cufontext>
						Next
					</cufontext>
				</cufon></a>
				<a href="#" class="previous">
				<cufon style="width: 73px; height: 20px;" alt="Previous" class="cufon cufon-canvas">
					<canvas style="width: 91px; height: 24px; top: -5px; left: -4px;" height="24" width="91"></canvas>
					<cufontext>
						Previous
					</cufontext>
				</cufon></a>
				<!-- END .pages -->
			</div>
			<!-- END .photo-gallery -->
		</div>
		<!-- END .post -->
	</div>
	<!-- END .main-column-left -->
</div>
<!-- BEGIN .sidebar -->
<div class="sidebar">
	<!-- BEGIN .sidebar-item .latest-articles -->
	<div class="sidebar-item last">
		<div class="photo-gallery-widget">
			<div class="sidebar-title">
				<b>
				<cufon style="width: 57px; height: 16px;" alt="Latest " class="cufon cufon-canvas">
					<canvas style="width: 78px; height: 19px; top: -4px; left: -2px;" height="19" width="78"></canvas>
					<cufontext>
						Latest
					</cufontext>
				</cufon>
				<cufon style="width: 76px; height: 16px;" alt="galleries" class="cufon cufon-canvas">
					<canvas style="width: 91px; height: 19px; top: -4px; left: -2px;" height="19" width="91"></canvas>
					<cufontext>
						galleries
					</cufontext>
				</cufon></b>
			</div>
			<!-- BEGIN .photos -->
			<div class="photos">
				<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" height="51" width="51"></a>
				<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" height="51" width="51"></a>
				<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" height="51" width="51"></a>
				<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" height="51" width="51"></a>
				<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" height="51" width="51"></a>
				<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" height="51" width="51"></a>
				<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" height="51" width="51"></a>
				<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" height="51" width="51"></a>
				<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" height="51" width="51"></a>
				<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" height="51" width="51"></a>
				<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" height="51" width="51"></a>
				<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" height="51" width="51"></a>
				<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" height="51" width="51"></a>
				<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" height="51" width="51"></a>
				<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" height="51" width="51"></a>
				<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" height="51" width="51"></a>
				<!-- END .photos -->
			</div>
			<p class="show-all">
				<a href="#" class="btn-1 btn-1-color-default"><span>
					<cufon style="width: 38px; height: 12px;" alt="Show " class="cufon cufon-canvas">
						<canvas style="width: 54px; height: 15px; top: -3px; left: -2px;" height="15" width="54"></canvas>
						<cufontext>
							Show
						</cufontext>
					</cufon>
					<cufon style="width: 23px; height: 12px;" alt="all " class="cufon cufon-canvas">
						<canvas style="width: 39px; height: 15px; top: -3px; left: -2px;" height="15" width="39"></canvas>
						<cufontext>
							all
						</cufontext>
					</cufon>
					<cufon style="width: 60px; height: 12px;" alt="galleries" class="cufon cufon-canvas">
						<canvas style="width: 72px; height: 15px; top: -3px; left: -2px;" height="15" width="72"></canvas>
						<cufontext>
							galleries
						</cufontext>
					</cufon></span></a>
			</p>
		</div>
		<!-- END .sidebar-item .latest-articles -->
	</div>
	<!-- END .sidebar -->
</div>
<div class="clear">
	&nbsp;
</div>
<!-- END .main-column-wrapper --></div>
