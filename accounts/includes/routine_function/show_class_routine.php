<?php
function do_offset($level){
    $offset = "";  
    for ($i=1; $i<$level;$i++){
    $offset = $offset."";
    }
    return $offset;
}

function show_array($array, $level, $sub,$array_name){


    if (is_array($array) == 1){ 
	if ($sub=0)
	  echo "<tr>";	      
	  
       foreach($array as $key_val => $value) 
	   {
	   
	   
	    
           $offset = "";
		   
           if (is_array($value) == 1)
			   {   
		     
			   $offset = do_offset($level);
			   
			   //echo $offset."<td>".$key_val."<td>";
			   
			   echo "<td>".$key_val."<td>";
			   
		     
			  
			   show_array($value, $level+1, 1,$ar_name);
			   
			   }
           else
		       {              
			   
				   if ($sub != 1)
				   {          			
					   $offset = do_offset($level);
				   }
			           $sub = 0;				
					   
					   
					   /*					   
					   if ($value!='5_name,t_name' and ($array_name=='SAT' or $array_name=='SUN' or $array_name=='MON' or $array_name=='TUE' or $array_name=='WED' or $array_name=='THU'))
					   $value='----';
					   */
					   
					   
					     // echo $offset."<td>".$value."</td>"; 
					   
					   
					   
					   if($array_name=='Class' or $array_name=='Time')   				       
					   echo $offset."<td>".$value."</td>"; 
					   else					  
				     // echo "<td><a href=\"includes/routine_function/demo.php\"  onclick=\"return GB_showCenter('Add Routine Details', this.href,200,500)\">$value</a></td>";
					 echo $offset."<td>".$value."</td>"; 
                }
				
  
       } 
	  
	   echo "</tr>";
	  
    }  
    else{ 
        return;
    }
	
}

function html_show_array($array)
{

  echo "<table class=\"x3\" cellspacing=\"0\" border=\"2\">\n";
  
  show_array($array, 1, 0,'0');
  
  echo "</table>\n";
  
  
  
  
}

?> 
