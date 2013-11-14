<?php
class RetrieveRSS{
	public function animenewsnetworkDotCom(){
		$rss=simplexml_load_file('http://fulltextrssfeed.com/www.animenewsnetwork.com');
		//$rss=simplexml_load_file('file:///C:/xampp/htdocs/cosplay/rss/animenetwork.xml');
		return $rss;
	}
	
	public function jefusionDotCom(){
		$rss=simplexml_load_file('http://fulltextrssfeed.com/www.jefusion.com');
		//$rss = simplexml_load_file('file:///C:/xampp/htdocs/cosplay/rss/jefusion.xml');
		return $rss;
	}
}
