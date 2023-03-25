<?php  
    
trait firstTrait {  
  public function firsttrait() {  
     echo " Hello this is a trait\n ";  
  }  
}  
    
trait forFirstTrait {  
  public function secondtrait() {  
     echo "and this is second trait\n ";  
  }  
}  
    
class childClass {  
   use firstTrait;  
   use forFirstTrait;  
   public function childFunction() {  
      echo "this is the child class which inherit parent traits\n ";  
  }   
}  
    
$obj = new childClass();  
$obj -> firsttrait();  
$obj -> secondtrait();  
$obj -> childFunction();  
?>  

