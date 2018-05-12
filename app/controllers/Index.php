<?php 

class Index extends Dcontroller{

  
  public function __construct(){
      
      parent::__construct();

  }

  public function home(){
   
    $this->load->view("home");

  }



}