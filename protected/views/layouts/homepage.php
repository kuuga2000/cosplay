<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- BEGIN html -->
<html xmlns="http://www.w3.org/1999/xhtml">
	<!-- BEGIN head -->
	<head>
		<!-- Title -->
		<title>Lorem ipsum &amp; dolor</title>
		<!-- Meta Tags -->
		<style>
			div.item p img {
				padding: 12px;
				margin: 2px 20px 0px 0px;
				border: 1px solid rgb(204, 204, 204);
				float: left;
				 
				/*width: 160px;*/
				height: 120px;
			}
			.blog-style-1 .item img {
				padding: 12px;
				margin: 2px 20px 0px 0px;
				border: 1px solid rgb(204, 204, 204);
				float: left;
				 
				width: 120px;
				
			}
			.layout-2 .item{
				overflow: hidden;
			}
			.layout-2 .item img {
				padding: 12px;
				margin: 2px 20px 0px 0px;
				border: 1px solid rgb(204, 204, 204);
				float: left;
				
				 
				 
				max-width: 151px;
				
				 
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
				 
				<!-- BEGIN .main-menu-wrapper -->
				<div class="main-menu-wrapper" style="background: none;">
					<span class="corner-left">&nbsp;</span><br>
					
					<ul>
						<li>
							<a href="<?=Yii::app() -> request -> baseUrl; ?>">Home</a>
						</li>
						
						<li>
							<a href="<?=$this -> baseUrl(); ?>/index-news">News</a>
						</li>
						<li>
							<a href="<?=$this -> baseUrl(); ?>/index-album">Photo album</a>
						</li>
					</ul>
					<!-- END .main-menu-wrapper -->
				</div>
				
				<!-- BEGIN .breaking-wrapper -->
				 
				<?=$content; ?>

				<!-- BEGIN .main-footer -->
				<div class="main-footer">
					<!--<div class="about">
						<h2></h2>
						<div>
							<p>
								
							</p>
							<p>
								 
							</p>
							<p>
								 
							</p>
						</div>
					</div>-->
					<!--
					<div class="categories">
						<h2>Menu</h2>
						<ul>
							<li>
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">News &amp; Design</a>
							</li>
							<li>
								<a href="#">Photo Album</a>
							</li>
							 
						</ul>
					</div>-->
					<!--
					<div class="social">
						<h2>Social networks</h2>
						<ul>
							<li>
								<a href="#" class="twitter">Follow us on Twitter</a>
							</li>
							<li>
								<a href="#" class="facebook">Friend us on Facebook</a>
							</li>
							 
							<li>
								<a href="#" class="youtube">Watch our YouTube channel</a>
							</li>
						</ul>
					</div>-->
					<div class="copyright">
						<div class="back-to-top">
							<a href="#top"><span>go back to the top</span></a>
						</div>
						Copyright © 2011 power by <b>kuuga.com</b>
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