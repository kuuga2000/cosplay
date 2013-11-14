<?php

class MmageController extends Cosplaycontroller {
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout = '//layouts/column2';
	const URLUPLOAD = '/../images/';

	/**
	 * @return array action filters
	 */
	public function filters() {
		return array('accessControl', // perform access control for CRUD operations
			'postOnly + delete',   // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules() {
		return array( array('allow', // allow all users to perform 'index' and 'view' actions
			'actions' => array('index', 'view','Albumindex','Photoalbum'), 'users' => array('*'), ), array('allow', // allow authenticated user to perform 'create' and 'update' actions
			'actions' => array('create', 'update'), 'users' => array('@'), ), array('allow', // allow admin user to perform 'admin' and 'delete' actions
			'actions' => array('admin', 'delete'), 'users' => array('admin'), ), array('deny', // deny all users
			'users' => array('*'), ), );
	}
	
	public function actionPhotoalbum($param){
		$this->layout='homepage';
		
		$idalbum=Album::model()->findbyAttributes(array('gallery_title'=>trim($this->cleanStrip($param))));
		empty($idalbum) ? $this->redirect($this->baseUrl().'/notfound') : 
		$dataPhoto=$this->query("SELECT * FROM tb_images WHERE gallery_id=".$idalbum->id." ORDER BY id DESC");
		
		$this->render('photoalbum',array('dataPhoto'=>$dataPhoto));
	}
	
	public function actionAlbumindex($page=''){ 
		$this->layout='homepage';
		
		$stop=16;$page=str_replace('page', '', $page);
		if(empty($page)){
			$start=0;$page=1;
			
			/*$p1=0;$t=4;
			$p2=4;
			$p3=8;
			$p4=12;*/
		}else{
			$start=($page-1)*$stop;	
			$start<0?$this->redirect($this->baseUrl().'/notfound'):$start;
			/*$s=(($page-1)*$stop);
			$t=4;
			$p1=4+4;
			$p2=$p1+4;
			$p3=$p2+4;
			$p4=$p3+4;*/
		}
		$rowImage=$this->query("SELECT * FROM tb_galleries  ORDER BY id DESC LIMIT $start,$stop");
		$cdataPhoto=$this->query("SELECT * FROM tb_galleries");
		//$rowImage = $this->query("SELECT * FROM tb_galleries LIMIT $start, $stop");
		$sumData = count($cdataPhoto);
		$sumPage = ceil(($sumData/$stop));
		//$sumPage = ceil(ceil($sumData/$stop)/4);
		//echo $p1.'-'.$p2.'-'.$p3.'-'.$p4;exit;
		/*0  -  4
		4  -  4
		8  -  4
		12 -  4
		
		16  -  4
		32  -  4
		48  -  4
		 -  4
		*/
		//$dataPhoto=$this->query("SELECT * FROM tb_galleries  ORDER BY id DESC LIMIT $p1,$t");
		//$dataPhoto_1=$this->query("SELECT * FROM tb_galleries  ORDER BY id DESC LIMIT $p2,$t");
		//$dataPhoto_2=$this->query("SELECT * FROM tb_galleries  ORDER BY id DESC LIMIT $p3,$t");
		//$dataPhoto_3=$this->query("SELECT * FROM tb_galleries  ORDER BY id DESC LIMIT $p4,$t");
		
		$this->render('albumindex',array('rowImage'=>$rowImage,
			//'dataPhoto'=>$dataPhoto,
			//'dataPhoto_1'=>$dataPhoto_1,
			//'dataPhoto_2'=>$dataPhoto_2,
			//'dataPhoto_3'=>$dataPhoto_3,
			'sumPage'=>$sumPage,
			'page'=>$page));
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id) {
		$this -> render('view', array('model' => $this -> loadModel($id), ));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate() {
		$model = new Mmage;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Mmage'])) {
			//get image name/tmp
			$file = $model -> image_content = CUploadedFile::getInstance($model, 'image_content');
			//upload image to directory
			$model -> image_content -> saveAs(Yii::app() -> basePath . self::URLUPLOAD . $model -> image_content . '');

			//get image type
			$type = str_replace('image/', '', $file -> type);
			//set value to rename image
			$image_name = date("Y-m-d-His") . '.' . $type;

			//doing rename image
			rename(Yii::app() -> basePath . self::URLUPLOAD . $model -> image_content, Yii::app() -> basePath . self::URLUPLOAD . $image_name);

			//generate thumb image
			copy(Yii::app() -> basePath . self::URLUPLOAD . $image_name, Yii::app() -> basePath . self::URLUPLOAD . '/thumbs/' . $image_name);
			$file_name = Yii::app() -> basePath . self::URLUPLOAD . 'thumbs/' . $image_name;
			$image = Yii::app() -> image -> load($file_name);
			//315x177.jpg
			//$image->crop(130,130,20,30);
			$image -> resize(130, 130);
			$image -> save();

			//get attributes value to save
			$model -> image_content = $image_name;
			$model -> attributes = $_POST['Mmage'];

			//rename( 'tempFile.txt', 'tempFile2.txt' );
			if ($model -> save()) {
				$this -> redirect(array('view', 'id' => $model -> id));
			}

		}

		$this -> render('create', array('model' => $model, ));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id) {
		$model = $this -> loadModel($id);
		$gallery_cover = $model->image_content;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Mmage'])) {
			//get image name/tmp
			$file = $model -> image_content = CUploadedFile::getInstance($model, 'image_content');
			if(!empty($file)){
				//upload image to directory
				$model -> image_content -> saveAs(Yii::app() -> basePath . self::URLUPLOAD . $model -> image_content . '');
	
				//get image type
				$type = str_replace('image/', '', $file -> type);
				//set value to rename image
				$image_name = date("Y-m-d-His") . '.' . $type;
	
				//doing rename image
				rename(Yii::app() -> basePath . self::URLUPLOAD . $model -> image_content, Yii::app() -> basePath . self::URLUPLOAD . $image_name);
	
				//generate thumb image
				copy(Yii::app() -> basePath . self::URLUPLOAD . $image_name, Yii::app() -> basePath . self::URLUPLOAD . '/thumbs/' . $image_name);
				$file_name = Yii::app() -> basePath . self::URLUPLOAD . 'thumbs/' . $image_name;
				$image = Yii::app() -> image -> load($file_name);
				//315x177.jpg
				//$image->crop(130,130,20,30);
				$image -> resize(130, 130);
				$image -> save();
			}else{
				
			
				//get attributes value to save
				$model -> image_content = $gallery_cover;
				$model -> attributes = $_POST['Mmage'];
			}
			if ($model -> save()){
				$this -> redirect(array('view', 'id' => $model -> id));
			}
				
		}

		$this -> render('update', array('model' => $model, ));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id) {
		
		$model = Mmage::model() -> findByPk($id);
		
		$this -> loadModel($id) -> delete();
		
		unlink(Yii::app() -> basePath . self::URLUPLOAD . $model -> image_content);

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if (!isset($_GET['ajax']))
			$this -> redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Mmage');
		$this -> render('index', array('dataProvider' => $dataProvider, ));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin() {
		$model = new Mmage('search');
		$model -> unsetAttributes();
		// clear any default values
		if (isset($_GET['Mmage']))
			$model -> attributes = $_GET['Mmage'];

		$this -> render('admin', array('model' => $model, ));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Mmage the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id) {
		$model = Mmage::model() -> findByPk($id);
		if ($model === null)
			throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Mmage $model the model to be validated
	 */
	protected function performAjaxValidation($model) {
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'mmage-form') {
			echo CActiveForm::validate($model);
			Yii::app() -> end();
		}
	}

}
