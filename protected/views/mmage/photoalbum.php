<div class="breaking-wrapper">
					
					<div class="horizontal-scroller">
						 
					</div>
				<!-- END .breaking-wrapper -->
				</div>
<!-- BEGIN .full-width -->
<div class="full-width">
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
	<div class="post-subtitle">
		<b>
		<cufon style="width: 67px; height: 16px;" alt="Gallery " class="cufon cufon-canvas">
			<canvas style="width: 88px; height: 19px; top: -4px; left: -2px;" height="19" width="88"></canvas>
			<cufontext>
				Gallery
			</cufontext>
		</cufon>
		<cufon style="width: 34px; height: 16px;" alt="list " class="cufon cufon-canvas">
			<canvas style="width: 55px; height: 19px; top: -4px; left: -2px;" height="19" width="55"></canvas>
			<cufontext>
				list
			</cufontext>
		</cufon>
		<cufon style="width: 40px; height: 16px;" alt="title" class="cufon cufon-canvas">
			<canvas style="width: 55px; height: 19px; top: -4px; left: -2px;" height="19" width="55"></canvas>
			<cufontext>
				title
			</cufontext>
		</cufon></b>
	</div>
	<!-- BEGIN .photo-gallery-open -->
	<div class="photo-gallery-open">
		<div class="photo-gallery-list">
			<? foreach($dataPhoto as $photo):?>
			<a title="<?=$photo['image_title'];?> : <?=$photo['image_description'];?>" rel="group" href="<?=$this->baseUrl();?>/images/<?=$photo['image_content'];?>" class="fancy">
				<img src="<?=$this->baseUrl();?>/assets/thumb/thumb.php?w=130&h=130&zc=1&src=../../images/<?=$photo['image_content'];?>" alt="" class="image">
				
			</a>
			<? endforeach;?>
		</div>
		<div class="description">
			Morbi accumsan ultricies tincidunt. Aliquam eget eros ac velit placerat pulvinar at et elit. Phasellus tempor est in risus venenatis a blandit urna commodo. Aliquam feugiat porta urna in facilisis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
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
		<!-- END .photo-gallery-open -->
	</div>
	<!-- END .full-width -->
</div>
<div class="clear">
	&nbsp;
</div>
<!-- END .main-column-wrapper -->
