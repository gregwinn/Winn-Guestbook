<?php
include 'models/services.php';
class Gbook extends C {
	
	var $posterrors = array();
	
	function Gbook(){
		
	}
	
	// POST only
	// NEW POST
	function newpost(){
		$postdata = $_POST;
		foreach($postdata as $key => $value){
			if(empty($value)){
				$this->posterrors[$key] = "Empty";
			}
		}
		if(count($this->posterrors) != 0){
			$this->showerror($this->posterrors);
			return false;
		}else{
			// The post has no error so we can now send to the database.
		}
		//var_dump($postdata);
	}
	
	
	// Error Report
	function showerror($e){
		$qstring = '?';
		foreach($e as $key => $value){
			$qstring .= $key . '=' . $value . '&';
		}
		header("Location: index.php" . $qstring);
	}
}
?>