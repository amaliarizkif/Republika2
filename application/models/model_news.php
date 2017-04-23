<?php

Class Model_news extends CI_Model {

	public function get_category(){
		$category = $this->db->get('category');
		return $category;
	}

	public function get_news(){
		$news = $this->db
		->select('id_news, title, content, images, nm_category')
		->from('news')
		->join('category', 'category.id_category = news.category');
		$news = $this->db->get();
		return $news;
	}

	public function add_news($data)
	{
		$this->db->insert('news', $data);
	}

	function delete($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}

	function edit($where,$table){	
	
	return $this->db->get_where($table,$where);
	}

	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}

?>