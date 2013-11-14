<?php
class NewsController extends Cosplaycontroller {
	const URLUPLOAD = '/../images/';
	
	public function actionView($id){
		$this -> layout = "homepage";
		$dataProvider = News::model()->findByPk($id);
		$this->render('view',array('model'=>$dataProvider));
	}

	public function actionTakechar($val='') {

		// keywords are between *
		$str = $val;
		//$str = '<img src="http://cdn03.animenewsnetwork.com/thumbnails/max550x700/cms/news/68122/byevxexcuaadrdg.jpg-large.jpeg"><img src="http://cdn03.animenewsnetwork.com/thumbnails/max550x700/cms/news/68122/byevxexcuaadrdg.jpg-larg.jpeg">';
		if (preg_match_all('/\<img src="(.*?)\"/', $str, $match)) {
			 $img= ($match[1][0]);
		}
		return  $img;
	}

	public function actionIndex() {
		 
		$this -> layout = 'homepage';
		$dataProvide = $this -> query("SELECT * FROM tb_news ORDER BY id DESC /*LIMIT 0,10*/");
		$this -> render('index', array('dataProvider' => $dataProvide));
	}

	public function actionSaverss($key = '') {
		if ($key == 'animenetwork') {

			$dataProvider = RetrieveRSS::animenewsnetworkDotCom();
			
			foreach ($dataProvider->channel->item as $data) {
				//$title = str_replace(array("'",'"'), '', $data->title);
				$title = $data -> title;
				$model = new News;
				//$checkDuplicate = News::model() -> findByAttributes(array('news_title' => $title));
				$checkDuplicate = $this -> query('SELECT * FROM tb_news WHERE news_title="' . $title . '"');
				$countent = strip_tags($data -> description, '<img><embed><p><br><div>');
				$image = $this->actionTakechar($countent);
				//$countent = $data -> description;
				$getUnicCodeVideoes = strpos($data -> description, "watch%3Fv%3D", 0);

				if (empty($checkDuplicate)) {

					if ($getUnicCodeVideoes > 0) {
						//'http://www.youtube.com/watch?v='.
						$unicCodeVideo = substr($data -> description, $getUnicCodeVideoes + 12, 11);
					}
					//echo $data -> description;
					//$countent . '<hr>';
					$model -> news_title = $data -> title;
					$model -> news_postdate = date('Y-m-d');
					$model -> news_content = $countent;
					$model -> news_image = $image;
					$model -> news_video = $unicCodeVideo;
					$model -> save();

				}
			}

			//print_r($rss);
			//copy('http://cdn01.animenewsnetwork.com/images/cms/interest/68101/03.jpg',Yii::app() -> basePath . self::URLUPLOAD . '/thumbs/03.jpg');
		} elseif ($key == 'jefusion') {
			$dataProvider = RetrieveRSS::jefusionDotCom();
			foreach ($dataProvider->channel->item as $data) {
				//$title = str_replace(array("'",'"'), '', $data->title);
				$title = $data -> title;
				$model = new News;
				//$checkDuplicate = News::model() -> findByAttributes(array('news_title' => $title));
				$checkDuplicate = $this -> query('SELECT * FROM tb_news WHERE news_title="' . $title . '"');
				$countent = strip_tags($data -> description, '<img><embed><p><br><div>');
				$image = $this->actionTakechar($countent);
				$getUnicCodeVideoes = strpos($data -> description, "watch%3Fv%3D", 0);

				if (empty($checkDuplicate)) {

					if ($getUnicCodeVideoes > 0) {
						//'http://www.youtube.com/watch?v='.
						$unicCodeVideo = substr($data -> description, $getUnicCodeVideoes + 12, 11);
					}
					//echo $data -> description;
					//$countent . '<hr>';
					$model -> news_title = $data -> title;
					$model -> news_postdate = date('Y-m-d');
					$model -> news_content = $countent;
					$model -> news_image = $image;
					$model -> news_video = $unicCodeVideo;
					$model -> save();

				}
			}
		} else {
			echo "site salah";
		}
	}

}
