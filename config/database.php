<?php

class db {
	
	var $where = array();
	
	function db(){
		if ($dbc = @mysql_connect (DBHOST, DBUSER, DBPASS) ) {
			//select db
			if( !@mysql_select_db(DB) ) {
		    	die ('MySQL ERROR: ' . mysql_error() . '');
		    }

		}else{
			//this will display a readable error
			die ('We can not connect to your database - MySQL ERROR: ' . mysql_error() . '');
		}
	}
	
	function sanisql($value) {
	        //----- Stripslashes form magic quotes
	        if (get_magic_quotes_gpc()) {
	                $value = stripslashes($value);
	        }

	        //----- Apply proper quotes if not an interger
	        if (!is_numeric($value)) {
	                $value = "'" . mysql_real_escape_string($value) . "'";
	        }

	        return $value;

	}
	
	function select($val){
		$this->select = $val;
		return $this;
	}
	function from($val){
		$this->from = $val;
		return $this;
	}
	
	function where($key, $val){
		$whereArray = $this->where;
		$whereArray[$key] = $val;
		$this->where = $whereArray;
		return $this;
	}
	
	function getQuery(){
		//return "SELECT " . $this->select . " FROM " . $this->from . ";";
		if(count($this->where) == 0){
			return mysql_query("SELECT " . $this->select . " FROM " . $this->from . ";");
			//return "SELECT " . $this->select . " FROM " . $this->from . ";";
		}else{
			$cw = 0;
			$whereQ = '';
			foreach($this->where as $key => $val){
				if($cw == 0){
					$whereQ = $whereQ . "WHERE " . $key . "=" . $this->sanisql($val);
				}else{
					$whereQ = $whereQ . " AND " . $key . "=" . $this->sanisql($val);
				}
				$cw++;
			}
			return mysql_query("SELECT " . $this->select . " FROM " . $this->from . " " . $whereQ . ";");
			//return "SELECT " . $this->select . " FROM " . $this->from . " " . $whereQ . ";";
		}
	}
}
?>