<!DOCTYPE html>
<html>
<head>
     <title>LOGIN-PAGE</title>
	<style>
        *{
    margin: 0px;
    padding: 0px;
}
body{
    font-size: 120%;
    background-image: url("8.jpg");
    background-size: 100%;
}
.header{
    width:30%;
    margin: 50px auto 0px;
    color: white;
    background:rgb(103, 40, 83);
    text-align: center;
    border: 1px solid #B0C4DE;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding:20px;
    
}
form,.content{
    width: 30%;
    margin: 0px auto;
    padding: 20px;
    border: 2px solid #B0C4DE;
    background: white;
    border-radius: 0px 0px 10px 10px;
}
.input-group{
    margin: 10px 0px 10px 0px;
}
.input-group label{
    display:block;
    text-align: left;
    margin: 3px;
}
.input-group input{
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border:1px solid gray;
}
.btn{
    padding: 10px;
    font-size: 15px;
    color:white;
    background: #5F9EA0;
    border:none;
    border-radius: 5px;
}
.error{
    width: 92%;
    margin: 0px auto;
    padding:10px;
    border:1px solid #a94442;
    color:#a94442;
    background: #f2dede;
    border-radius: 5px;
    text-align: left;
}
.errorsuccess{
    color:#3c763d;
    background: #dff0d8;
    border: 1px solid #3c763d;
    margin-bottom: 20px;
}
	</style>
	 </head>
	 <body>
	<div class="header">
        <h2>LOGIN-PAGE</h2>
		</div>
	    <form method="POST"  autocomplete="off">
		<div class="input-group">
          <h3>USER-TYPE</h3>
		  <select name="type">
		  <option value="-1">select user type</option>
		  <option value="admin">admin</option>
		  <option value="po">po</option>
		  <option value="deptmca">deptmca</option>
		  <option value="deptcse">deptcse</option>
		  <option value="deptit">deptit</option>
		  <option value="depteee">depteee</option>
		  <option value="deptece">deptece</option>
		  <option value="deptcivil">deptcivil</option>
		  <option value="deptmech">deptmech</option>
		  </select>
		  </div>
		  <div class="input-group">
            
		  <p>USERNAME</p>
		  <input type="text" name="username" placeholder="username">
		  </div>
		  <div class="input-group">
            
		  <p>PASSWORD</p>
		  <input type="password" name="pwd" placeholder="password">
		  </div>
		  &nbsp;
		  <div class="input-group">
            
		  <input type="submit" name="submit" value="login">
		  </div>
	</form>
	
	

</body>
</html>
<?php
  
    $con=mysql_connect("localhost","root","");

     if(!$con)
	 {
		 echo"Unable to establish connection".mysql_error();
	 }
	  
	   $db=mysql_select_db("camp",$con);
	   if(!$db)
	   {
		   echo"Database not found".mysql_error();
	   }
	    session_start();
		
	   if(isset($_POST['submit']))
	   {
		  
   
		 $type=$_POST['type'];
		 $username=$_POST['username'];
		 $password=$_POST['pwd'];
		 
		     
			
		 $query="select * from login where username='$username' and password='$password' and type='$type' ";
		 $result=mysql_query($query);
		 
		 while($row=mysql_fetch_array($result))
		 {
			 if($row['username']==$username && $row['password']==$password && $row['type']=='admin')
			 {
				 $_SESSION['username'] = "$username";
			echo 'welcome '.$_SESSION['username'].'';
		 
				 header("location:admin.html");
			 }
			 elseif($row['username']==$username && $row['password']==$password && $row['type']=='po')
			 {
				 $_SESSION['username'] = "$username";
			echo 'welcome '.$_SESSION['username'].'';
		 
				  header("location:index.html");
			 }
			 elseif($row['username']==$username && $row['password']==$password && $row['type']=='deptmca')
			 {
				 $_SESSION['username'] = "$username";
			echo 'welcome '.$_SESSION['username'].'';
		 
				 header("location:mca.html");
			 }
			 elseif($row['username']==$username && $row['password']==$password && $row['type']=='deptcse')
			 {
				 $_SESSION['username'] = "$username";
			echo 'welcome '.$_SESSION['username'].'';
		 
				 header("location:cse1.html");
			 }
			 elseif($row['username']==$username && $row['password']==$password && $row['type']=='deptit')
			 {
				 $_SESSION['username'] = "$username";
			echo 'welcome '.$_SESSION['username'].'';
		 
				 header("location:it1.html");
			 }
			  elseif($row['username']==$username && $row['password']==$password && $row['type']=='depteee')
			 {
				 $_SESSION['username'] = "$username";
			echo 'welcome '.$_SESSION['username'].'';
		 
				 header("location:eee1.html");
			 }
			 elseif($row['username']==$username && $row['password']==$password && $row['type']=='deptece')
			 {
				 $_SESSION['username'] = "$username";
			echo 'welcome '.$_SESSION['username'].'';
		 
				 header("location:ece1.html");
			 }
			  elseif($row['username']==$username && $row['password']==$password && $row['type']=='deptcivil')
			 {
				 $_SESSION['username'] = "$username";
			echo 'welcome '.$_SESSION['username'].'';
		 
				 header("location:civil1.html");
			 }
			  elseif($row['username']==$username && $row['password']==$password && $row['type']=='deptmech')
			 {
				 $_SESSION['username'] = "$username";
			echo 'welcome '.$_SESSION['username'].'';
		 
				 header("location:mech1.html");
			 }
			 else
				echo "<h3> Sorry....Login Failed....</h3>";
				include('login.php');

			 
		 }
		 
	   }
	   
	   if(isset($_GET['error'])==true)
	   {
		   echo '<>';
	   }
	   ?>