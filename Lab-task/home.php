<?php
session_start();

if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){?>
	<img src="<?php echo $proPicURL;?>" width="50px" height="50px" /><br/><br/>
	Hello: <?php echo $_SESSION["uname"]; ?>
	<br/><br/><br/><br/>
	<a href="logout.php">Log Out</a><br/>
	<p>This is a place after login</p>
<?php
}
else{
	header("Location:logout.php");
}
?>