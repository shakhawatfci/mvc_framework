<?php 

class Index extends Dcontroller{

  
  public function __construct(){
      
      parent::__construct();

  }

  public function home(){
   
    $this->load->view("home");

  }


  public function category(){
      
       $data = [];
       $catModel =  $this->load->model("CatModel");
       $data['cat'] = $catModel->catlist();
    $this->load->view("category",$data);

  }



}