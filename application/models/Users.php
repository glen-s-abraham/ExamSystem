<?php
class Users extends CI_Model{
    public function check_user($data)
    {
        //print_r($data);
        $this->db->where("email",$data["email"]);
        $this->db->where("password",$data["password"]);
        $r=$this->db->get('users');
        return $r;
    }
    public function add_user($data)
    {
        $msg="";
        //print_r($data);
        $this->db->where("email",$data["email"]);
         $r=$this->db->count_all_results('users');
        if($r==0)
        {
            $this->db->set($data);
            $this->db->insert('users');
            $msg="Registered Successfully";
        }
        else
            $msg="User lready Exists";
        return $msg;
    }
    
}
?>