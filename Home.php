<?php namespace App\Controllers;
use App\Models\userModel;
class Home extends BaseController
{

public function __construct(){
		$this->session = \Config\Services::session();
        $this->userModel = new userModel();
		helper(['form', 'url']);
		helper('cookie');
	}


public function index(){
		if($this->session->has('user_id')){
			return redirect()->to(base_url('dashboard'));
		}
		else{
			return $this->primari('index');
		}		
	}

public function ResetPassword(){
	if($this->session->has('user_id')){
		return $this->primari('resetpassword');
	}
	else{
		$this->session->setFlashdata('error', 'Please Login Your Account.!!');
		return redirect()->to(base_url());
	}
	
}

public function dashboard(){
	$data['title'] ="Dashboard";

	if($this->session->get('user_roll') == 'admin'){
		return $this->page('dashboard',$data);
	}
	else if($this->session->get('user_roll') == 'sales_executive'){
		return $this->page('sales-executive-dashboard',$data);
	}
	else if($this->session->get('user_roll') == 'data_collector'){
		return $this->page('sales-executive-dashboard',$data);
	}
	else{
		$this->session->setFlashdata('error', 'Please Login Your Account.!!');
		return redirect()->to(base_url());
	}
}






}
