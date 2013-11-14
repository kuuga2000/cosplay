<?php
class Cosplaycontroller extends Controller {
	//to get data by custom query	
	public function query($sql) {
		$conncection = Yii::app() -> db;
		 
		
		//return $conncection;
		$command = $conncection -> cache(1000) -> createCommand($sql);
		$results = $command -> queryAll();
		return $results;

	}
	
	public function baseUrl(){
		//return 'http://image-event.shariveweb.com';
		return 'http://localhost:85/cosplay';
	}
	//to replace - by space
	public function cleanStrip($param){
		return str_replace('-', ' ', $param);
	}
	
	//to replace space by -
	public function addStrip($param){
		return str_replace(array(' ',"'"), '-', $param);
	}
	
	public function shortContent($val=''){
		
	}

}
