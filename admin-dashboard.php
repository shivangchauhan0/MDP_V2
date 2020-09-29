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
            <button type="submit" class="ui button tiny bg-red mx-3" id="insert-id">Users</button>
            <p id="username" class="mt-0 mr-3 mt-2"><i class='user icon'></i><strong><?php echo $_SESSION['name'] ?></strong></p>
          </ul>
        </div>
 </nav>
 <div class="head-bar">
    <h2 class="my-3 mx-4">ADD NEW ID</h2>
</div>
 <form method="post" action="admin-dashboard.php" class="ui form mx-4">
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
            <label style="visibility:hidden">Designation</label>
            <button type="submit" class="ui button bg-red" id="insert-id" name="insert_tid">Insert</button>
	  </div>
    </div>
</div>
</form>
<div class="container-four mx-4">
  <table style="" class="ui celled table">
        <thead>
          <tr id="table-head">
            <th>ID</th>
            <th>Designation</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
      <?php
		$sql = "SELECT * FROM `verifyid` WHERE 1";
		$result = $db-> query($sql);
		if($result-> num_rows > 0){	
			while ($row = $result-> fetch_assoc()) { ?>
                <tr><td><?php echo $row["tid"] ?></td>
                <td><?php echo $row["designation"] ?></td>
                <td>
                <form method='post' action='admin-dashboard.php' class='ui form delete'>
							 <button onclick='return checkDelete()' type='submit' name='delete_two' value='<?php $row['id'] ?>' id='delete' class='ui mini icon button delete'>
								<i class='trash icon'></i>
							 </button>
                         </form>   
                </td>
                </tr>
		<?php	}
		}
	?>
  </tbody>
</table>
</div>
<?php include("footer.php") ?>
