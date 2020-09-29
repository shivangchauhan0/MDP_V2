<?php include("server.php") ?>
<?php include("header.php") ?>
<?php 
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
  ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <h2 class="ml-2 my-0 nav-head"><i class="fa fa-users fa-fw" aria-hidden="true"></i> USERS</h2>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <p id="username" class="mt-0 mr-3 mt-3"><i class='user icon'></i><strong><?php echo $_SESSION['name'] ?></strong></p>
        <a href="admin-dashboard.php"><button type="submit" class="ui button bg-red mx-1 my-2" id="insert-id">Add ID</button></a> 
        <a href="index.php?logout='1'"><button type="submit" class="ui button bg-red mx-1 my-2" id="insert-id">Logout</button></a> 
        </ul>
    </div>
 </nav>
<div class="container">
<table class="ui celled table my-3">
  <thead>
	  <tr id="table-head">
      <th>ID</th>
      <th>Username</th>
      <th>Name</th>
      <th>Department</th>
      <th>Sub-department</th>
      <th>Designation</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
      <?php
		$sql = "SELECT * FROM `users` WHERE 1";
		$result = $db-> query($sql);
		if($result-> num_rows > 0){	
			while ($row = $result-> fetch_assoc()) {
                if ($row["username"]=='admin' || $row["username"]=='demo') {
                    continue;
                }
               ?> 
               <tr>
                   <td><?php echo $row["tid"] ?></td>
                   <td><?php echo $row["username"]  ?></td>
                   <td><?php echo strtoupper($row["name"])  ?></td>
                   <td><?php echo $row["sup_depart"]  ?></td>
                   <td><?php echo $row["department"]  ?></td>
                   <td><?php echo $row["designation"]  ?></td>
                <td id='del'>
                <center>
                <form method='post' action='users.php' class='ui form delete'>
							 <button onclick='return checkDelete()' type='submit' name='delete_user' value='<?php echo $row['id'] ?>' id='delete' class='ui mini icon button delete'>
								<i class='trash icon'></i>
							 </button>
                         </form>
                </center>
                         
                </td>
                </tr>
		<?php	}
		}
	?>
  </tbody>
</table>
</div>
<?php include("footer.php") ?>
