<?php
class Post extends M {
	function find($id){
		$this->db->select('*')->from('wgb_posts')->where('id', $id);
		$query = $this->db->getQuery();
		$num = mysql_num_rows($query);
		$this->db->reset();
		
		if($num > 0){
			$returnData = array('data' => $query, 'datacount' => $num);
			return $returnData;
		}
		return FALSE;
	}
}
?>