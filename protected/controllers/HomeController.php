<?php
class HomeController extends Cosplaycontroller {
	
	public $layout = "homepage";
	
	

	public function actionIndex() {
		/*$ModelPost = new Post;
		$criteria = new CDbCriteria( array('order' => 'id DESC','limit'=>3 ));
		$PostData = $ModelPost::model()->findAll($criteria);
		*/
		
		$dataProvider = $this->query("SELECT * FROM tb_news ORDER BY id DESC LIMIT 0,5");
		$dataProvider_2 = $this->query("SELECT * FROM tb_news ORDER BY id DESC LIMIT 5,5");
		$dataProvider_3 = $this->query("SELECT * FROM tb_news ORDER BY id DESC LIMIT 10,5");
		
		$PostData=$this->query("SELECT * FROM tb_posts WHERE category_id = 1 ORDER BY id DESC LIMIT 0,3");
		$PostData_1=$this->query("SELECT * FROM tb_posts WHERE category_id = 1 ORDER BY id DESC LIMIT 3,3");
		$EventData=$this->query("SELECT * FROM tb_posts WHERE category_id = 2 ORDER BY id DESC LIMIT 0,3");
		$EventData_1=$this->query("SELECT * FROM tb_posts WHERE category_id = 2 ORDER BY id DESC LIMIT 3,3");
		$EventData_2=$this->query("SELECT * FROM tb_posts WHERE category_id = 2 ORDER BY id DESC LIMIT 6,3");
		$image = $this->query("SELECT * FROM tb_galleries ORDER BY id DESC LIMIT 0,1");
		 
		$this->render("index",
			array(
				'ModelPost'=>$PostData,
				'ModelPost_1'=>$PostData_1,
				'ModelEvent'=>$EventData,
				'ModelEvent_1'=>$EventData_1,
				'ModelEvent_2'=>$EventData_2,
				'dataProvider'=>$dataProvider,
				'dataProvider_2'=>$dataProvider_2,
				'dataProvider_3'=>$dataProvider_3,
				'Cover'=>$image,
				'yes'=>'yes',
			)
		); 
		
	}
}
