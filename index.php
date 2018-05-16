
   <?php
      include 'system/libs/Main.php';
      include 'system/libs/Load.php';
      include 'system/libs/Dcontroller.php';   
      include 'system/libs/Database.php';
      include 'system/libs/Dmodel.php';

         $url = isset($_GET['url'])?$_GET['url']:NULL;
 
      // if request controller then load it 
         if($url != NULL){

        $url = rtrim($url,'/');

        $url = explode('/',filter_var($url,FILTER_SANITIZE_URL));
         }
         else{
           
           unset($url);
         }

        if(isset($url[0])){
        include 'app/controllers/'.$url[0].'.php';
        
        $obj  = new $url[0](); 
         
        if(isset($url[2])){
        	 $str = $url[1];
        echo $obj->$str($url[2]); 
        }
        else{
          if(isset($url[1])){
          	 $str = $url[1];
             echo $obj->$str();
          }
           
        }

        }
        // else dafault controller will loaded 
        else{
         
         include 'app/controllers/Index.php';

         $ctrl = new Index();
           
         $ctrl->home();

        }

     
    
       ?>
