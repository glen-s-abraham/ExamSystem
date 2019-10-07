<?php
class Quiestions extends CI_Model
{
    public function fetch_qstn($id)
    {
       
        $q=$this->db->get_where('quiestions', array('id' => $id));
         return $q->row() ; 
            
    }
    public function fetch_answers()
    {
        $this->db->select("id,answer");
        $a=$this->db->get("quiestions");
        
        return $a;
    }
}


