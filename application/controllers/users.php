<?php



class Users extends CI_Controller{

	public function index(){

		$data['users_list'] = $this->user_model->get_users();
		$this->load->view('user_view', $data);
	}
}
?>