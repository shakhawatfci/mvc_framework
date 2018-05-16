<?php 


class Database extends PDO
{

   public function __construct(){
      
      $dsn = 'mysql:dbname=city_mail; host:localhost';
      $user = 'root'; 
      $password = ''; 
   	parent::__construct($dsn,$user,$password);
   }

}