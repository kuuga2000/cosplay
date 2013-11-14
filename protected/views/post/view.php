<div class="breaking-wrapper">
					
					<div class="horizontal-scroller">
						 
					</div>
				<!-- END .breaking-wrapper -->
				</div>
<!--<div class="main-menu-wrapper"></div>-->
<!-- BEGIN .main-column-wrapper -->
<div class="main-column-wrapper">
	<!-- BEGIN .main-column-left -->
	<div class="main-column-left">
		<!-- BEGIN .post -->
		<div class="post post-style-2">
			<h2 class="article-title"><a href="#"><?=$model -> post_title;?></a></h2>
			<div class="info">
				<span class="date"><?=$model -> post_date;?></span>
				<span class="author">by John Smith</span>
				<!--<span class="section">Section</span>-->
				<!--<a href="#" class="comments">0 comments</a>-->
			</div>
			<a href="#"> <img src="<?=Yii::app() -> request -> baseUrl;?>/assets/thumb/thumb.php?w=567&h=0&zc=1&src=../../images/<?=$model->post_image;?>" alt="" width="567" height="" class="image" /><!--h180--> <!--<img src="images/photos/no-image-567x180.jpg" alt="" width="567" height="180" class="image" />--> </a>
			<?=nl2br($model -> post_content);?>
			<br><br>
			<div class="gallery-preview-box-wrapper">
				<div class="gallery-preview-box">
					<!--facebook-->
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
					<div class="fb-like" data-href="<?=Yii::app()->request->baseUrl;?>" data-width="450" data-show-faces="false" data-send="false"></div>
					<!--facebook-->
					<p>
						<b>Lorem ipsum dolor sit amet, consectetur adipiscing elit</b>
					</p>
					<a href="#"><img src="images/photos/no-image-80x80.jpg" alt="" width="80" height="80" /></a>
					<a href="#"><img src="images/photos/no-image-80x80.jpg" alt="" width="80" height="80" /></a>
					<a href="#"><img src="images/photos/no-image-80x80.jpg" alt="" width="80" height="80" /></a>
					<a href="#"><img src="images/photos/no-image-80x80.jpg" alt="" width="80" height="80" /></a>
					<a href="#" class="show-all-photos">show
					<br />
					all
					<br />
					photos</a>
				</div>
			</div>
			<!-- END .post -->
		</div>
		<!-- BEGIN .comments -->
		<div class="comments">
			<div class="post-title">
				<b>Comments</b>
			</div>
			<div class="no-comments">
				<p>
					<span>comments</span>
				</p>
				<p>
					Be first to leave your comment!
				</p>
			</div>
			<!-- BEGIN .add-comment -->
			<!--facebook-->
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
			<div class="fb-comments" data-href="<?=Yii::app() -> request -> baseUrl;?>/read/<?=$model -> id;?>/<?=str_replace(' ', '-', $model -> post_title);?>.html" data-width="580"></div><!--w470-->
			<!--facebook-->
			<!-- END .comments -->
		</div>
		<!-- END .main-column-left -->
	</div>
	<!-- BEGIN .sidebar -->
	<div class="sidebar">
		<!-- BEGIN .sidebar-item .latest-news -->
		<div class="sidebar-item">
			<div class="latest-news">
				<div class="sidebar-title">
					<b>Latest news</b>
				</div>
				<!-- BEGIN .list -->
				<div class="list">
					<!-- BEGIN .item -->
					<div class="item">
						<div class="image">
							<a href="#"><img src="images/photos/no-image-70x70.jpg" alt="" width="60" height="60" /></a>
						</div>
						<div class="text">
							<h5><a href="#">Maecenas pretium facilisis lectus sed</a></h5>
							<p>
								<a href="#" class="more-link"><span>Read more</span></a>
							</p>
						</div>
						<!-- END .item -->
					</div>
					<!-- BEGIN .item -->
					<div class="item">
						<div class="image">
							<a href="#"><img src="images/photos/no-image-70x70.jpg" alt="" width="60" height="60" /></a>
						</div>
						<div class="text">
							<h5><a href="#">Pellentesque aliquet orcid ornare quamsit</a></h5>
							<p>
								<a href="#" class="more-link"><span>Read more</span></a>
							</p>
						</div>
						<!-- END .item -->
					</div>
					<!-- BEGIN .item -->
					<div class="item">
						<div class="image">
							<a href="#"><img src="images/photos/no-image-70x70.jpg" alt="" width="60" height="60" /></a>
						</div>
						<div class="text">
							<h5><a href="#">Pellentesque aliquet orcid ornare quamsit</a></h5>
							<p>
								<a href="#" class="more-link"><span>Read more</span></a>
							</p>
						</div>
						<!-- END .item -->
					</div>
					<!-- END .list -->
				</div>
				<p class="show-all">
					<a href="#" class="btn-1 btn-1-color-default"><span>Show all latest news</span></a>
				</p>
			</div>
			<!-- END .sidebar-item .latest-news -->
		</div>
		<!-- BEGIN .sidebar-item .latest-activity -->
		<!--<div class="sidebar-item">-->
			<!--<div class="latest-activity">-->
				<!--<div class="sidebar-title">
					<b><!----</b>
				</div>-->
				<!-- BEGIN .tabs-1 -->
				<!--<div class="tabs-1">-->
					<!--<table>
						<tr>
							<td><a href="#" class="tab-1 active"><span>Popular</span></a></td>
							<td><a href="#" class="tab-1"><span>Recent</span></a></td>
							<td><a href="#" class="tab-1"><span>Comments</span></a></td>
						</tr>
					</table>-->
					<!-- END .tabs-1 -->
				<!--</div>-->
				<!-- BEGIN .list -->
				<!--<div class="list">-->
					<!-- BEGIN .item -->
					<!--<div class="item">
						<div class="image">
							<a href="#"><img src="images/photos/no-image-70x70.jpg" alt="" width="60" height="60" /></a>
						</div>
						<div class="text">
							<h5><a href="#">Vestibulum ante ipsum primis in faucibus orci</a></h5>
							<p>
								<a href="#" class="more-link"><span>Read more</span></a>
							</p>
						</div>-->
						<!-- END .item -->
					<!--</div>-->
					<!-- BEGIN .item -->
					<!--<div class="item">
						<div class="image">
							<a href="#"><img src="images/photos/no-image-70x70.jpg" alt="" width="60" height="60" /></a>
						</div>
						<div class="text">
							<h5><a href="#">Aenean iaculis, risus eget sollicitudin pretiumligula</a></h5>
							<p>
								<a href="#" class="more-link"><span>Read more</span></a>
							</p>
						</div>
						<!-- END .item --
					</div>-->
					<!-- BEGIN .item -->
					<!--
					<div class="item">
						<div class="image">
							<a href="#"><img src="images/photos/no-image-70x70.jpg" alt="" width="60" height="60" /></a>
						</div>
						<div class="text">
							<h5><a href="#">Pellentesque aliquet orcid ornare quamsit amet</a></h5>
							<p>
								<a href="#" class="more-link"><span>Read more</span></a>
							</p>
						</div>
						<!-- END .item --
					</div>-->
					<!-- END .list -->
				<!--</div>-->
			<!--</div>-->
			<!-- END .sidebar-item .latest-activity -->
		<!--</div>-->
		<!-- BEGIN .sidebar-item .latest-articles -->
		<!--
		<div class="sidebar-item last">
			<div class="latest-articles">
				<div class="sidebar-title">
					<b>Latest news</b>
				</div>
				 
				<div class="list">
					 
					<div class="item">
						<div class="text">
							<h5><a href="#">Aliquam in condimentum augue</a></h5>
							<div class="info">
								<span class="date">10 / 01 / 2011 / <a href="#">3 comments</a></span>
							</div>
							<p>
								Cras vulputate dui at felis varius et consecte tur risus viverra. Vivamus commodo gravida malesuada.consequat dui.
							</p>
							<p>
								<a href="#" class="more-link"><span>Read more</span></a>
							</p>
						</div>
						 
					</div>
				 
					<div class="item">
						<div class="text">
							<h5><a href="#">Mauris tristique, orci eu elemenaccu msanarcuarcu porttitor</a></h5>
							<div class="info">
								<span class="date">10 / 01 / 2011 / <a href="#">20 comments</a></span>
							</div>
							<p>
								Morbi eget massa tortor, id porta dui. Nam id iaculis eros. Nunc nibh sem, interdum vitae vestibulum in, scelerisque sed nisl incidunt.
							</p>
							<p>
								<a href="#" class="more-link"><span>Read more</span></a>
							</p>
						</div>
						 
					</div>
					 
					<div class="item">
						<div class="text">
							<h5><a href="#">Suspendisse ligula mauris, cursus ut convallis atdapibus nec ante</a></h5>
							<div class="info">
								<span class="date">10 / 01 / 2011 / <a href="#">3 comments</a></span>
							</div>
							<p>
								Morbi luctus dui euismod mauris consequat hendrerit. Curabitur orci tortor, ultrices quis scelerisque sit amet, laoreet eget purus.
							</p>
							<p>
								<a href="#" class="more-link"><span>Read more</span></a>
							</p>
						</div>
						 
					</div>
					 
				</div>
				<p class="show-all">
					<a href="#" class="btn-1 btn-1-color-default"><span>Show all latest news</span></a>
				</p>
			</div>
			 
		</div>-->
		<!-- END .sidebar -->
	</div>
	<div class="clear">
		&nbsp;
	</div>
	<!-- END .main-column-wrapper -->
</div>