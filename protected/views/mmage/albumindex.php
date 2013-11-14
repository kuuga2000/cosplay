
<div class="breaking-wrapper">
					
					<div class="horizontal-scroller">
						 
					</div>
				<!-- END .breaking-wrapper -->
				</div>

<div class="main-column-wrapper">
	<!-- BEGIN .main-column-left -->
	<div class="main-column-left">
		<!-- BEGIN .post -->
		<div class="post">
			<div class="post-title">
				<b>Index album</b>
			</div>
			<!-- BEGIN .photo-gallery -->
			<div class="photo-gallery">
				<!-- BEGIN .row -->
				<div class="row" id="koalalist2">
					<!-- BEGIN .index-item -->
					<?php foreach($rowImage as $photo):
					?>
					<div class="index-item">
						<div class="view view-first" style="width: 125px; height: 125px">
							
							<img src="<?=Yii::app() -> request -> baseUrl;?>/assets/thumb/thumb.php?w=125&h=125&zc=1&src=../../images/<?=$photo['gallery_cover'];?>" title="<?=$photo['gallery_title'];?>" alt="" height="125" width="125">
							<div class="mask">
								<h2><?=$photo['gallery_title'];?></h2>
								<p>
									 <a href="<?=$this->baseUrl();?>/photo-album/<?=$this->addStrip($photo['gallery_title']);?>" class="info">Open</a>
								</p>
								
							</div>
						</div>
						
						 
						<!--<a href="<?=$this -> baseUrl();?>/photo-album/<?=$this -> addStrip($photo['gallery_title']);?>"><?=$photo['gallery_description'];?></a>-->
						<!-- END .index-item -->
					</div>
					<?php endforeach;?>
				</div>
				<!-- BEGIN .pages -->
				<div class="pages">
					<div>
						<?

						for ($i = 1; $i <= $sumPage; $i++) {
							if ($i != $page) {

								echo "<a href=" . $this -> baseUrl() . "/index-album/page$i>$i</a>";
							} else {
								echo "<a class=active href=" . $this -> baseUrl() . "/index-album/page$i>$i</a>";
							}
						}
						/*$angka = ($page > 3 ? " ... " : " ");
						 for ($i = $page - 2; $i < $page; $i++) {
						 if ($i < 1)
						 continue;
						 $angka .= "<a href=page$i>$i</a>";
						 }

						 $angka .= " <b>$halaman</b> ";
						 for ($i = $page + 1; $i < ($page + 3); $i++) {
						 if ($i > $sumPage)
						 break;
						 $angka .= "<a href=page$i>$i</a>";
						 }

						 $angka .= ($page + 2 < $sumPage ? " ... <a href=page$i>$i</a>" : " ");

						 echo "$angka";*/
						?> <!--
						<a href="#">1</a>
						<a href="#" class="active">2</a>
						<a href="#">3</a>
						<a href="#">4</a>
						<a href="#">5</a>
						<a href="#">6</a>
						<a href="#">7</a>
						-->
					</div>
					<?

					if ($page < $sumPage) {
						$next = $page + 1;
						echo "<a href=" . $this -> baseUrl() . "/index-album/page$next class=next>Next</a>";
					} else {
						//echo "Next";
					}
					?> <!--<a href="#" class="next">Next</a>-->
					<?
					if ($page > 1) {
						$prev = $page - 1;
						echo "<a href=" . $this -> baseUrl() . "/index-album/page$prev class=previous>Previous</a>";
					} else {
						//echo "Previous";
					}
					?> <!--<a href="#" class="previous">Previous</a>-->
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
					<b>Latest galleries</b>
				</div>
				<!-- BEGIN .photos -->
				<div class="photos">
					<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" width="51" height="51" /></a>
					<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" width="51" height="51" /></a>
					<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" width="51" height="51" /></a>
					<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" width="51" height="51" /></a>
					<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" width="51" height="51" /></a>
					<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" width="51" height="51" /></a>
					<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" width="51" height="51" /></a>
					<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" width="51" height="51" /></a>
					<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" width="51" height="51" /></a>
					<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" width="51" height="51" /></a>
					<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" width="51" height="51" /></a>
					<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" width="51" height="51" /></a>
					<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" width="51" height="51" /></a>
					<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" width="51" height="51" /></a>
					<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" width="51" height="51" /></a>
					<a href="#"><img src="images/photos/no-image-50x50.jpg" alt="" width="51" height="51" /></a>
					<!-- END .photos -->
				</div>
				<p class="show-all">
					<a href="#" class="btn-1 btn-1-color-default"><span>Show all galleries</span></a>
				</p>
			</div>
			<!-- END .sidebar-item .latest-articles -->
		</div>
		<!-- END .sidebar -->
	</div>
	<div class="clear">
		&nbsp;
	</div>
	<!-- END .main-column-wrapper -->
</div>
<!--<link rel="stylesheet" type="text/css" href="<?=$this -> baseUrl();?>/assets/zoomimage/efect_files/demo.css">-->
<link rel="stylesheet" type="text/css" href="<?=$this -> baseUrl();?>/assets/zoomimage/efect_files/style_common.css">
<link rel="stylesheet" type="text/css" href="<?=$this -> baseUrl();?>/assets/zoomimage/efect_files/style1.css">
<link href="<?=$this -> baseUrl();?>/assets/zoomimage/efect_files/css.css" rel="stylesheet" type="text/css">
<script src="<?=$this -> baseUrl();?>/assets/zoomimage/efect_files/ga.js" async="" type="text/javascript"></script>
<script class="ignoreme" id="auto_1" type="text/javascript">
	(function() {
		var bsa = document.createElement('script');
		bsa.type = 'text/javascript';
		bsa.async = true;
		bsa.src = '//s3.buysellads.com/ac/bsa.js';
		(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
	})();

</script>
