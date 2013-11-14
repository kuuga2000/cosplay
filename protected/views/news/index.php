<div class="breaking-wrapper">
					
					<div class="horizontal-scroller">
						 
					</div>
				<!-- END .breaking-wrapper -->
				</div>
<div class="main-column-wrapper">


					<!-- BEGIN .main-column-left -->
					<div class="main-column-left">

						 

						<!-- BEGIN .blog-style-1 -->
						<div class="blog-style-1">
							
							 

							 

							
							 
<?php foreach($dataProvider as $data):?>
<!-- BEGIN .item -->
							<div class="item">
								<h2><a href="<?=$this -> baseUrl(); ?>/news/<?=$data['id']; ?>/<?=$this -> addStrip($data['news_title']); ?>.html"><?=$data['news_title']; ?></a></h2>
	
								<div class="info">
									<span class="date"><?=$data['news_postdate']; ?></span>
									 
								</div>
								 <a href="<?=$this -> baseUrl(); ?>/news/<?=$data['id']; ?>/<?=$this -> addStrip($data['news_title']); ?>.html">
								 	<img src="<?=empty($data['news_image']) ? 'images/no-image-130x130.jpg' : $data['news_image']; ?>" alt="" class="image"><!--height="150" width="210"--></a>	
								<p><?=strip_tags(substr($data['news_content'], 0, 700), '<p>'); ?></p>
								<!--<p>
									<iframe width="420" height="315" src="//www.youtube.com/embed/<?=$data['news_video'];?>" frameborder="0" allowfullscreen></iframe>
								</p>-->
								<p class="last"><a href="<?=$this -> baseUrl(); ?>/news/<?=$data['id']; ?>/<?=$this -> addStrip($data['news_title']); ?>.html" class="more-link"><span>Read more</span></a></p>
							<!-- END .item -->
							</div>
							
							<!-- BEGIN .item -->
							<!--<div class="item">
								<h2><a href=""><?=$data['news_title'];?></a></h2>
								<div class="info">
									<span class="date"><?=$data['news_postdate'];?></span>
									
								</div>
								 <a href="#"><img src="images/photos/no-image-210x150.jpg" alt="" class="image" height="150" width="210"></a>
								<p><?=substr($data['news_content'],0,500);?></p>
								<p class="last"><a href="#" class="more-link"><span>Read more</span></a></p>
							<!-- END .item -->
							<!--</div>-->
							<?php endforeach; ?>
							 

							

							<div class="pages">
								<div>
									<a href="#"><cufon style="width: 12px; height: 20px;" alt="1" class="cufon cufon-canvas"><canvas style="width: 28px; height: 24px; top: -5px; left: -4px;" height="24" width="28"></canvas><cufontext>1</cufontext></cufon></a>
									<a href="#" class="active"><cufon style="width: 12px; height: 20px;" alt="2" class="cufon cufon-canvas"><canvas style="width: 28px; height: 24px; top: -5px; left: -4px;" height="24" width="28"></canvas><cufontext>2</cufontext></cufon></a>
									<a href="#"><cufon style="width: 12px; height: 20px;" alt="3" class="cufon cufon-canvas"><canvas style="width: 28px; height: 24px; top: -5px; left: -4px;" height="24" width="28"></canvas><cufontext>3</cufontext></cufon></a>
									<a href="#"><cufon style="width: 12px; height: 20px;" alt="4" class="cufon cufon-canvas"><canvas style="width: 28px; height: 24px; top: -5px; left: -4px;" height="24" width="28"></canvas><cufontext>4</cufontext></cufon></a>
									<a href="#"><cufon style="width: 12px; height: 20px;" alt="5" class="cufon cufon-canvas"><canvas style="width: 28px; height: 24px; top: -5px; left: -4px;" height="24" width="28"></canvas><cufontext>5</cufontext></cufon></a>
									<a href="#"><cufon style="width: 12px; height: 20px;" alt="6" class="cufon cufon-canvas"><canvas style="width: 28px; height: 24px; top: -5px; left: -4px;" height="24" width="28"></canvas><cufontext>6</cufontext></cufon></a>
									<a href="#"><cufon style="width: 12px; height: 20px;" alt="7" class="cufon cufon-canvas"><canvas style="width: 28px; height: 24px; top: -5px; left: -4px;" height="24" width="28"></canvas><cufontext>7</cufontext></cufon></a>
								</div>
								<a href="#" class="next"><cufon style="width: 41px; height: 20px;" alt="Next" class="cufon cufon-canvas"><canvas style="width: 61px; height: 24px; top: -5px; left: -4px;" height="24" width="61"></canvas><cufontext>Next</cufontext></cufon></a>
								<a href="#" class="previous"><cufon style="width: 73px; height: 20px;" alt="Previous" class="cufon cufon-canvas"><canvas style="width: 91px; height: 24px; top: -5px; left: -4px;" height="24" width="91"></canvas><cufontext>Previous</cufontext></cufon></a>
							</div>

						<!-- END .blog-style-1 -->
						</div>

					<!-- END .main-column-left -->
					</div>


					<!-- BEGIN .sidebar -->
					<div class="sidebar">

						<!-- BEGIN .sidebar-item .latest-news -->
						<div class="sidebar-item">
							<div class="latest-news">
								<div class="sidebar-title">
									<b><cufon style="width: 57px; height: 16px;" alt="Latest " class="cufon cufon-canvas"><canvas style="width: 78px; height: 19px; top: -4px; left: -2px;" height="19" width="78"></canvas><cufontext>Latest </cufontext></cufon><cufon style="width: 43px; height: 16px;" alt="news" class="cufon cufon-canvas"><canvas style="width: 58px; height: 19px; top: -4px; left: -2px;" height="19" width="58"></canvas><cufontext>news</cufontext></cufon></b>
								</div>
								<!-- BEGIN .list -->
								<div class="list">
									<!-- BEGIN .item -->
									<div class="item">
										<div class="image">
											<a href="#"><img src="images/photos/no-image-70x70.jpg" alt="" height="60" width="60"></a>
										</div>
										<div class="text">
											<h5><a href="#"><cufon style="width: 67px; height: 14px;" alt="Maecenas " class="cufon cufon-canvas"><canvas style="width: 85px; height: 17px; top: -4px; left: -2px;" height="17" width="85"></canvas><cufontext>Maecenas </cufontext></cufon><cufon style="width: 54px; height: 14px;" alt="pretium " class="cufon cufon-canvas"><canvas style="width: 72px; height: 17px; top: -4px; left: -2px;" height="17" width="72"></canvas><cufontext>pretium </cufontext></cufon><cufon style="width: 53px; height: 14px;" alt="facilisis " class="cufon cufon-canvas"><canvas style="width: 72px; height: 17px; top: -4px; left: -2px;" height="17" width="72"></canvas><cufontext>facilisis </cufontext></cufon><cufon style="width: 43px; height: 14px;" alt="lectus " class="cufon cufon-canvas"><canvas style="width: 61px; height: 17px; top: -4px; left: -2px;" height="17" width="61"></canvas><cufontext>lectus </cufontext></cufon><cufon style="width: 23px; height: 14px;" alt="sed" class="cufon cufon-canvas"><canvas style="width: 37px; height: 17px; top: -4px; left: -2px;" height="17" width="37"></canvas><cufontext>sed</cufontext></cufon></a></h5>
											<p><a href="#" class="more-link"><span>Read more</span></a></p>
										</div>
									<!-- END .item -->
									</div>
									<!-- BEGIN .item -->
									<div class="item">
										<div class="image">
											<a href="#"><img src="images/photos/no-image-70x70.jpg" alt="" height="60" width="60"></a>
										</div>
										<div class="text">
											<h5><a href="#"><cufon style="width: 86px; height: 14px;" alt="Pellentesque " class="cufon cufon-canvas"><canvas style="width: 104px; height: 17px; top: -4px; left: -2px;" height="17" width="104"></canvas><cufontext>Pellentesque </cufontext></cufon><cufon style="width: 48px; height: 14px;" alt="aliquet " class="cufon cufon-canvas"><canvas style="width: 66px; height: 17px; top: -4px; left: -2px;" height="17" width="66"></canvas><cufontext>aliquet </cufontext></cufon><cufon style="width: 36px; height: 14px;" alt="orcid " class="cufon cufon-canvas"><canvas style="width: 54px; height: 17px; top: -4px; left: -2px;" height="17" width="54"></canvas><cufontext>orcid </cufontext></cufon><cufon style="width: 46px; height: 14px;" alt="ornare " class="cufon cufon-canvas"><canvas style="width: 64px; height: 17px; top: -4px; left: -2px;" height="17" width="64"></canvas><cufontext>ornare </cufontext></cufon><cufon style="width: 52px; height: 14px;" alt="quamsit" class="cufon cufon-canvas"><canvas style="width: 67px; height: 17px; top: -4px; left: -2px;" height="17" width="67"></canvas><cufontext>quamsit</cufontext></cufon></a></h5>
											<p><a href="#" class="more-link"><span>Read more</span></a></p>
										</div>
									<!-- END .item -->
									</div>
									<!-- BEGIN .item -->
									<div class="item">
										<div class="image">
											<a href="#"><img src="images/photos/no-image-70x70.jpg" alt="" height="60" width="60"></a>
										</div>
										<div class="text">
											<h5><a href="#"><cufon style="width: 86px; height: 14px;" alt="Pellentesque " class="cufon cufon-canvas"><canvas style="width: 104px; height: 17px; top: -4px; left: -2px;" height="17" width="104"></canvas><cufontext>Pellentesque </cufontext></cufon><cufon style="width: 48px; height: 14px;" alt="aliquet " class="cufon cufon-canvas"><canvas style="width: 66px; height: 17px; top: -4px; left: -2px;" height="17" width="66"></canvas><cufontext>aliquet </cufontext></cufon><cufon style="width: 36px; height: 14px;" alt="orcid " class="cufon cufon-canvas"><canvas style="width: 54px; height: 17px; top: -4px; left: -2px;" height="17" width="54"></canvas><cufontext>orcid </cufontext></cufon><cufon style="width: 46px; height: 14px;" alt="ornare " class="cufon cufon-canvas"><canvas style="width: 64px; height: 17px; top: -4px; left: -2px;" height="17" width="64"></canvas><cufontext>ornare </cufontext></cufon><cufon style="width: 52px; height: 14px;" alt="quamsit" class="cufon cufon-canvas"><canvas style="width: 67px; height: 17px; top: -4px; left: -2px;" height="17" width="67"></canvas><cufontext>quamsit</cufontext></cufon></a></h5>
											<p><a href="#" class="more-link"><span>Read more</span></a></p>
										</div>
									<!-- END .item -->
									</div>
								<!-- END .list -->
								</div>
								<p class="show-all"><a href="#" class="btn-1 btn-1-color-default"><span><cufon style="width: 38px; height: 12px;" alt="Show " class="cufon cufon-canvas"><canvas style="width: 54px; height: 15px; top: -3px; left: -2px;" height="15" width="54"></canvas><cufontext>Show </cufontext></cufon><cufon style="width: 23px; height: 12px;" alt="all " class="cufon cufon-canvas"><canvas style="width: 39px; height: 15px; top: -3px; left: -2px;" height="15" width="39"></canvas><cufontext>all </cufontext></cufon><cufon style="width: 45px; height: 12px;" alt="latest " class="cufon cufon-canvas"><canvas style="width: 61px; height: 15px; top: -3px; left: -2px;" height="15" width="61"></canvas><cufontext>latest </cufontext></cufon><cufon style="width: 34px; height: 12px;" alt="news" class="cufon cufon-canvas"><canvas style="width: 45px; height: 15px; top: -3px; left: -2px;" height="15" width="45"></canvas><cufontext>news</cufontext></cufon></span></a></p>
							</div>
						<!-- END .sidebar-item .latest-news -->
						</div>

						<!-- BEGIN .sidebar-item .latest-activity -->
						<div class="sidebar-item">
							<div class="latest-activity">
								<div class="sidebar-title">
									<b><cufon style="width: 57px; height: 16px;" alt="Latest " class="cufon cufon-canvas"><canvas style="width: 78px; height: 19px; top: -4px; left: -2px;" height="19" width="78"></canvas><cufontext>Latest </cufontext></cufon><cufon style="width: 68px; height: 16px;" alt="activity" class="cufon cufon-canvas"><canvas style="width: 82px; height: 19px; top: -4px; left: -2px;" height="19" width="82"></canvas><cufontext>activity</cufontext></cufon></b>
								</div>
									<!-- BEGIN .tabs-1 -->
									<div class="tabs-1">
										<table>
											<tbody><tr>
												<td><a href="#" class="tab-1 kernel_triple_btn active" id="kernel_triple_popular_btn_kernel_3"><span><cufon style="width: 51px; height: 11px;" alt="Popular" class="cufon cufon-canvas"><canvas style="width: 61px; height: 14px; top: -3px; left: -2px;" height="14" width="61"></canvas><cufontext>Popular</cufontext></cufon></span></a></td>
												<td><a href="#" class="tab-1 tab-1-disabled kernel_triple_btn" id="kernel_triple_recent_btn_kernel_3"><span><cufon style="width: 42px; height: 11px;" alt="Recent" class="cufon cufon-canvas"><canvas style="width: 52px; height: 14px; top: -3px; left: -2px;" height="14" width="52"></canvas><cufontext>Recent</cufontext></cufon></span></a></td>
												<td><a href="#" class="tab-1 tab-1-disabled kernel_triple_btn" id="kernel_triple_comments_btn_kernel_3"><span><cufon style="width: 62px; height: 11px;" alt="Comments" class="cufon cufon-canvas"><canvas style="width: 73px; height: 14px; top: -3px; left: -2px;" height="14" width="73"></canvas><cufontext>Comments</cufontext></cufon></span></a></td>
											</tr>
										</tbody></table>
									<!-- END .tabs-1 -->
									</div>
									
								<div id="kernel_triple_popular_kernel_3">
									<!-- BEGIN .list -->
									<div class="list">
										<!-- BEGIN .item -->
										<div class="item">
											<div class="image">
												<a href="#"><img src="images/photos/no-image-70x70.jpg" alt="" height="60" width="60"></a>
											</div>
											<div class="text">
												<h5><a href="#"><cufon style="width: 76px; height: 14px;" alt="Vestibulum " class="cufon cufon-canvas"><canvas style="width: 94px; height: 17px; top: -4px; left: -2px;" height="17" width="94"></canvas><cufontext>Vestibulum </cufontext></cufon><cufon style="width: 33px; height: 14px;" alt="ante " class="cufon cufon-canvas"><canvas style="width: 51px; height: 17px; top: -4px; left: -2px;" height="17" width="51"></canvas><cufontext>ante </cufontext></cufon><cufon style="width: 42px; height: 14px;" alt="ipsum " class="cufon cufon-canvas"><canvas style="width: 60px; height: 17px; top: -4px; left: -2px;" height="17" width="60"></canvas><cufontext>ipsum </cufontext></cufon><cufon style="width: 43px; height: 14px;" alt="primis " class="cufon cufon-canvas"><canvas style="width: 62px; height: 17px; top: -4px; left: -2px;" height="17" width="62"></canvas><cufontext>primis </cufontext></cufon><cufon style="width: 16px; height: 14px;" alt="in " class="cufon cufon-canvas"><canvas style="width: 34px; height: 17px; top: -4px; left: -2px;" height="17" width="34"></canvas><cufontext>in </cufontext></cufon><cufon style="width: 58px; height: 14px;" alt="faucibus " class="cufon cufon-canvas"><canvas style="width: 77px; height: 17px; top: -4px; left: -2px;" height="17" width="77"></canvas><cufontext>faucibus </cufontext></cufon><cufon style="width: 25px; height: 14px;" alt="orci" class="cufon cufon-canvas"><canvas style="width: 43px; height: 17px; top: -4px; left: -2px;" height="17" width="43"></canvas><cufontext>orci</cufontext></cufon></a></h5>
												<p><a href="#" class="more-link"><span>Read more</span></a></p>
											</div>
										<!-- END .item -->
										</div>
										<!-- BEGIN .item -->
										<div class="item">
											<div class="image">
												<a href="#"><img src="images/photos/no-image-70x70.jpg" alt="" height="60" width="60"></a>
											</div>
											<div class="text">
												<h5><a href="#"><cufon style="width: 51px; height: 14px;" alt="Aenean " class="cufon cufon-canvas"><canvas style="width: 69px; height: 17px; top: -4px; left: -2px;" height="17" width="69"></canvas><cufontext>Aenean </cufontext></cufon><cufon style="width: 49px; height: 14px;" alt="iaculis, " class="cufon cufon-canvas"><canvas style="width: 67px; height: 17px; top: -4px; left: -2px;" height="17" width="67"></canvas><cufontext>iaculis, </cufontext></cufon><cufon style="width: 36px; height: 14px;" alt="risus " class="cufon cufon-canvas"><canvas style="width: 54px; height: 17px; top: -4px; left: -2px;" height="17" width="54"></canvas><cufontext>risus </cufontext></cufon><cufon style="width: 32px; height: 14px;" alt="eget " class="cufon cufon-canvas"><canvas style="width: 50px; height: 17px; top: -4px; left: -2px;" height="17" width="50"></canvas><cufontext>eget </cufontext></cufon><cufon style="width: 72px; height: 14px;" alt="sollicitudin" class="cufon cufon-canvas"><canvas style="width: 85px; height: 17px; top: -4px; left: -2px;" height="17" width="85"></canvas><cufontext>sollicitudin</cufontext></cufon></a></h5>
												<p><a href="#" class="more-link"><span>Read more</span></a></p>
											</div>
										<!-- END .item -->
										</div>
										<!-- BEGIN .item -->
										<div class="item">
											<div class="image">
												<a href="#"><img src="images/photos/no-image-70x70.jpg" alt="" height="60" width="60"></a>
											</div>
											<div class="text">
												<h5><a href="#"><cufon style="width: 86px; height: 14px;" alt="Pellentesque " class="cufon cufon-canvas"><canvas style="width: 104px; height: 17px; top: -4px; left: -2px;" height="17" width="104"></canvas><cufontext>Pellentesque </cufontext></cufon><cufon style="width: 48px; height: 14px;" alt="aliquet " class="cufon cufon-canvas"><canvas style="width: 66px; height: 17px; top: -4px; left: -2px;" height="17" width="66"></canvas><cufontext>aliquet </cufontext></cufon><cufon style="width: 36px; height: 14px;" alt="orcid " class="cufon cufon-canvas"><canvas style="width: 54px; height: 17px; top: -4px; left: -2px;" height="17" width="54"></canvas><cufontext>orcid </cufontext></cufon><cufon style="width: 46px; height: 14px;" alt="ornare " class="cufon cufon-canvas"><canvas style="width: 64px; height: 17px; top: -4px; left: -2px;" height="17" width="64"></canvas><cufontext>ornare </cufontext></cufon><cufon style="width: 52px; height: 14px;" alt="quamsit" class="cufon cufon-canvas"><canvas style="width: 67px; height: 17px; top: -4px; left: -2px;" height="17" width="67"></canvas><cufontext>quamsit</cufontext></cufon></a></h5>
												<p><a href="#" class="more-link"><span>Read more</span></a></p>
											</div>
										<!-- END .item -->
										</div>
									<!-- END .list -->
									</div>
								</div>									
								<div id="kernel_triple_recent_kernel_3" style="display: none;">
									<!-- BEGIN .list -->
									<div class="list">
										<!-- BEGIN .item -->
										<div class="item">
											<div class="image">
												<a href="#"><img src="images/photos/no-image-70x70.jpg" alt="" height="60" width="60"></a>
											</div>
											<div class="text">
												<h5><a href="#"><cufon style="width: 51px; height: 14px;" alt="Aenean " class="cufon cufon-canvas"><canvas style="width: 69px; height: 17px; top: -4px; left: -2px;" height="17" width="69"></canvas><cufontext>Aenean </cufontext></cufon><cufon style="width: 49px; height: 14px;" alt="iaculis, " class="cufon cufon-canvas"><canvas style="width: 67px; height: 17px; top: -4px; left: -2px;" height="17" width="67"></canvas><cufontext>iaculis, </cufontext></cufon><cufon style="width: 36px; height: 14px;" alt="risus " class="cufon cufon-canvas"><canvas style="width: 54px; height: 17px; top: -4px; left: -2px;" height="17" width="54"></canvas><cufontext>risus </cufontext></cufon><cufon style="width: 32px; height: 14px;" alt="eget " class="cufon cufon-canvas"><canvas style="width: 50px; height: 17px; top: -4px; left: -2px;" height="17" width="50"></canvas><cufontext>eget </cufontext></cufon><cufon style="width: 72px; height: 14px;" alt="sollicitudin" class="cufon cufon-canvas"><canvas style="width: 85px; height: 17px; top: -4px; left: -2px;" height="17" width="85"></canvas><cufontext>sollicitudin</cufontext></cufon></a></h5>
												<p><a href="#" class="more-link"><span>Read more</span></a></p>
											</div>
										<!-- END .item -->
										</div>
										<!-- BEGIN .item -->
										<div class="item">
											<div class="image">
												<a href="#"><img src="images/photos/no-image-70x70.jpg" alt="" height="60" width="60"></a>
											</div>
											<div class="text">
												<h5><a href="#"><cufon style="width: 76px; height: 14px;" alt="Vestibulum " class="cufon cufon-canvas"><canvas style="width: 94px; height: 17px; top: -4px; left: -2px;" height="17" width="94"></canvas><cufontext>Vestibulum </cufontext></cufon><cufon style="width: 33px; height: 14px;" alt="ante " class="cufon cufon-canvas"><canvas style="width: 51px; height: 17px; top: -4px; left: -2px;" height="17" width="51"></canvas><cufontext>ante </cufontext></cufon><cufon style="width: 42px; height: 14px;" alt="ipsum " class="cufon cufon-canvas"><canvas style="width: 60px; height: 17px; top: -4px; left: -2px;" height="17" width="60"></canvas><cufontext>ipsum </cufontext></cufon><cufon style="width: 43px; height: 14px;" alt="primis " class="cufon cufon-canvas"><canvas style="width: 62px; height: 17px; top: -4px; left: -2px;" height="17" width="62"></canvas><cufontext>primis </cufontext></cufon><cufon style="width: 16px; height: 14px;" alt="in " class="cufon cufon-canvas"><canvas style="width: 34px; height: 17px; top: -4px; left: -2px;" height="17" width="34"></canvas><cufontext>in </cufontext></cufon><cufon style="width: 58px; height: 14px;" alt="faucibus " class="cufon cufon-canvas"><canvas style="width: 77px; height: 17px; top: -4px; left: -2px;" height="17" width="77"></canvas><cufontext>faucibus </cufontext></cufon><cufon style="width: 25px; height: 14px;" alt="orci" class="cufon cufon-canvas"><canvas style="width: 43px; height: 17px; top: -4px; left: -2px;" height="17" width="43"></canvas><cufontext>orci</cufontext></cufon></a></h5>
												<p><a href="#" class="more-link"><span>Read more</span></a></p>
											</div>
										<!-- END .item -->
										</div>
										<!-- BEGIN .item -->
										<div class="item">
											<div class="image">
												<a href="#"><img src="images/photos/no-image-70x70.jpg" alt="" height="60" width="60"></a>
											</div>
											<div class="text">
												<h5><a href="#"><cufon style="width: 86px; height: 14px;" alt="Pellentesque " class="cufon cufon-canvas"><canvas style="width: 104px; height: 17px; top: -4px; left: -2px;" height="17" width="104"></canvas><cufontext>Pellentesque </cufontext></cufon><cufon style="width: 48px; height: 14px;" alt="aliquet " class="cufon cufon-canvas"><canvas style="width: 66px; height: 17px; top: -4px; left: -2px;" height="17" width="66"></canvas><cufontext>aliquet </cufontext></cufon><cufon style="width: 36px; height: 14px;" alt="orcid " class="cufon cufon-canvas"><canvas style="width: 54px; height: 17px; top: -4px; left: -2px;" height="17" width="54"></canvas><cufontext>orcid </cufontext></cufon><cufon style="width: 46px; height: 14px;" alt="ornare " class="cufon cufon-canvas"><canvas style="width: 64px; height: 17px; top: -4px; left: -2px;" height="17" width="64"></canvas><cufontext>ornare </cufontext></cufon><cufon style="width: 52px; height: 14px;" alt="quamsit" class="cufon cufon-canvas"><canvas style="width: 67px; height: 17px; top: -4px; left: -2px;" height="17" width="67"></canvas><cufontext>quamsit</cufontext></cufon></a></h5>
												<p><a href="#" class="more-link"><span>Read more</span></a></p>
											</div>
										<!-- END .item -->
										</div>
									<!-- END .list -->
									</div>
								</div>									
								<div id="kernel_triple_comments_kernel_3" style="display: none;">
									<!-- BEGIN .list -->
									<div class="list">

										<!-- BEGIN .item -->
										<div class="item">
											<div class="image">
												<a href="#"><img src="images/photos/no-image-70x70.jpg" alt="" height="60" width="60"></a>
											</div>
											<div class="text">
												<h5><a href="#"><cufon style="width: 86px; height: 14px;" alt="Pellentesque " class="cufon cufon-canvas"><canvas style="width: 104px; height: 17px; top: -4px; left: -2px;" height="17" width="104"></canvas><cufontext>Pellentesque </cufontext></cufon><cufon style="width: 48px; height: 14px;" alt="aliquet " class="cufon cufon-canvas"><canvas style="width: 66px; height: 17px; top: -4px; left: -2px;" height="17" width="66"></canvas><cufontext>aliquet </cufontext></cufon><cufon style="width: 36px; height: 14px;" alt="orcid " class="cufon cufon-canvas"><canvas style="width: 54px; height: 17px; top: -4px; left: -2px;" height="17" width="54"></canvas><cufontext>orcid </cufontext></cufon><cufon style="width: 46px; height: 14px;" alt="ornare " class="cufon cufon-canvas"><canvas style="width: 64px; height: 17px; top: -4px; left: -2px;" height="17" width="64"></canvas><cufontext>ornare </cufontext></cufon><cufon style="width: 52px; height: 14px;" alt="quamsit" class="cufon cufon-canvas"><canvas style="width: 67px; height: 17px; top: -4px; left: -2px;" height="17" width="67"></canvas><cufontext>quamsit</cufontext></cufon></a></h5>
												<p><a href="#" class="more-link"><span>Read more</span></a></p>
											</div>
										<!-- END .item -->
										</div>
										<!-- BEGIN .item -->
										<div class="item">
											<div class="image">
												<a href="#"><img src="images/photos/no-image-70x70.jpg" alt="" height="60" width="60"></a>
											</div>
											<div class="text">
												<h5><a href="#"><cufon style="width: 51px; height: 14px;" alt="Aenean " class="cufon cufon-canvas"><canvas style="width: 69px; height: 17px; top: -4px; left: -2px;" height="17" width="69"></canvas><cufontext>Aenean </cufontext></cufon><cufon style="width: 49px; height: 14px;" alt="iaculis, " class="cufon cufon-canvas"><canvas style="width: 67px; height: 17px; top: -4px; left: -2px;" height="17" width="67"></canvas><cufontext>iaculis, </cufontext></cufon><cufon style="width: 36px; height: 14px;" alt="risus " class="cufon cufon-canvas"><canvas style="width: 54px; height: 17px; top: -4px; left: -2px;" height="17" width="54"></canvas><cufontext>risus </cufontext></cufon><cufon style="width: 32px; height: 14px;" alt="eget " class="cufon cufon-canvas"><canvas style="width: 50px; height: 17px; top: -4px; left: -2px;" height="17" width="50"></canvas><cufontext>eget </cufontext></cufon><cufon style="width: 72px; height: 14px;" alt="sollicitudin" class="cufon cufon-canvas"><canvas style="width: 85px; height: 17px; top: -4px; left: -2px;" height="17" width="85"></canvas><cufontext>sollicitudin</cufontext></cufon></a></h5>
												<p><a href="#" class="more-link"><span>Read more</span></a></p>
											</div>
										<!-- END .item -->
										</div>
										<!-- BEGIN .item -->
										<div class="item">
											<div class="image">
												<a href="#"><img src="images/photos/no-image-70x70.jpg" alt="" height="60" width="60"></a>
											</div>
											<div class="text">
												<h5><a href="#"><cufon style="width: 76px; height: 14px;" alt="Vestibulum " class="cufon cufon-canvas"><canvas style="width: 94px; height: 17px; top: -4px; left: -2px;" height="17" width="94"></canvas><cufontext>Vestibulum </cufontext></cufon><cufon style="width: 33px; height: 14px;" alt="ante " class="cufon cufon-canvas"><canvas style="width: 51px; height: 17px; top: -4px; left: -2px;" height="17" width="51"></canvas><cufontext>ante </cufontext></cufon><cufon style="width: 42px; height: 14px;" alt="ipsum " class="cufon cufon-canvas"><canvas style="width: 60px; height: 17px; top: -4px; left: -2px;" height="17" width="60"></canvas><cufontext>ipsum </cufontext></cufon><cufon style="width: 43px; height: 14px;" alt="primis " class="cufon cufon-canvas"><canvas style="width: 62px; height: 17px; top: -4px; left: -2px;" height="17" width="62"></canvas><cufontext>primis </cufontext></cufon><cufon style="width: 16px; height: 14px;" alt="in " class="cufon cufon-canvas"><canvas style="width: 34px; height: 17px; top: -4px; left: -2px;" height="17" width="34"></canvas><cufontext>in </cufontext></cufon><cufon style="width: 58px; height: 14px;" alt="faucibus " class="cufon cufon-canvas"><canvas style="width: 77px; height: 17px; top: -4px; left: -2px;" height="17" width="77"></canvas><cufontext>faucibus </cufontext></cufon><cufon style="width: 25px; height: 14px;" alt="orci" class="cufon cufon-canvas"><canvas style="width: 43px; height: 17px; top: -4px; left: -2px;" height="17" width="43"></canvas><cufontext>orci</cufontext></cufon></a></h5>
												<p><a href="#" class="more-link"><span>Read more</span></a></p>
											</div>
										<!-- END .item -->
										</div>
									<!-- END .list -->
									</div>
								</div>
							</div>
						<!-- END .sidebar-item .latest-activity -->
						</div>

						<!-- BEGIN .sidebar-item .latest-articles -->
						<div class="sidebar-item last">
							<div class="latest-articles">
								<div class="sidebar-title">
									<b><cufon style="width: 57px; height: 16px;" alt="Latest " class="cufon cufon-canvas"><canvas style="width: 78px; height: 19px; top: -4px; left: -2px;" height="19" width="78"></canvas><cufontext>Latest </cufontext></cufon><cufon style="width: 43px; height: 16px;" alt="news" class="cufon cufon-canvas"><canvas style="width: 58px; height: 19px; top: -4px; left: -2px;" height="19" width="58"></canvas><cufontext>news</cufontext></cufon></b>
								</div>
								<!-- BEGIN .list -->
								<div class="list">
									<!-- BEGIN .item -->
									<div class="item">
										<div class="text">
											<h5><a href="#"><cufon style="width: 55px; height: 14px;" alt="Aliquam " class="cufon cufon-canvas"><canvas style="width: 73px; height: 17px; top: -4px; left: -2px;" height="17" width="73"></canvas><cufontext>Aliquam </cufontext></cufon><cufon style="width: 16px; height: 14px;" alt="in " class="cufon cufon-canvas"><canvas style="width: 34px; height: 17px; top: -4px; left: -2px;" height="17" width="34"></canvas><cufontext>in </cufontext></cufon><cufon style="width: 90px; height: 14px;" alt="condimentum " class="cufon cufon-canvas"><canvas style="width: 108px; height: 17px; top: -4px; left: -2px;" height="17" width="108"></canvas><cufontext>condimentum </cufontext></cufon><cufon style="width: 39px; height: 14px;" alt="augue" class="cufon cufon-canvas"><canvas style="width: 53px; height: 17px; top: -4px; left: -2px;" height="17" width="53"></canvas><cufontext>augue</cufontext></cufon></a></h5>
											<div class="info">
												<span class="date">January 12&nbsp;&nbsp;•&nbsp;&nbsp;<a href="#">3 comments</a></span>
											</div>
											<p>Cras vulputate dui at felis varius et consecte tur risus viverra. Vivamus commodo gravida malesuada.consequat dui.</p>
											<p><a href="#" class="more-link"><span>Read more</span></a></p>
										</div>
									<!-- END .item -->
									</div>
									<!-- BEGIN .item -->
									<div class="item">
										<div class="text">
											<h5><a href="#"><cufon style="width: 48px; height: 14px;" alt="Mauris " class="cufon cufon-canvas"><canvas style="width: 66px; height: 17px; top: -4px; left: -2px;" height="17" width="66"></canvas><cufontext>Mauris </cufontext></cufon><cufon style="width: 64px; height: 14px;" alt="tristique, " class="cufon cufon-canvas"><canvas style="width: 82px; height: 17px; top: -4px; left: -2px;" height="17" width="82"></canvas><cufontext>tristique, </cufontext></cufon><cufon style="width: 28px; height: 14px;" alt="orci " class="cufon cufon-canvas"><canvas style="width: 46px; height: 17px; top: -4px; left: -2px;" height="17" width="46"></canvas><cufontext>orci </cufontext></cufon><cufon style="width: 19px; height: 14px;" alt="eu " class="cufon cufon-canvas"><canvas style="width: 37px; height: 17px; top: -4px; left: -2px;" height="17" width="37"></canvas><cufontext>eu </cufontext></cufon><cufon style="width: 78px; height: 14px;" alt="elemenaccu " class="cufon cufon-canvas"><canvas style="width: 96px; height: 17px; top: -4px; left: -2px;" height="17" width="96"></canvas><cufontext>elemenaccu </cufontext></cufon><cufon style="width: 93px; height: 14px;" alt="msanarcuarcu " class="cufon cufon-canvas"><canvas style="width: 111px; height: 17px; top: -4px; left: -2px;" height="17" width="111"></canvas><cufontext>msanarcuarcu </cufontext></cufon><cufon style="width: 58px; height: 14px;" alt="porttitor" class="cufon cufon-canvas"><canvas style="width: 73px; height: 17px; top: -4px; left: -2px;" height="17" width="73"></canvas><cufontext>porttitor</cufontext></cufon></a></h5>
											<div class="info">
												<span class="date">10 / 01 / 2011 / <a href="#">20 comments</a></span>
											</div>
											<p>Morbi eget massa tortor, id porta dui. Nam id iaculis eros. Nunc nibh sem, interdum vitae vestibulum in, scelerisque sed nisl incidunt.</p>
											<p><a href="#" class="more-link"><span>Read more</span></a></p>
										</div>
									<!-- END .item -->
									</div>
									<!-- BEGIN .item -->
									<div class="item">
										<div class="text">
											<h5><a href="#"><cufon style="width: 84px; height: 14px;" alt="Suspendisse " class="cufon cufon-canvas"><canvas style="width: 102px; height: 17px; top: -4px; left: -2px;" height="17" width="102"></canvas><cufontext>Suspendisse </cufontext></cufon><cufon style="width: 39px; height: 14px;" alt="ligula " class="cufon cufon-canvas"><canvas style="width: 57px; height: 17px; top: -4px; left: -2px;" height="17" width="57"></canvas><cufontext>ligula </cufontext></cufon><cufon style="width: 51px; height: 14px;" alt="mauris, " class="cufon cufon-canvas"><canvas style="width: 69px; height: 17px; top: -4px; left: -2px;" height="17" width="69"></canvas><cufontext>mauris, </cufontext></cufon><cufon style="width: 46px; height: 14px;" alt="cursus " class="cufon cufon-canvas"><canvas style="width: 64px; height: 17px; top: -4px; left: -2px;" height="17" width="64"></canvas><cufontext>cursus </cufontext></cufon><cufon style="width: 17px; height: 14px;" alt="ut " class="cufon cufon-canvas"><canvas style="width: 36px; height: 17px; top: -4px; left: -2px;" height="17" width="36"></canvas><cufontext>ut </cufontext></cufon><cufon style="width: 60px; height: 14px;" alt="convallis " class="cufon cufon-canvas"><canvas style="width: 78px; height: 17px; top: -4px; left: -2px;" height="17" width="78"></canvas><cufontext>convallis </cufontext></cufon><cufon style="width: 68px; height: 14px;" alt="atdapibus " class="cufon cufon-canvas"><canvas style="width: 86px; height: 17px; top: -4px; left: -2px;" height="17" width="86"></canvas><cufontext>atdapibus </cufontext></cufon><cufon style="width: 26px; height: 14px;" alt="nec " class="cufon cufon-canvas"><canvas style="width: 44px; height: 17px; top: -4px; left: -2px;" height="17" width="44"></canvas><cufontext>nec </cufontext></cufon><cufon style="width: 29px; height: 14px;" alt="ante" class="cufon cufon-canvas"><canvas style="width: 43px; height: 17px; top: -4px; left: -2px;" height="17" width="43"></canvas><cufontext>ante</cufontext></cufon></a></h5>
											<div class="info">
												<span class="date">10 / 01 / 2011 / <a href="#">3 comments</a></span>
											</div>
											<p>Morbi luctus dui euismod mauris consequat hendrerit. Curabitur orci tortor, ultrices quis scelerisque sit amet, laoreet eget purus.</p>
											<p><a href="#" class="more-link"><span>Read more</span></a></p>
										</div>
									<!-- END .item -->
									</div>
								<!-- END .list -->
								</div>
								<p class="show-all"><a href="#" class="btn-1 btn-1-color-default"><span><cufon style="width: 38px; height: 12px;" alt="Show " class="cufon cufon-canvas"><canvas style="width: 54px; height: 15px; top: -3px; left: -2px;" height="15" width="54"></canvas><cufontext>Show </cufontext></cufon><cufon style="width: 23px; height: 12px;" alt="all " class="cufon cufon-canvas"><canvas style="width: 39px; height: 15px; top: -3px; left: -2px;" height="15" width="39"></canvas><cufontext>all </cufontext></cufon><cufon style="width: 45px; height: 12px;" alt="latest " class="cufon cufon-canvas"><canvas style="width: 61px; height: 15px; top: -3px; left: -2px;" height="15" width="61"></canvas><cufontext>latest </cufontext></cufon><cufon style="width: 34px; height: 12px;" alt="news" class="cufon cufon-canvas"><canvas style="width: 45px; height: 15px; top: -3px; left: -2px;" height="15" width="45"></canvas><cufontext>news</cufontext></cufon></span></a></p>
							</div>
						<!-- END .sidebar-item .latest-articles -->
						</div>

					<!-- END .sidebar -->
					</div>


					<div class="clear">&nbsp;</div>


				<!-- END .main-column-wrapper -->
				</div>