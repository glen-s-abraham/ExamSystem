<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __Construct()
    {
        parent::__Construct();
        $this->load->model("Users");
        $this->load->model("Quiestions");
    }
    public function index($msg="")
    {
        $message["msg"]=$msg;
        $this->load->view("login/Headers");
        $this->load->view("login/Login",$message);
        $this->load->view("login/Footer");
    }
    public function register()
    {
        $this->load->view("login/Headers");
        $this->load->view("login/Register");
        $this->load->view("login/Footer");
    }
    public function login_check()
    {
        $data["email"]=$this->input->post("email");
        $data["password"]=$this->input->post("password");
        $res=$this->Users->check_user($data);
        $r=$res->num_rows();
        if($r==0)
        {
            $msg="Invalid user";
            $this->index($msg);
        }
        else
        {
            $_SESSION["qst"]=$this->db->count_all_results('quiestions');
            $row=$res->row();
            $_SESSION["user"]=$row->name;
            $this->load->view("Header");
                
                    $id=1;
               
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
            
            
        
    }
     public function register_user()
    {
         $data["name"]=$this->input->post("name");
        $data["email"]=$this->input->post("email");
        $data["password"]=$this->input->post("password");
        $res=$this->Users->add_user($data);
        $message["msg"]=$res;
        $this->load->view("login/Headers");
        $this->load->view("login/Register",$message);
        $this->load->view("login/Footer");
        
    
     }
}
?>