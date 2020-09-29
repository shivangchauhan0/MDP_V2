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
        <h2 class="ml-2 my-0 nav-head"><i class="fa fa-desktop fa-fw" aria-hidden="true"></i> DASHBOARD</h2>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <p id="username" class="mt-0 mr-3"><i class='user icon'></i><strong><?php echo $_SESSION['name'] ?></strong></p>
          </ul>
        </div>
 </nav>

 <form method="post" action="admin-dashboard.php" class="ui form mx-2">
    <?php include('errors.php'); ?>
    <div class="fields">
      <div class="six wide field">
        <label>ID</label>
        <input placeholder="ID" name="tid" type="text" required>
      </div>
      <div class="six wide field">
        <label>Designation</label>
        <select class="ui fluid dropdown" name="designation" required>
                <option value="">Designation</option>
                <option value="Principal">Principal</option>
                <option value="Vice-Principal">Vice Principal</option>
                <option value="Dean">Dean</option>
                <option value="Hod">HOD</option>
                <option value="Professor">Professor</option>
            </select>
      </div>
      <div class="field">
		  <button type="submit" class="ui button" id="insert-id" name="insert_tid">Insert</button>
	  </div>
    </div>
</div>
</form>
<div class="container-four mx-2">
<table class="table id table-bordered">
  <thead>
	  <tr id="table-head">
      <th scope="col" >ID</th>
      <th scope="col">Designation</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      <?php
		$sql = "SELECT * FROM `verifyid` WHERE 1";
		$result = $db-> query($sql);
		if($result-> num_rows > 0){	
			while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>".$row["tid"]."</td><td>".$row["designation"]."</td>
                <td>
                <form method='post' action='admin-dashboard.php' class='ui form delete'>
							 <button onclick='return checkDelete()' type='submit' name='delete_two' value='".$row['id']."' id='delete' class='ui mini icon button delete'>
								<i class='trash icon'></i>
							 </button>
                         </form>   
                </td>
                </tr>";
			}
		}
	?>
  </tbody>
</table>
</div>
<?php include("footer.php") ?>
