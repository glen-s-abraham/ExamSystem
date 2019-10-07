<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $_SESSION["answers"]=array();
        $_SESSION["qst"]=$this->db->count_all_results('quiestions');
        $_SESSION["score"]=0;
        $this->load->model("Quiestions");
    }

	
	public function index($id=1)
	{       
            
               $this->load->view("Header");
                if($this->input->get("id")!=NULL && $this->input->get("id")<=$_SESSION["qst"])
                    $id=$this->input->get("id");
               
                $qstn=$this->Quiestions->fetch_qstn($id);
                
                $data["id"]=$qstn->id;
                $data["quiestion"]=$qstn->quiestion;
                $data["a"]=$qstn->a;
                $data["b"]=$qstn->b;
                $data["c"]=$qstn->c;
                $data["d"]=$qstn->d;
                
		$this->load->view("Quiestion",$data);
                 $this->load->view("Footer");
               
	}
        public function submit_answer()
        {
            
            $id=$this->input->post("id");
            
            $option=$this->input->post("option");
            $ans="ans".$id;
           
            $_SESSION[$ans]=$option;
            $next=++$id;
            if($next<=$_SESSION["qst"])
            $this->index($next);
            
                    
                
            else
              
               $this->index($_SESSION["qst"]);
            
        }
        public function end_test(){
        
            //print_r($_SESSION);
            $score=0;
            $a=$this->Quiestions->fetch_answers();
            
            foreach ($a->result() as $row)
            {
            
            $ans="ans".$row->id;
            if(isset($_SESSION[$ans])&&$_SESSION[$ans]==$row->answer)
                $score++;
                
            $key[$ans]=$row->answer;
                
            }
            //print_r($_SESSION);
            //print_r($key);
            $this->load->view("header");
            
            $_SESSION["score"]=$score;
            $this->load->view("Score");
            $this->load->view("footer");
            
        }
        
}

