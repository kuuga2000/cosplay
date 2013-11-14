<?php
class AdminpanelController extends Cosplaycontroller{
	public $layout='adminlayout';
	public function actionIndex(){
		$this->render('index');
	}
	
}
