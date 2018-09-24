<?php
  
   
  
		
		$query = "SELECT * FROM chatroom";
		$run = mysqli_query($con,$query);
		while($row = mysqli_fetch_array($run)){
			
		?>
		
		<p>
		
		   <span style="color:red;"><?php  echo $row['name']." : ";?></span>
		   <span style="color:blue;"><?php  echo $row['message']." : ";?></span>
		   <span style="float:right;">12:05 pm</span>
		</p> 
		
		<?php }
   
   
   
   
   
   ?>