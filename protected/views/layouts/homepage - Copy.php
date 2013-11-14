<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- BEGIN html -->
<html xmlns="http://www.w3.org/1999/xhtml">
	<!-- BEGIN head -->
	<head>
		<!-- Title -->
		<!--<title>Lorem ipsum &amp; dolor</title>-->
		<!-- Meta Tags -->
		<style>
			div.item p img {
				padding: 2px;
				margin: 2px 20px 0px 0px;
				border: 1px solid rgb(204, 204, 204);
				float: left;
				/*width: 210px;*/
				height: 150px;
			}
		</style>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
		<!-- Stylesheets -->
		<link rel="stylesheet" href="<?=Yii::app() -> request -> baseUrl; ?>/assets/src/css/main-stylesheet.css" type="text/css" />
		<link rel="stylesheet" href="<?=Yii::app() -> request -> baseUrl; ?>/assets/src/css/sexy-slider.css" type="text/css" />
		<link rel="stylesheet" href="<?=Yii::app() -> request -> baseUrl; ?>/assets/src/css/shortcodes.css" type="text/css" />

		<!--fancy-->
		<link rel="stylesheet" href="<?=Yii::app() -> request -> baseUrl; ?>/assets/src/css/jquery.fancybox.css" type="text/css" />
		<!-- JavaScripts -->
		<script src="<?=Yii::app() -> request -> baseUrl; ?>/assets/src/js/jquery.min.js" type="text/javascript"></script>
		<script src="<?=Yii::app() -> request -> baseUrl; ?>/assets/src/js/jquery.placeholder.min.js" type="text/javascript"></script>
		<script src="<?=Yii::app() -> request -> baseUrl; ?>/assets/src/js/cufon-yui.js" type="text/javascript"></script>
		<script src="<?=Yii::app() -> request -> baseUrl; ?>/assets/src/js/cufon-replace.js" type="text/javascript"></script>
		<script src="<?=Yii::app() -> request -> baseUrl; ?>/assets/src/js/cachet.font.js" type="text/javascript"></script>
		<script src="<?=Yii::app() -> request -> baseUrl; ?>/assets/src/js/jquery.sexyslider.js" type="text/javascript"></script>
		<!--<script src="<?=Yii::app() -> request -> baseUrl;?>/assets/src/js/jquery.sexyslider-blog.js" type="text/javascript"></script>-->
		<script src="<?=Yii::app() -> request -> baseUrl; ?>/assets/src/js/text-scroller.js" type="text/javascript"></script>

		<!--fancy-->
		<script src="<?=Yii::app() -> request -> baseUrl; ?>/assets/src/js/jquery.fancybox.js" type="text/javascript" ></script>
		<script type="text/javascript">
			$(document).ready(function() {
				// hide #back-top first
				// $("#back-top").hide();
				// fade in #back-top
				$(function() {
					$(window).scroll(function() {
					});
					// scroll body to 0px on click
					$('.back-to-top a').click(function() {
						$('body,html').animate({
							scrollTop : 0
						}, 800);
						return false;
					});
				});
			});

		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				$("#homepage-slider").SexySlider({
					width : 871,
					height : 350,
					delay : 3000,
					strips : 20,
					autopause : true,
					navigation : '#navigation',
					control : '#control',
					effect : 'fade',
					titleStyle : 'false'
				});
			});

		</script>
		<!-- END head -->
		<script type="text/javascript">
			$(document).ready(function() {
				$("a.fancy").fancybox();
			});
			$("a[rel=group]").fancybox({
				'transitionIn' : 'none',
				'transitionOut' : 'none',
				'titlePosition' : 'over',
				'titleFormat' : function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
		</script>
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
						<!--
						<div id="fb-root"></div>
						<script>
						( function(d, s, id) {
						var js, fjs = d.getElementsByTagName(s)[0];
						if(d.getElementById(id))
						return;
						js = d.createElement(s);
						js.id = id;
						js.src = "//connect.facebook.net/id_ID/all.js#xfbml=1&appId=559214290818992";
						fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));

						</script>
						<div class="fb-like" data-href="<?=Yii::app() -> request -> baseUrl;?>" data-width="450" data-show-faces="false" data-send="false"></div>-->
						<a href="<?=Yii::app() -> request -> baseUrl; ?>"><img src="<?=Yii::app() -> request -> baseUrl; ?>/assets/src/images/logo-kernel-1.png" alt="KERNEL" width="166" height="28" /></a>
					</div>
					<!-- <div class="text-logo">
					Your Title
					</div> -->
					<div class="search">
						<form action="">
							<input type="text" class="input-text" placeholder="search here" />
							<input type="submit" class="input-submit" value="" />
						</form>
					</div>
					<div class="social">
						<!--<a href="#"><img src="<?=Yii::app() -> request -> baseUrl;?>/assets/src/images/ico-digg-1.png" alt="DIGG" width="19" height="19" /></a>
						<a href="#"><img src="<?=Yii::app() -> request -> baseUrl;?>/assets/src/images/ico-youtube-1.png" alt="YouTube" width="19" height="19" /></a>
						<a href="#"><img src="<?=Yii::app() -> request -> baseUrl;?>/assets/src/images/ico-flickr-1.png" alt="Flickr" width="19" height="19" /></a>
						<a href="#"><img src="<?=Yii::app() -> request -> baseUrl;?>/assets/src/images/ico-facebook-1.png" alt="Facebook" width="19" height="19" /></a>
						<a href="#"><img src="<?=Yii::app() -> request -> baseUrl;?>/assets/src/images/ico-twitter-1.png" alt="Twitter" width="19" height="19" /></a>
						<a href="#"><img src="<?=Yii::app() -> request -> baseUrl;?>/assets/src/images/ico-rss-1.png" alt="RSS" width="19" height="19" /></a>
						-->

					</div>

					<!-- END .main-header -->
				</div>
				<!-- BEGIN .main-menu-wrapper -->
				<div class="main-menu-wrapper">
					<span class="corner-left">&nbsp;</span>
					<ul>
						<li>
							<a href="<?=Yii::app() -> request -> baseUrl; ?>">Home</a>
						</li>
						<!--
						<li>
						<a href="blog-style-1.html"><span>Blog</span></a>
						<ul>
						<li>
						<a href="blog-style-1.html">Blog style 1 with small images</a>
						</li>
						<li>
						<a href="blog-style-2.html">Blog style 2 with big images</a>
						</li>
						<li>
						<a href="post-style-1.html"><span>Single post test blog entry</span></a>
						<ul>
						<li>
						<a href="post-style-1.html">Single post with small image</a>
						</li>
						<li>
						<a href="post-style-2.html">Single post with big image</a>
						</li>
						</ul>
						</li>
						</ul>
						</li>
						-->
						<!--
						<li>
						<a href="#"><span>Shortcodes</span></a>
						<ul>
						<li>
						<a href="shortcodes-buttons.html">Buttons</a>
						</li>
						<li>
						<a href="shortcodes-layouts.html">Layouts</a>
						</li>
						<li>
						<a href="shortcodes-spacers.html">Spacers</a>
						</li>
						<li>
						<a href="shortcodes-lists.html">Lists</a>
						</li>
						<li>
						<a href="shortcodes-quotes.html">Quotes</a>
						</li>
						<li>
						<a href="shortcodes-contact-form.html">Contact form</a>
						</li>
						</ul>
						</li>
						-->
						<li>
							<a href="<?=$this -> baseUrl(); ?>/index-news">News</a>
						</li>
						<li>
							<a href="<?=$this -> baseUrl(); ?>/index-album">Photo album</a>
							<!--<ul>
							<li>
							<a href="#">Index Album</a>
							</li>
							<li>
							<a href="photo-gallery-list.html">Opened gallery image list</a>
							</li>
							<li>
							<a href="photo-gallery-single.html">Single image</a>
							</li>
							</ul>-->
						</li>
						<!--<li>
						<a href="archive.html">Archive</a>
						</li>
						-->
					</ul>
					<!-- END .main-menu-wrapper -->
				</div>
				<!-- BEGIN .breaking-wrapper -->
				<div class="breaking-wrapper">
					<p>
						<!--Breaking:-->
					</p>
					<div class="horizontal-scroller">
						<div id="scrollingtext">
							<!--<img src="<?=Yii::app() -> request -> baseUrl;?>/assets/src/images/ico-list-bullet-1.png" alt="" width="7" height="6" /><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing rnare laoreet vehicula</a>
							<img src="<?=Yii::app() -> request -> baseUrl;?>/assets/src/images/ico-list-bullet-1.png" alt="" width="7" height="6" /><a href="#">Praesent ultricies porta condimentum suspendisse potenti</a>
							<img src="<?=Yii::app() -> request -> baseUrl;?>/assets/src/images/ico-list-bullet-1.png" alt="" width="7" height="6" /><a href="#">Vivamus fermentum nisl a sapien luctus et venenatis urna hendrerit</a>
							-->
						</div>
					</div>
					<!-- END .breaking-wrapper -->
				</div>
				<?=$content; ?>

				<!-- BEGIN .main-footer -->
				<div class="main-footer">
					<div class="about">
						<h2>About Kernel Wordpress theme</h2>
						<div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu nisi ante, dapibus adipiscing magna. Cras a leo a magna. Phasellus enim libero, blandit ac tempor
							</p>
							<p>
								Nulla hendrerit nunc sit amet nunc rutrum sed cursus sapien condimentum.
							</p>
							<p>
								<a href="#" class="purchase">Purchase KERNEL at ThemeForest</a>
							</p>
						</div>
					</div>
					<div class="categories">
						<h2>Categories</h2>
						<ul>
							<li>
								<a href="#">Technology</a>
							</li>
							<li>
								<a href="#">Fashion &amp; Design</a>
							</li>
							<li>
								<a href="#">Movies</a>
							</li>
							<li>
								<a href="#">Music</a>
							</li>
							<li>
								<a href="#">Games &amp; Entertainment</a>
							</li>
							<li>
								<a href="#">Cars, Bikes &amp; Bicycles</a>
							</li>
							<li>
								<a href="#">Uncategorized</a>
							</li>
						</ul>
					</div>
					<div class="social">
						<h2>Social networks</h2>
						<ul>
							<li>
								<a href="#" class="twitter">Follow us on Twitter</a>
							</li>
							<li>
								<a href="#" class="facebook">Friend us on Facebook</a>
							</li>
							<!--
							<li>
							<a href="#" class="digg">Dig us at Digg</a>
							</li>
							-->
							<li>
								<a href="#" class="youtube">Watch our YouTube channel</a>
							</li>
							<!--
							<li>
							<a href="#" class="flickr">Check our photos at Flickr</a>
							</li>
							-->
							<!--
							<li>
							<a href="#" class="rss">RSS feeds</a>
							</li>-->
						</ul>
					</div>
					<div class="copyright">
						<div class="back-to-top">
							<a href="#top"><span>go back to the top</span></a>
						</div>
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