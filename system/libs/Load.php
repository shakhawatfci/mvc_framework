<?php 

/**
* for loading view load class developed
*/
class Load
{
	


	public function view($fileName){
        
        include 'app/views/'.$fileName.'.php';
	}

}