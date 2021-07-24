<?php namespace App\Controllers;
use App\Models\leadModel;
class LeadController extends BaseController{

	public function __construct(){
		$this->session = \Config\Services::session();
        $this->leadModel = new leadModel();
        helper(['form', 'url']);
    }


public function add_lead(){
		$data['title'] ="Add Lead";
		if($this->session->has('user_id')){
			return $this->page('add-lead',$data);
		}
		else{
			$this->session->setFlashdata('error', 'Please Login Your Account.!!');
		return redirect()->to(base_url());
		}
		
}



public function addLead(){
    if($this->session->has('user_id')){
        $user_id = $this->session->get('user_id');
        if($this->request->getMethod() =="post"){

            $data = array(
                    'added_by'  => $user_id,
                    'lead_name' => filter_var($this->request->getVar('lead_name'),FILTER_SANITIZE_STRING) ,
                    'email'     => filter_var($this->request->getVar('email'),FILTER_SANITIZE_EMAIL),
                    'phone'     => filter_var($this->request->getVar('mobile'),FILTER_SANITIZE_STRING),
                    'address'   => filter_var($this->request->getVar('address'),FILTER_SANITIZE_STRING),
                    'state'     => filter_var($this->request->getVar('state'),FILTER_SANITIZE_STRING),
                    'city'      => filter_var($this->request->getVar('city'),FILTER_SANITIZE_STRING),
                    'zip'       => filter_var($this->request->getVar('zip'),FILTER_SANITIZE_STRING),
                    'project_name'      => filter_var($this->request->getVar('project_name'),FILTER_SANITIZE_STRING),
                    'tower_no'          => filter_var($this->request->getVar('tower_no'),FILTER_SANITIZE_STRING),
                    'flat_no'           => filter_var($this->request->getVar('flat_no'),FILTER_SANITIZE_STRING),
                    'owner_name'        => filter_var($this->request->getVar('owner_name'),FILTER_SANITIZE_STRING),
                    'interior_name'     => filter_var($this->request->getVar('inte_name'),FILTER_SANITIZE_STRING),
                    'carpenter_name'    => filter_var($this->request->getVar('carpent_name'),FILTER_SANITIZE_STRING),
                    'other'             => filter_var($this->request->getVar('other'),FILTER_SANITIZE_STRING),
                    'status'            => filter_var($this->request->getVar('statu'),FILTER_SANITIZE_STRING),
            );
            

            if($result = $this->leadModel->addData($data)){
                $this->session->setFlashdata('success', 'Lead Added Successfull.');
                return redirect()->to(base_url('add-lead'));
            }
            else{
                $this->session->setFlashdata('error', 'Lead Added Error.');
                return redirect()->to(base_url('add-lead'));
            } 

                
        }
    }
    else{
        $this->session->setFlashdata('error', 'Unauthorize Error!, Please Login Your Account.');
        return redirect()->to(base_url());
    }
    
}
    



public function lead_list(){
    if($this->session->has('user_id')){
        if($this->session->get('user_roll') =='admin'){
           // $id = $this->session->get('user_id');
            $allLead = $this->leadModel->getAll();
            $data['allLeads'] = $allLead;
            return $this->page('lead-list',$data);
        }
        else{
             $user_id = $this->session->get('user_id');
             $allLead = $this->leadModel->getList($user_id);
             $data['allLeads'] = $allLead;
             return $this->page('lead-list',$data);
        }
        
    }
}



}