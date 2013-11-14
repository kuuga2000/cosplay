<?php

class PostController extends Cosplaycontroller {
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout = 'adminlayout';
	const URLUPLOAD = '/../images/';

	/**
	 * @return array action filters
	 */
	public function filters() {
		return array('accessControl', // perform access control for CRUD operations
			'postOnly + delete',         // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules() {
		return array( array('allow', // allow all users to perform 'index' and 'view' actions
			'actions' => array('index', 'view'), 'users' => array('*'), ), array('allow', // allow authenticated user to perform 'create' and 'update' actions
			'actions' => array('create', 'update'), 'users' => array('@'), ), array('allow', // allow admin user to perform 'admin' and 'delete' actions
			'actions' => array('admin', 'delete'), 'users' => array('blade'), ), array('deny', // deny all users
			'users' => array('*'), ), );
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id) {
		$this -> layout = "homepage";
		$this -> render('view', array('model' => $this -> loadModel($id), ));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate() {
		$model = new Post;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Post'])) {

			//cecking file
			$file = $model -> post_image = CUploadedFile::getInstance($model, 'post_image');
			if (!empty($file)) {

				//get image name/tmp
				$file = $model -> post_image = CUploadedFile::getInstance($model, 'post_image');
				//upload image to directory
				$model -> post_image -> saveAs(Yii::app() -> basePath . self::URLUPLOAD . $model -> post_image . '');

				//get image type
				$type = str_replace('image/', '', $file -> type);
				//set value to rename image
				$image_name = date("Y-m-d-His") . '.' . $type;

				//doing rename image
				rename(Yii::app() -> basePath . self::URLUPLOAD . $model -> post_image, Yii::app() -> basePath . self::URLUPLOAD . $image_name);

				//generate thumb image
				copy(Yii::app() -> basePath . self::URLUPLOAD . $image_name, Yii::app() -> basePath . self::URLUPLOAD . '/thumbs/' . $image_name);
				$file_name = Yii::app() -> basePath . self::URLUPLOAD . 'thumbs/' . $image_name;
				$image = Yii::app() -> image -> load($file_name);
				//315x177.jpg
				//$image->crop(130,130,20,30);
				$image -> resize(130, 130);
				$image -> save();

				//get attributes value to save
				$model -> post_image = $image_name;
			}

			$model -> attributes = $_POST['Post'];

			if ($model -> save()) {
				/*if (!empty($file)) {
				 $file -> saveAs(Yii::app() -> basePath . self::URLUPLOAD . $model -> post_image . '');
				 //generate thumb image
				 copy(Yii::app()->basePath.self::URLUPLOAD.$file,Yii::app()->basePath.self::URLUPLOAD.'/thumbs/'.$file);
				 $file_name = Yii::app()->basePath.self::URLUPLOAD.'/thumbs/'.$file;

				 $image = Yii::app()->image ->load($file_name);
				 //315x177.jpg
				 //$image->crop(50,50,100,100);
				 $image->resize(50,0);

				 $image->save();

				 }*/
				$this -> redirect(array('admin'));
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
		$image = $model -> post_image;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Post'])) {
			//cecking file
			$file = $model -> post_image = CUploadedFile::getInstance($model, 'post_image');
			if (!empty($file)) {

				//get image name/tmp
				$file = $model -> post_image = CUploadedFile::getInstance($model, 'post_image');
				//upload image to directory
				$model -> post_image -> saveAs(Yii::app() -> basePath . self::URLUPLOAD . $model -> post_image . '');

				//get image type
				$type = str_replace('image/', '', $file -> type);
				//set value to rename image
				$image_name = date("Y-m-d-His") . '.' . $type;

				//doing rename image
				rename(Yii::app() -> basePath . self::URLUPLOAD . $model -> post_image, Yii::app() -> basePath . self::URLUPLOAD . $image_name);

				//generate thumb image
				copy(Yii::app() -> basePath . self::URLUPLOAD . $image_name, Yii::app() -> basePath . self::URLUPLOAD . '/thumbs/' . $image_name);
				$file_name = Yii::app() -> basePath . self::URLUPLOAD . 'thumbs/' . $image_name;
				$image = Yii::app() -> image -> load($file_name);
				//315x177.jpg
				//$image->crop(130,130,20,30);
				$image -> resize(130, 130);
				$image -> save();

				//get attributes value to save
				$model -> post_image = $image_name;
				$model -> attributes = $_POST['Post'];
				$model -> save();
			} else {
				$model -> post_image = $image;
				$model -> attributes = $_POST['Post'];
				$model -> save();

			}

			//$this -> redirect(array('view', 'id' => $model -> id));

		}

		$this -> render('update', array('model' => $model, ));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id) {
		$model = Post::model() -> findByPk($id);
		$this -> loadModel($id) -> delete();
		unlink(Yii::app() -> basePath . self::URLUPLOAD . $model -> post_image);

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if (!isset($_GET['ajax']))
			$this -> redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Post');
		$this -> render('index', array('dataProvider' => $dataProvider, ));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin() {
		$model = new Post('search');
		$model -> unsetAttributes();
		// clear any default values
		if (isset($_GET['Post']))
			$model -> attributes = $_GET['Post'];

		$this -> render('admin', array('model' => $model, ));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Post the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id) {
		$model = Post::model() -> findByPk($id);
		if ($model === null)
			throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Post $model the model to be validated
	 */
	protected function performAjaxValidation($model) {
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'post-form') {
			echo CActiveForm::validate($model);
			Yii::app() -> end();
		}
	}

}
