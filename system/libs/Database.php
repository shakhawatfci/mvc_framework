<?php 


class Database extends PDO
{

   public function __construct($dsn,$user,$password){
    
   	parent::__construct($dsn,$user,$password);
   }


   public function select($table){
     
     $query = "SELECT * FROM $table ";

     $statement = $this->prepare($query);

     $statement->execute();

     return $statement->fetchAll();

   }

}