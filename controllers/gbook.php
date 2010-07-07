<?php
class Gbook extends C {
	
	function Gbook(){
		
	}
	
	// POST only
	// NEW POST
	function newpost(){
		$postdata = $_POST;
		var_dump($postdata);
	}
}
?>