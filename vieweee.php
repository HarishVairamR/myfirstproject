<?php

   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "camp";   
	
   $conn = mysqli_connect($hostname,$username,$password,$databaseName);
?>

<html>
  <head>
  <title>EEE-DETAILS</title>
   <link href="css/bootstrap.min_1.css" rel="stylesheet" type="text/css"/>
    
        <link href="css/tableexport.min.css" rel="stylesheet" type="text/css"/>
    </head>
   <body>
     <div class="container">
	 <table id="gisttech" class="table table-bordered" style="font-size:12px ">
	 <thead>
	 <tr>
			<th>sno</th>
	        <th>NAME</th>
			<th>ROLLNO</th>
			<th>DEPT</th>
			<th>SSLC</th>
			<th>HSC</th>
			<th>DIP</th>
			<th>UG</th>
			<th>PG</th>
			<th>ARREAR</th>
			<th>HISTORY</th>
			<th>MAILID</th>
			<th>CELLNO</th>
	 </tr>
	 </thead>
	 <tbody>
	 
	 <?php

			$rowcounter = 1;
			
			$sql = "SELECT * FROM eee";
			$result=mysqli_query($conn,$sql)or die('couldnt perform query');
			
			
			while($row = mysqli_fetch_assoc($result))
			{
				echo  "<tr>"
				
				."<td> $rowcounter    </td>"
				
				."<td> {$row['name']}     </td>"
				."<td> {$row['rollno']}     </td>"
				."<td> {$row['dept']}     </td>"
				."<td> {$row['sslc']}     </td>"
				."<td> {$row['hsc']}     </td>"
				."<td> {$row['dip']}     </td>"
				."<td> {$row['ug']}     </td>"
				."<td> {$row['pg']}     </td>"
				."<td> {$row['arrear']}     </td>"
				."<td> {$row['paper']}     </td>"
				."<td> {$row['mailid']}     </td>"
				."<td> {$row['cellno']}     </td>"
				
				."</tr>";
				$rowcounter++;
			}
			
			
			?>
			
			</tbody>
			
			</table>
			
		</div>	
	 
	 <script src="js/FileSaver.min.js" type="text/javascript"></script>
     <script src="js/bootstrap.min_1.js" type="text/javascript"></script>
     <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
     <script src="js/tableexport.min.js" type="text/javascript"></script>
	 
	 <script>
	 $('#gisttech').tableExport();
	 </script>
	 
	 
    </body>
	
	</html>