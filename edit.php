<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Edit</h2>
  </div>
	 
  <form method="post" action="edit.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Email</label>
  		<input type="email" name="mailid" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password1">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="edit_user">Edit</button>
  	</div>
  	
  		<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>

  	
  </form>
</body>
</html>