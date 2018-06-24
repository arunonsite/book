<?php
class login_model extends CI_Model{

public function login()
            {
			
				$username = $this->input->post('username');
				$password = $this->input->post('password');
                $this->db->where('username',$username);
                $this->db->where('password',$password);     

                $query = $this->db->get('users');
				//echo $query->num_rows();die;
				//print_r($query);die;
                if($query->num_rows() == 1)
                {	
					$row = $query->row();
					$data['username'] =  $row->username;
					$data['userid'] =  $row->id;
					$this->session->set_userdata($data);
                    return true;
                }
                else
                {
                    return false;
                }
}

}
?>