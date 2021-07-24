<?php namespace App\Models;

use CodeIgniter\Model;

class leadModel extends Model
{
    private $lead_table = 'tbl_lead';
    private $user_table = 'tbl_user';
    
    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
    }

    
 
    public function getSingle($id){
        $build = $this->db->table($this->lead_table);
        return $build->where('id',$id)
                     ->get()->getResult();
    }

    public function addData($data){
        $build = $this->db->table($this->lead_table);
        $build->insert($data);
        return $this->db->insertID();
    }

    public function getAll(){
        $build = $this->db->table($this->lead_table);
        return $build->orderBy('id','DESC')->get()->getResult();
    }

    public function getList($id){
        $build = $this->db->table($this->lead_table);
        $build->where('added_by',$id);
        return $build->orderBy('id','DESC')->get()->getResult();
    }

    public function updateData($data,$id){
        $build = $this->db->table($this->lead_table);
        $build->where('id',$id)->update($data);
        return true;
    }

   public function showLeads($id){
    $builder = $this->db->table($this->lead_table." as lead");
    $builder->select('lead.*, user.fullname as user_fullname');
    $builder->join($this->user_table.' as user', 'lead.added_by ='.$id);
    $data = $builder->get()->getResult();
    return $data;
   }

}