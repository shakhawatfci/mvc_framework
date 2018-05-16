<?php


class Dmodel{

 protected $db = [];

 public function __construct(){
      
      $dsn = 'mysql:dbname=mvc_framework; host:localhost';
      $user = 'root'; 
      $password = ''; 
    $this->db = new Database($dsn,$user,$password);

 }

}