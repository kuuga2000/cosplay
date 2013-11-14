<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>IN ADMIN PANEL | Powered by INDEZINER</title>
		<link rel="stylesheet" type="text/css" href="<?=$this -> baseUrl(); ?>/assets/admin-panel/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
		<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
		<!--ckeditor-->
		<script type="text/javascript" src="<?=$this->baseUrl();?>/img01/js/ckeditor/ckeditor.js"></script>
		<script src="<?=$this->baseUrl();?>/img01/sample.js" type="text/javascript"></script>
		<link href="<?=$this->baseUrl();?>/img01/sample.css" rel="stylesheet" type="text/css" /> 
		<!--end ckeditor-->
		<!--<script type="text/javascript" src="<?=$this->baseUrl();?>/assets/admin-panel/jquery.min.js"></script>-->
		<script type="text/javascript" src="<?=$this->baseUrl();?>/assets/admin-panel/ddaccordion.js"></script>
		<script type="text/javascript">
		ddaccordion.init({
		headerclass: "submenuheader", //Shared CSS class name of headers group
		contentclass: "submenu", //Shared CSS class name of contents group
		revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
		mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
		collapseprev: true, //Collapse previous content (so only one open at any time)? true/false
		defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
		onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
		animatedefault: false, //Should contents open by default be animated into view?
		persiststate: true, //persist state of opened contents within browser session?
		toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
		togglehtml: ["suffix", "<img src='<?=$this->baseUrl();?>/assets/admin-panel/images/plus.gif' class='statusicon' />", "<img src='<?=$this->baseUrl();?>/assets/admin-panel/images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
		animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
		oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
		},
		onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
		}
		})
		</script>
		<script src="<?=$this->baseUrl();?>/assets/admin-panel/jquery.jclock-1.2.0.js.txt" type="text/javascript"></script>
		<script type="text/javascript" src="<?=$this->baseUrl();?>/assets/admin-panel/jconfirmaction.jquery.js"></script>
		<script type="text/javascript">

		$(document).ready(function() {
		$('.ask').jConfirmAction();
		});

		</script>
		<script type="text/javascript">
		$(function($) {
		$('.jclock').jclock();
		});
		</script>

		<script language="javascript" type="text/javascript" src="<?=$this->baseUrl();?>/assets/admin-panel/niceforms.js"></script>
		<link rel="stylesheet" type="text/css" media="all" href="<?=$this->baseUrl();?>/assets/admin-panel/niceforms-default.css" />
		 
	</head>
	<body>
		<div id="main_container">

			<div class="header">
				<div class="logo">
					<a href="#"><img src="<?=$this -> baseUrl(); ?>/assets/admin-panel/images/logo.gif" alt="" title="" border="0" /></a>
				</div>

				<div class="right_header">
					Welcome Admin, <a href="#">Visit site</a> | <a href="#" class="messages">(3) Messages</a> | <a href="#" class="logout">Logout</a>
				</div>
				<div class="jclock"></div>
			</div>

			<div class="main_content">

				<div class="menu">
					&nbsp;
				</div>

				<div class="center_content">

					<div class="left_content">

						<div class="sidebar_search">
							<form>
								<input type="text" name="" class="search_input" value="search keyword" onclick="this.value=''" />
								<input type="image" class="search_submit" src="<?=$this -> baseUrl(); ?>/assets/admin-panel/images/search.png" />
							</form>
						</div>

						<div class="sidebarmenu">

							<a class="menuitem submenuheader" href="">Manage Content</a>
							<div class="submenu">
								<ul>
									<li>
										<a href="<?=$this->createUrl('post/admin');?>">Post</a>
									</li>
									<li>
										<a href="<?=$this->createUrl('newsrss/admin');?>">News RSS</a>
									</li>
									<li>
										<a href="">Category</a>
									</li>
									<li>
										<a href="">Image</a>
									</li>
									<li>
										<a href="">Album</a>
									</li>
								</ul>
							</div>

							<a class="menuitem" href="">User Reference</a>
							<a class="menuitem" href="">Blue button</a>

							<a class="menuitem_green" href="">Green button</a>

							<a class="menuitem_red" href="">Red button</a>

						</div>

					</div>

					<div class="right_content">

						<!--product-->
						<?=$content; ?>
						<!--end product-->

						<!--
						<div class="pagination">
						<span class="disabled"><< prev</span><span class="current">1</span><a href="">2</a><a href="">3</a><a href="">4</a><a href="">5</a>…<a href="">10</a><a href="">11</a><a href="">12</a>...<a href="">100</a><a href="">101</a><a href="">next >></a>
						</div>-->

					</div><!-- end of right content-->

				</div>
				<!--end of center content -->

				<div class="clear"></div>
			</div>
			<!--end of main content-->

			<div class="footer">

				<div class="left_footer">
					IN ADMIN PANEL | Powered by <a href="http://indeziner.com">INDEZINER</a>
				</div>
				<div class="right_footer">
					<a href="http://indeziner.com"><img src="<?=$this -> baseUrl(); ?>/assets/admin-panel/images/indeziner_logo.gif" alt="" title="" border="0" /></a>
				</div>

			</div>

		</div>
	</body>
</html>