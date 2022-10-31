<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Chat - Customer Module</title>
<link type="text/css" rel="stylesheet" href="styles.css" />
</head>

<div id="wrapper">

<iframe src="data:image/jpeg;base64,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" width="500px" height="167px" title="Любимый завтрак моего мужа! #shorts" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<?
session_start();
 
function loginForm(){
    echo'
    <div id="loginform">
    <form action="chat.php" method="post">
        <p>Please enter your name to continue:</p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" />
        <input type="submit" name="enter" id="enter" value="Enter" />
    </form>
    </div>
    ';
}
 
if(isset($_POST['enter'])){
    if($_POST['name'] != ""){
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
    }
    else{
        echo '<span class="error">Please type in a name</span>';
    }
}
?>
	<?php
if(!isset($_SESSION['name'])){
   loginForm();
}
else{
?>
<div id="wrapper">
    <div id="menu">
        <p class="welcome">Welcome, <b><?php echo $_SESSION['name']; ?></b></p>
        <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
        <div style="clear:both"></div>
    </div>    
    <div id="chatbox"><?php
if(file_exists("log.html") && filesize("log.html") > 0){
    $handle = fopen("log.html", "r");
    $contents = fread($handle, filesize("log.html"));
    fclose($handle);
     
    echo $contents;
}
?>	</div>
     
    <form name="message" action="">
        <input name="usermsg" type="text" id="usermsg" size="63" />
        <input name="submitmsg" type="submit"  id="submitmsg" value="Отправить" />
    </form>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
});
</script>
<?php
}
if(isset($_GET['logout'])){ 
     
    //Simple exit message
    $fp = fopen("log.html", 'a');
    fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left the chat session.</i><br></div>");
    fclose($fp);
     
    session_destroy();
    header("Location: chat.php"); //Redirect the user

}



?>
  
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
	//If user wants to end session
	$("#exit").click(function(){
		var exit = confirm("Are you sure you want to end the session?");
		if(exit==true){window.location = 'chat.php?logout=true';}

	});
});



</script>

<script type="text/javascript">
	//If user submits the form
$("#submitmsg").click(function(){	
	var clientmsg = $("#usermsg").val();
	$.post("post.php", {text: clientmsg});				
	$("#usermsg").attr("value", "");
	return false;
});

//Load the file containing the chat log
	function loadLog(){		

		$.ajax({
			url: "log.html",
			cache: false,
			success: function(html){		
				$("#chatbox").html(html); //Insert chat log into the #chatbox div				
		  	},
		});
	}
</script>

<script type="text/javascript">
	function loadLog(){		
		var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
		$.ajax({
			url: "log.html",
			cache: false,
			success: function(html){		
				$("#chatbox").html(html); //Insert chat log into the #chatbox div	
				
				//Auto-scroll			
				var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
				if(newscrollHeight > oldscrollHeight){
					$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
				}				
		  	},
		});
	}
</script>

<script type="text/javascript">
	setInterval (loadLog, 2500);	//Reload file every 100 ms or x ms if you wish to change
</script>

</body>
</html>