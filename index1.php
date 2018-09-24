<?php
	
	include("./config.php");

  ?>


<html>
<head>
<meta charset="utf-8">
<title>CHAT-CORNER</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link rel="stylesheet" href="hvr1.css">
  
  <script>
  $(document).ready(function(e) {
	 $('#sendMessageBtn').click(function(e) {
		 
		 var  name = $("#user-name").val();
		 var  message = $("#message").val();
		 $("#myChatForm")[0].reset();	

		$.ajax({
			 
			 url:'sendChat.php',
			 type:'POST',
			 data:{
				 uname:name,
				 umessage:message
			 }
			 
			 
			 
		     });
		 
		 
	 }); 
  });
  </script>
  </head>
  
  <body>
 <div class="container-fluid"> 
 
		<h3 class="text-center">Live Chat Room</h3>
		
		
 
		<div class="well" id="chatBox">
		
		
	   	
		</div>
			
			<form id="myChatForm">
			
			<input type="text" id="user-name" placeholder="enter your name:"><br>
			<textarea name="message"  id="message" placeholder="enter your message here..."  cols="30"  rows="3"></textarea><br>
			<button type="button" class="btn btn-success btn-lg" id="sendMessageBtn">send Message</button>
			</form>
			
  </div>		   
  </body>
  </html>