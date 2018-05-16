<?php 

/**
* for loading view load class developed
*/
class Load
{
	
	// public function __construct(argument)
	// {
	// 	# code...
	// }

	public function view($fileName,$data = false){

		if($data == true){
           
           extract($data);
		}
        
        include 'app/views/'.$fileName.'.php';
	}


	public function model($modelName){
       
       include 'app/model/'.$modelName.'.php';

       return new $modelName();

	}

}