<?php include('header.php') ?>
<!-- login Css -->
<link rel="stylesheet" href="CSS/login.css">
<div class="overlay">
</div>
  <div class="header">
  	<h2 style="color:#fff" class="head-one"><i class='user plus alternate icon'></i> Register</h2>
  </div>
	
  <form method="post" action="register.php" class="ui form my-form">
	  <?php include('errors.php'); ?>
	  <div class="field">
  	  <label class="labels">Full Name*</label>
  	  <input type="text" name="name" required>
  	</div>
	  <div class="inline fields">
		<div class="field my-1">
		<label class="labels">EmpID*</label>
		<input type="text" name="tid" required>
		</div>
		<div class="field my-1">
		<label class="labels">Username</label>
		<input type="text" name="username" >
		</div>
	  </div>
	
	<div class="field">
  	  <label class="labels">Department*</label>
  	   <select class="ui fluid dropdown" id='sup-depart' style="width:100%" name="sup_depart" onchange="fetch_select(this.value);"  required>
            <option value="">Department</option>
			<?php
                    $sql_query = "SELECT * FROM sup_depart";
                    $sup_depart = mysqli_query($db,$sql_query);
                    while($row = mysqli_fetch_assoc($sup_depart) ){
                       ?>
                          <option value="<?php echo $row["sup_depart"];?>"><?php echo $row["sup_depart"];?></option>
                    <?php }
                  ?>
       </select>
  	</div>
	  <div class="field">
  	  <label class="labels">Sub Department</label>
		<select class="ui fluid dropdown" id='department'style="width:100%" name="department">
			<option value="">Sub-Department</option>
              
		</select>
  	
	</div>
	<div class="inline fields">
  	<div class="field">
  	  <label class="labels">Password*</label>
  	  <input type="password" name="password_1" required>
  	</div>
  	<div class="field">
  	  <label class="labels">Confirm password*</label>
  	  <input type="password" name="password_2" required>
  	</div>
</div>
  	<div class="field">
  	  <button type="submit" class="ui button bg-red" id="reg-btn" name="reg_user">Register</button>
	  </div>
  	<p>
  		Already a member? <a href="login.php">Log in</a> or <a href="home.php">Home</a>
  	</p>
  </form>
  <?php
 //AJAX
  if(isset($_POST['sup_depart'])){
		$sup_depart = $_POST['sup_depart'];
		$sql_query = "SELECT * FROM department WHERE `sup_depart`='$sup_depart'";
		$departs = mysqli_query($db,$sql_query);
		while($row = mysqli_fetch_assoc($departs)){?>
			<option value="<?php echo $row['department'];?>"><?php echo $row['department'];?></option>
	<?php ;}
  } 
  ?>
  <?php include('footer.php') ?>