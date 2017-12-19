
<html>
<head>
<title>File Uploading Form</title>
<style>
*{
font-size:40px;
text-align:center;
}
.video{
 width:500px;
 height:400px;
 border: 5px solid black;
 }
.prev{
font-size:30px;
border: 10px solid black;
background-color:white;
color: black;
text-align:left;
}
a{
color:blue;
}
div{
font-size:40px;
color:white;
background-color:black;
border: 10px solid white;
text-align:center;
}
input{
color:black;
background-color:white;
}
</style>
</head>
<body >
<img src="images/padmin.jpg" width="100%"/><hr>

<div>
<h1>Admin Episode Upload:</h1>
Episode picture: <br />
 
<br>
<form action="<?php $_PHP_SELF ?>" method="POST"
 enctype="multipart/form-data">
<input type="file" name="file" size="90909" />
<br>
<br>
Episode Name<br><input type="text" name="name"/><br>
Episode Link<br> <input type="text" name="url"/><br>
<br>
<input type="submit" value="Upload File" />
</form>

</div>
<div>

<h2>Uploaded File Info:</h2>
<ul>
<li>Sent file: <?php echo $_POST['name']; ?>
<li>File size: <?php echo $_FILES['file']['size']; ?> bytes
<li>File type: <?php echo $_FILES['file']['type']; ?>
</ul> 

</div>

<div class="prev">
<h2><?php echo"Preview"; ?></h2><hr>
<?php echo $_POST['name']; ?><br>
<img alt="No Image yet" class= "video" src=<?php echo "images/".$_POST['name'].".jpg"; ?> width="100%"/><br>
<a href=<?php echo $_POST['url']; ?>>Watch Video</a><br>

</div>
<div>
<?php
if( $_FILES['file']['name'] != "" )
{
 copy( $_FILES['file']['tmp_name'], "images/".$_POST["name"].".jpg" ) or 
 die( "Could not copy file!");
}
else
{
 die("No file specified!");
}
?> 
</div>

</body>
</html> 