<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!-- BEGIN html -->
<html xmlns="http://www.w3.org/1999/xhtml">

	<!-- BEGIN head -->
	<head>

		<!-- Title -->
		<title>KERNEL - Premium WordPress Blog &amp; Magazine Theme</title>

		<!-- Meta Tags -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

		<!-- Stylesheets -->
		<link rel="stylesheet" href="<?=Yii::app() -> request -> baseUrl;?>/assets/src/css/main-stylesheet.css" type="text/css" />
		<link rel="stylesheet" href="<?=Yii::app() -> request -> baseUrl;?>/assets/src/css/sexy-slider.css" type="text/css" />
		<link rel="stylesheet" href="<?=Yii::app() -> request -> baseUrl;?>/assets/src/css/shortcodes.css" type="text/css" />
		
		<!--fancy-->
		<link rel="stylesheet" href="<?=Yii::app() -> request -> baseUrl;?>/assets/src/css/jquery.fancybox.css" type="text/css" />
		<!-- JavaScripts -->
		<script src="<?=Yii::app() -> request -> baseUrl;?>/assets/src/js/jquery.min.js" type="text/javascript"></script>
		<script src="<?=Yii::app() -> request -> baseUrl;?>/assets/src/js/jquery.placeholder.min.js" type="text/javascript"></script>
		<script src="<?=Yii::app() -> request -> baseUrl;?>/assets/src/js/cufon-yui.js" type="text/javascript"></script>
		<script src="<?=Yii::app() -> request -> baseUrl;?>/assets/src/js/cufon-replace.js" type="text/javascript"></script>
		<script src="<?=Yii::app() -> request -> baseUrl;?>/assets/src/js/cachet.font.js" type="text/javascript"></script>
		<script src="<?=Yii::app() -> request -> baseUrl;?>/assets/src/js/jquery.sexyslider.js" type="text/javascript"></script>
		<!--<script src="<?=Yii::app() -> request -> baseUrl;?>/assets/src/js/jquery.sexyslider-blog.js" type="text/javascript"></script>-->
		<script src="<?=Yii::app() -> request -> baseUrl;?>/assets/src/js/text-scroller.js" type="text/javascript"></script>
		
		<!--fancy-->
		<script src="<?=Yii::app() -> request -> baseUrl;?>/assets/src/js/jquery.fancybox.js" type="text/javascript" ></script>

		<script type="text/javascript">
			$(document).ready(function(){
				// hide #back-top first
				// $("#back-top").hide();
				// fade in #back-top
				$(function () {
					$(window).scroll(function () { });
					// scroll body to 0px on click
					$('.back-to-top a').click(function () {
						$('body,html').animate({
							scrollTop: 0
						}, 800);
						return false;
					});
				});
			});
		</script>

		<script type="text/javascript">
			$(document).ready(function() {
				$("#homepage-slider").SexySlider({
					width      : 569,
					height     : 350,
					delay      : 3000,
					strips     : 20,
					autopause  : true,
					navigation : '#navigation',
					control    : '#control',
					effect     : 'fade',
					titleStyle : 'false'
				});
			});
		</script>

	<!-- END head -->
	</head>

	<!-- BEGIN body -->
	<body class="top">


		<!-- BEGIN .main-content-wrapper -->
		<div class="main-content-wrapper">

			<!-- BEGIN .main-content -->
			<div class="main-content">


				<!-- BEGIN .main-header -->
				<div class="main-header">
					<div class="logo">
						<a href="homepage-3.html"><img src="images/logo-kernel-1.png" alt="KERNEL" width="166" height="28" /></a>
					</div>
					<div class="search">
						<form action="">
							<input type="text" class="input-text" placeholder="search here" />
							<input type="submit" class="input-submit" value="" />
						</form>
					</div>
					<div class="social">
						<a href="#"><img src="images/ico-digg-1.png" alt="DIGG" width="19" height="19" /></a>
						<a href="#"><img src="images/ico-youtube-1.png" alt="YouTube" width="19" height="19" /></a>
						<a href="#"><img src="images/ico-flickr-1.png" alt="Flickr" width="19" height="19" /></a>
						<a href="#"><img src="images/ico-facebook-1.png" alt="Facebook" width="19" height="19" /></a>
						<a href="#"><img src="images/ico-twitter-1.png" alt="Twitter" width="19" height="19" /></a>
						<a href="#"><img src="images/ico-rss-1.png" alt="RSS" width="19" height="19" /></a>
					</div>
				<!-- END .main-header -->
				</div>


				<!-- BEGIN .main-menu-wrapper -->
				<div class="main-menu-wrapper">
					<span class="corner-left">&nbsp;</span>
					<ul>
						<li><a href="homepage-3.html">Homepage</a></li>
						<li>
							<a href="blog-style-1.html"><span>Blog</span></a>
							<ul>
								<li><a href="blog-style-1.html">Blog style 1 with small images</a></li>
								<li><a href="blog-style-2.html">Blog style 2 with big images</a></li>
								<li>
									<a href="post-style-1.html"><span>Single post test blog entry</span></a>
									<ul>
										<li><a href="post-style-1.html">Single post with small image</a></li>
										<li><a href="post-style-2.html">Single post with big image</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a href="#"><span>Shortcodes</span></a>
							<ul>
								<li><a href="shortcodes-buttons.html">Buttons</a></li>
								<li><a href="shortcodes-layouts.html">Layouts</a></li>
								<li><a href="shortcodes-spacers.html">Spacers</a></li>
								<li><a href="shortcodes-lists.html">Lists</a></li>
								<li><a href="shortcodes-quotes.html">Quotes</a></li>
								<li><a href="shortcodes-contact-form.html">Contact form</a></li>
							</ul>
						</li>
						<li>
							<a href="photo-gallery.html"><span>Photo gallery</span></a>
							<ul>
								<li><a href="photo-gallery.html">Photo gallery index</a></li>
								<li><a href="photo-gallery-list.html">Opened gallery image list</a></li>
								<li><a href="photo-gallery-single.html">Single image</a></li>
							</ul>
						</li>
						<li><a href="archive.html">Archive</a></li>
					</ul>
				<!-- END .main-menu-wrapper -->
				</div>


				<!-- BEGIN .breaking-wrapper -->
				<div class="breaking-wrapper">
					<p>Breaking:</p>
					<div class="horizontal-scroller">
						<div id="scrollingtext">
							<img src="images/ico-list-bullet-1.png" alt="" width="7" height="6" /><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing rnare laoreet vehicula</a>
							<img src="images/ico-list-bullet-1.png" alt="" width="7" height="6" /><a href="#">Praesent ultricies porta condimentum suspendisse potenti</a>
							<img src="images/ico-list-bullet-1.png" alt="" width="7" height="6" /><a href="#">Vivamus fermentum nisl a sapien luctus et venenatis urna hendrerit</a>
						</div>
					</div>
				<!-- END .breaking-wrapper -->
				</div>


				<!-- BEGIN .main-column-wrapper -->
				<div class="main-column-wrapper">


					<!-- BEGIN .main-column-left -->
					<div class="main-column-left">


						<!-- BEGIN .post -->
						<div class="post">

							<div class="post-title">
								<b>Photo gallery</b>
							</div>

							<!-- BEGIN .photo-gallery -->
							<div class="photo-gallery">

								<!-- BEGIN .row -->
								<div class="row">
									<!-- BEGIN .index-item -->
									<div class="index-item">
										<a href="#"><img src="images/photos/no-image-130x130.jpg" alt="" width="125" height="125" /></a>
										<a href="#">Aliquam facilisis, ipsum id condimentum ornare, metus arcu congue lacus.</a>
									<!-- END .index-item -->
									</div>
									<!-- BEGIN .index-item -->
									<div class="index-item">
										<a href="#"><img src="images/photos/no-image-130x130.jpg" alt="" width="125" height="125" /></a>
										<a href="#">Maecenas vitae nibh eu lacus porta feugiat et in lectus. Class aptent taciti.</a>
									<!-- END .index-item -->
									</div>
									<!-- BEGIN .index-item -->
									<div class="index-item">
										<a href="#"><img src="images/photos/no-image-130x130.jpg" alt="" width="125" height="125" /></a>
										<a href="#">Donec semper, nisl sit amet rutrum lacinia, sem leo consequat leo, vel.</a>
									<!-- END .index-item -->
									</div>
									<!-- BEGIN .index-item -->
									<div class="index-item">
										<a href="#"><img src="images/photos/no-image-130x130.jpg" alt="" width="125" height="125" /></a>
										<a href="#">Phasellus ut elementum tortor. Mauris pellentesque posuere erat. Aliquams.</a>
									<!-- END .index-item -->
									</div>
								<!-- END .row -->
								</div>

								<!-- BEGIN .row -->
								<div class="row">
									<!-- BEGIN .index-item -->
									<div class="index-item">
										<a href="#"><img src="images/photos/no-image-130x130.jpg" alt="" width="125" height="125" /></a>
										<a href="#">Aliquam facilisis, ipsum id condimentum ornare, metus arcu congue lacus.</a>
									<!-- END .index-item -->
									</div>
									<!-- BEGIN .index-item -->
									<div class="index-item">
										<a href="#"><img src="images/photos/no-image-130x130.jpg" alt="" width="125" height="125" /></a>
										<a href="#">Maecenas vitae nibh eu lacus porta feugiat et in lectus. Class aptent taciti.</a>
									<!-- END .index-item -->
									</div>
									<!-- BEGIN .index-item -->
									<div class="index-item">
										<a href="#"><img src="images/photos/no-image-130x130.jpg" alt="" width="125" height="125" /></a>
										<a href="#">Donec semper, nisl sit amet rutrum lacinia, sem leo consequat leo, vel.</a>
									<!-- END .index-item -->
									</div>
									<!-- BEGIN .index-item -->
									<div class="index-item">
										<a href="#"><img src="images/photos/no-image-130x130.jpg" alt="" width="125" height="125" /></a>
										<a href="#">Phasellus ut elementum tortor. Mauris pellentesque posuere erat. Aliquams.</a>
									<!-- END .index-item -->
									</div>
								<!-- END .row -->
								</div>

								<!-- BEGIN .row -->
								<div class="row">
									<!-- BEGIN .index-item -->
									<div class="index-item">
										<a href="#"><img src="images/photos/no-image-130x130.jpg" alt="" width="125" height="125" /></a>
										<a href="#">Aliquam facilisis, ipsum id condimentum ornare, metus arcu congue lacus.</a>
									<!-- END .index-item -->
									</div>
									<!-- BEGIN .index-item -->
									<div class="index-item">
										<a href="#"><img src="images/photos/no-image-130x130.jpg" alt="" width="125" height="125" /></a>
										<a href="#">Maecenas vitae nibh eu lacus porta feugiat et in lectus. Class aptent taciti.</a>
									<!-- END .index-item -->
									</div>
									<!-- BEGIN .index-item -->
									<div class="index-item">
										<a href="#"><img src="images/photos/no-image-130x130.jpg" alt="" width="125" height="125" /></a>
										<a href="#">Donec semper, nisl sit amet rutrum lacinia, sem leo consequat leo, vel.</a>
									<!-- END .index-item -->
									</div>
									<!-- BEGIN .index-item -->
									<div class="index-item">
										<a href="#"><img src="images/photos/no-image-130x130.jpg" alt="" width="125" height="125" /></a>
										<a href="#">Phasellus ut elementum tortor. Mauris pellentesque posuere erat. Aliquams.</a>
									<!-- END .index-item -->
									</div>
								<!-- END .row -->
								</div>

								<!-- BEGIN .pages -->
								<div class="pages">
									<div>
										<a href="#">1</a>
										<a href="#" class="active">2</a>
										<a href="#">3</a>
										<a href="#">4</a>
										<a href="#">5</a>
										<a href="#">6</a>
										<a href="#">7</a>
									</div>
									<a href="#" class="next">Next</a>
									<a href="#" class="previous">Previous</a>
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
								<p class="show-all"><a href="#" class="btn-1 btn-1-color-default"><span>Show all galleries</span></a></p>
							</div>
						<!-- END .sidebar-item .latest-articles -->
						</div>

					<!-- END .sidebar -->
					</div>


					<div class="clear">&nbsp;</div>


				<!-- END .main-column-wrapper -->
				</div>


			<!-- BEGIN .main-footer -->
			<div class="main-footer">
				<div class="about">
					<h2>About Kernel Wordpress theme</h2>
					<div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu nisi ante, dapibus adipiscing magna. Cras a leo a magna. Phasellus enim libero, blandit ac tempor</p>
						<p>Nulla hendrerit nunc sit amet nunc rutrum sed cursus sapien condimentum.</p>
						<p><a href="#" class="purchase">Purchase KERNEL at ThemeForest</a></p>
					</div>
				</div>
				<div class="categories">
					<h2>Categories</h2>
					<ul>
						<li><a href="#">Technology</a></li>
						<li><a href="#">Fashion &amp; Design</a></li>
						<li><a href="#">Movies</a></li>
						<li><a href="#">Music</a></li>
						<li><a href="#">Games &amp; Entertainment</a></li>
						<li><a href="#">Cars, Bikes &amp; Bicycles</a></li>
						<li><a href="#">Uncategorized</a></li>
					</ul>
				</div>
				<div class="social">
					<h2>Social networks</h2>
					<ul>
						<li><a href="#" class="twitter">Follow us on Twitter</a></li>
						<li><a href="#" class="facebook">Friend un on Facebook</a></li>
						<li><a href="#" class="digg">Dig us at Digg</a></li>
						<li><a href="#" class="youtube">Watch our YouTube channel</a></li>
						<li><a href="#" class="flickr">Check our photos at Flickr</a></li>
						<li><a href="#" class="rss">RSS feeds</a></li>
					</ul>
				</div>
				<div class="copyright">
					<div class="back-to-top"><a href="#top"><span>go back to the top</span></a></div>
					Copyright &amp; Design © 2011 by <b>Orange-Themes.com</b>
				</div>
			<!-- END .main-footer -->
			</div>


			<!-- END .main-content -->
			</div>

		<!-- END .main-content-wrapper -->
		</div>


	<!-- END body -->
	</body>

<!-- END html -->
</html>