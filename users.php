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
        <?php if ($_GET['filter_ID'] != "" || $_GET['filter_username'] != "" || $_GET['filter_name'] != "" || $_GET['filter_designation'] != "") {?>
            <a href="users.php"><button type="submit" class="ui button bg-red mx-1 my-2" id="insert-id">Users</button></a> 
        <?php } ?>
        <a href="index.php?logout='1'"><button type="submit" class="ui button bg-red mx-1 my-2" id="insert-id">Logout</button></a> 
        </ul>
    </div>
 </nav>
<div class="container">
<div class="filter-grid-users my-2">
        <div>
          <form method="get" action="users.php" class="ui form my-3 mx-2">
            <div class="fields">
              <div class="thirteen wide field ">
              <input type="text" name="filter_ID" class="search-bar my-1" placeholder="Search by ID" required>
              </div>
              <button type="submit" class="circular ui inline icon button search-btn my-1">
                <i class="search icon"></i>
              </button>
            </div>
          </form>
        </div>
        <div>
            <form method="get" action="users.php" class="ui form my-3 mx-2">
                <div class="fields">
                    <div class="thirteen wide field">
                        <input type="text" name="filter_username" class="search-bar my-1" placeholder="Search by username" required>
                    </div>
                    <button type="submit" class="circular ui inline icon button search-btn my-1">
                    <i class="search icon"></i>
                    </button>
                </div>
            </form>
        </div>
        <div>
            <form method="get" action="users.php" class="ui form my-3 mx-2">
                <div class="fields">
                    <div class="thirteen wide field">
                        <input type="text" name="filter_name" class="search-bar my-1" placeholder="Search by name" required>
                    </div>
                    <button type="submit" class="circular ui inline icon button search-btn my-1">
                    <i class="search icon"></i>
                    </button>
                </div>
            </form>
        </div>
        <div>
        <form method="get" action="users.php" class="ui form my-3 mx-2">
          <div class="fields">
            <div class="thirteen wide field input">
              <select class="ui fluid dropdown search-day my-1" name="filter_designation" required>
                          <option value="">Search by Designation</option>
                          <option value="Principal">Principal</option>
                          <option value="Vice-Principal">Vice Principal</option>
                          <option value="Dean">Dean</option>
                          <option value="Hod">HOD</option>
                          <option value="Professor">Assistant Professor</option>
                </select>
              </div>
              <button type="submit" class="circular ui inline icon button search-btn my-1">
                <i class="search icon"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
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
        // ----------------FILTER VARIABLES-----------------
        $filter_ID = $_GET['filter_ID'] != "" ? $_GET['filter_ID'] : "empty"; 
        $filter_username = $_GET['filter_username'] != "" ? $_GET['filter_username'] : ""; 
        $filter_name = $_GET['filter_name'] != "" ? $_GET['filter_name'] : ""; 
        $filter_designation = $_GET['filter_designation'] != "" ? $_GET['filter_designation'] : ""; 
        // ------------------------------------------------
        // ----------------FILTER QUERIES-----------------
        if ($filter_ID != "empty") {
            $sql = "SELECT * FROM `users` WHERE `tid`='$filter_ID'";
        } else if ($filter_username != "") {
            $sql = "SELECT * FROM `users` WHERE `username` LIKE '$filter_username%'";
        } else if ($filter_name != "") {
            $sql = "SELECT * FROM `users` WHERE `name` LIKE '$filter_name%'";
        } else if ($filter_designation != "") {
            $sql = "SELECT * FROM `users` WHERE `designation` LIKE '$filter_designation'";
        } else {
            $sql = "SELECT * FROM `users` WHERE 1";
        }
        // -----------------------------------------------
		// $sql = "SELECT * FROM `users` WHERE 1";
		$result = $db-> query($sql);
		if($result-> num_rows > 0){	
			while ($row = $result-> fetch_assoc()) {
                if ($row["username"]=='admin') {
                    continue;
                }
               ?> 
               <tr>
                   <td><?php echo $row["tid"] ?></td>
                   <td><?php echo $row["username"]  ?></td>
                   <td><?php echo strtoupper($row["name"])  ?></td>
                   <td><?php echo $row["sup_depart"]  ?></td>
                   <td><?php echo $row["department"]  ?></td>
                   <td><?php echo $row["designation"] == "Professor"?"Assistant Professor" : $row["designation"]  ?></td>
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
