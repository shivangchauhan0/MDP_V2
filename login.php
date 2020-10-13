<?php include('header.php') ?>
<!-- login Css -->
<link rel="stylesheet" href="CSS/login.css">
  <div class="header">
  	<h2 style="color:#fff" class="head-one"><i class='sign in alternate icon'></i> Log In</h2>
  </div>
	 
  <form class="ui form my-form" method="post" action="login.php">
	<?php include('errors.php'); ?>
	<?php if ($_GET["success"] == "1") { ?>
		 <div class="alert alert-success" role="alert">
		 <p><?php echo "You are now registered and can log in now" ?></p>
		 </div>
	<?php } ?>
  	<div class="field">
  		<label class="labels">Username</label>
  		<input type="text" name="username" required>
  	</div>
  	<div class="field">
  		<label class="labels">Password</label>
  		<input type="password" name="password" required>
  	</div>
  	<div class="field">
  		<button id="btn" class="ui button bg-red" type="submit" name="login_user">Log in</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a> or <a href="home.php">Home</a>
  	</p>
  </form>
  <?php include('footer.php') ?>