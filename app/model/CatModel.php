<?php 


/**
*  
*/
class CatModel extends Dmodel
{


public function catlist(){

	  $query = "SELECT * FROM category";

	   $data = $this->db->query($query);

	  $result  =  $data->fetchAll();

	  return $result; 
}

}