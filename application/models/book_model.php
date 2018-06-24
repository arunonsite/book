<?php
class book_model extends CI_Model{

	public function getAllBooks()
	{
		$query = $this->db->get('book_list');
		return $query->result_array();
	}
	public function addFavBooks($userid,$bookid)
	{
		$data = array(
            'userid' => $userid,
            'bookid' => $bookid
        );
        $this->db->insert('personal_books', $data);
		return  1;
	}
	public function getFavBooks()
	{
		$id = $this->session->userdata('userid');
		$this->db->select('*');    
		$this->db->from('book_list');
		$this->db->join('personal_books', 'book_list.id = personal_books.bookid');
		$this->db->where('personal_books.userid',$id);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getSearchBooks()
	{
		$keyword = $this->input->post('search');
		$this->db->select('*');
		$this->db->from('book_list');
		$this->db->like('book_name', $keyword);
		return $this->db->get()->result_array();
	}

}
?>