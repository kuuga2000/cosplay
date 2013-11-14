<?php

class AlbumController extends Controller {
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
			'postOnly + delete',     // we only allow deletion via POST request
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
			'actions' => array('admin', 'delete'), 'users' => array('admin'), ), array('deny', // deny all users
			'users' => array('*'), ), );
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
		$model = new Album;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Album'])) {
			$file = $model -> gallery_cover = CUploadedFile::getInstance($model, 'gallery_cover');

			if (!empty($file)) {
				$file -> saveAs(Yii::app() -> basePath . self::URLUPLOAD . $file, '');

				//get image type
				$type = str_replace('image/', '', $file -> type);
				//set value to rename image
				$image_name = date("Y-m-d-His") . '.' . $type;

				rename(Yii::app() -> basePath . self::URLUPLOAD . $file, Yii::app() -> basePath . self::URLUPLOAD . $image_name);
				$model -> gallery_cover = $image_name;
			}
			$model -> attributes = $_POST['Album'];
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
		$gallery_cover = $model->gallery_cover;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Album'])) {
			$file = $model -> gallery_cover = CUploadedFile::getInstance($model, 'gallery_cover');

			if (!empty($file)) {
				$file -> saveAs(Yii::app() -> basePath . self::URLUPLOAD . $file, '');

				//get image type
				$type = str_replace('image/', '', $file -> type);
				//set value to rename image
				$image_name = date("Y-m-d-His") . '.' . $type;

				rename(Yii::app() -> basePath . self::URLUPLOAD . $file, Yii::app() -> basePath . self::URLUPLOAD . $image_name);
				$model -> gallery_cover = $image_name;
			}else{
				$model->gallery_cover = $gallery_cover;
			}
			$model -> attributes = $_POST['Album'];
			if ($model -> save()) {
				if (!empty($file)) {
					$file -> saveAs(Yii::app() -> basePath . self::URLUPLOAD . $file, '');
				}
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
		$model = Album::model() -> findByPk($id);

		$this -> loadModel($id) -> delete();
		if (!empty($model -> gallery_cover)) {
			unlink(Yii::app() -> basePath . self::URLUPLOAD . $model -> gallery_cover);
		}

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if (!isset($_GET['ajax']))
			$this -> redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Album');
		$this -> render('index', array('dataProvider' => $dataProvider, ));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin() {
		$model = new Album('search');
		$model -> unsetAttributes();
		// clear any default values
		if (isset($_GET['Album']))
			$model -> attributes = $_GET['Album'];

		$this -> render('admin', array('model' => $model, ));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Album the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id) {
		$model = Album::model() -> findByPk($id);
		if ($model === null)
			throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Album $model the model to be validated
	 */
	protected function performAjaxValidation($model) {
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'album-form') {
			echo CActiveForm::validate($model);
			Yii::app() -> end();
		}
	}

}
