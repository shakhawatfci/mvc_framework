<?php 


/**
*  
*/
class CatModel extends Dmodel
{


public function catlist(){

	return $this->db->select('category');
}

}