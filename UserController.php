<?php namespace App\Controllers;
use App\Models\userModel;
class UserController extends BaseController{

	public function __construct(){
		$this->session = \Config\Services::session();
        $this->userModel = new userModel();
        helper(['form', 'url']);
	}


	public function Login(){
            if($this->request->getMethod() =="post"){
                    $username = $this->request->getVar('username');
                    $password = $this->request->getVar('password');
                    $remember = $this->request->getVar('remember');

                    if($user = $this->userModel->getLogin($username)){

                        if($password == $this->userModel->Decript($user[0]->password)){
                            $this->session->set('user_id', $user[0]->id);
                            $this->session->set('user_roll', $user[0]->roll);
                            helper('cookie');
                            if($remember  =='on'){
                                set_cookie('password',$password, time() + (3600),"/");
                                set_cookie('username',$username, time() + (3600),"/");
                            }
                            else{
                                set_cookie('password',"", time() + (3600),"/",base_url());
                                set_cookie('username',"", time() + (3600),"/",base_url());
                            }
                            return redirect()->to(base_url('dashboard'));
                             //echo $pass = get_cookie('password');
                        }
                        else{
                            $this->session->setFlashdata('error', 'Login Details Invalid');
                            return redirect()->to(base_url());
                        }
                    }
                    else{
                        $this->session->setFlashdata('error', 'Login Details Invalid');
                        return redirect()->to(base_url());
                    } 
            }   
    }


    public function Resetpassword(){

         if($this->request->getMethod() =="post"){
                if($this->session->has('user_id')){
                        $old_password = $this->request->getVar('current_password');
                        $new_password = $this->request->getVar('new_password');
                       echo $user_id = $this->session->get('user_id');
                        
                       if($user = $this->userModel->getSingle($user_id)){
                           if($old_password == $this->userModel->Decript($user[0]->password)){
                               $data = array(
                                   'password' =>$this->userModel->Encription($new_password),
                               );
                               $this->userModel->updateData($user_id,$data);
                               $this->session->setFlashdata('success', 'Password Updated Successful.');
                               return redirect()->to(base_url('resetpassword'));
                           }
                           else{
                                 $this->session->setFlashdata('error', 'Old Paassword Do Not match.!!');
                                 return redirect()->to(base_url('resetpassword'));
                           } 
                       }
                       else{
                            $this->session->setFlashdata('error', 'Unauthorize Error.!!');
                            return redirect()->to(base_url('resetpassword'));
                       } 
                }
                else{
                            $this->session->setFlashdata('error', 'Unauthorize Error.!!');
                            return redirect()->to(base_url('resetpassword'));
                }
         }
         
    }


	public function logout(){
		$this->session->stop();
		$this->session->destroy();
		return redirect()->to(base_url());
	}


}
