<?php namespace App\Models;

use CodeIgniter\Model;

class userModel extends Model
{
    private $user_table = 'tbl_user';
    private $encKey = 'Encoders Avenger Developers';
    private $iv = 'reuhnvkfcnl5k@h1';
    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
    }

    public function Encription($data){

        define('AES_256_CBC', 'aes-256-cbc');
        $encrypted = openssl_encrypt($data, AES_256_CBC, $this->encKey, 0, $this->iv);
        return $encrypted;
    }

    public function Decript($encData){
        define('AES_256_CBC', 'aes-256-cbc');
        $decrypted = openssl_decrypt($encData, AES_256_CBC, $this->encKey, 0, $this->iv);
        return $decrypted;
    }
 
    public function getLogin($username){
        $build = $this->db->table($this->user_table);
        return $build->where('username',$username)
                     ->get()->getResult();
    }

    public function getSingle($id){
        $build = $this->db->table($this->user_table);
        return $build->where('id',$id)
                     ->get()->getResult();
    }

    public function addData($data){
        $build = $this->db->table($this->user_table);
        $build->insert($data);
        return $this->db->insertID();
    }

    public function getAll(){
        $build = $this->db->table($this->user_table);
        return $build->orderBy('id','DESC')->get()->getResult();
    }

    public function updateData($data,$id){
        $build = $this->db->table($this->user_table);
        $build->where('id',$id)->update($data);
        return true;
    }

   

}