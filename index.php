<?php include 'inc/header.php' ?>
  <div class="container-fluid">
  <div class="row" style="margin-top: 20px;">
  	<div class="col-md-12">
  		<div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This Is MVC Framework Tuotorial First Page</p>
  <hr class="my-4">
  <!-- code will go here  -->
  <p>
  	
      <?php
        
         $url = isset($_GET['url'])?$_GET['url']:NULL;

         if($url != NULL){

        $url = rtrim($url,'/');

        $url = explode('/',$url);
         }
         else{
           
           unset($url)
         }

        if($url[0]){
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

     
     




       ?>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
  	</div>
  </div>
  </div>	
  	
  </div>

<?php include 'inc/footer.php' ?>