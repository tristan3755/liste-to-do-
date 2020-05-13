<?php
 
 
 
     
 $file = fopen('exo.csv', 'r');  
 

 do
 {


   $line = fgetcsv($file);
 
   
   if($line == false)
   {
     $endFile = true;
   }
  
   else
   {
     $endFile = false;
   
     $lines[] = $line;
   }


 }

 while(!$endFile);
 

 
 foreach($lines as $line)
 {

echo $file;

   
  }
 
 
      function unset_value() 
      { 
          unset($lines); 
      } 
        
      unset_value(); 

     

      fclose($file);


?> 
        





