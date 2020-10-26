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
        <a href="users.php"><button type="submit" class="ui button bg-red mx-1 my-2" id="insert-id">Users</button></a> 
        <a href="index.php?logout='1'"><button type="submit" class="ui button bg-red mx-1 my-2" id="insert-id">Logout</button></a> 
        </ul>
    </div>
 </nav>
 <div class="nav-btns mt-1 ml-1">
      <a href="admin-dashboard.php"><button type="submit" class="ui button bg-red mx-1 my-2 tiny" id="insert-id">Add ID</button></a> 
        <?php if ($_GET['filter_ID'] != "" || $_GET['filter_username'] != "" || $_GET['filter_name'] != "" || $_GET['filter_designation'] != "") {?>
            <a href="users.php"><button type="submit" class="ui button bg-red mx-1 my-2 tiny" id="insert-id">Users</button></a> 
        <?php } ?>
        <a href="index.php?logout='1'"><button type="submit" class="ui button bg-red mx-1 my-2 tiny" id="insert-id">Logout</button></a>
 </div>
 <div class="user-delete-con pt-5">
   <center>
   <?php 
        $id = $_GET['id'];
        $username = $_GET['username'];
   ?>
      <h1><?php echo $username?></h1>
      <form method='post' action='users.php' class='ui form delete'>
          <button onclick='return checkDelete()' type='submit' name='delete_user' value='<?php echo $id ?>' id='' class='ui bg-red button delete'>
            <i class='trash icon'></i> Delete user
          </button>
      </form>
      <form method='post' action='server.php' class='ui form delete'>
          <button onclick='return checkRecordDelete()' type='submit' name='delete_user_records' value='<?php echo $username ?>' id='' class='ui bg-red button delete'>
            <i class='trash icon'></i> Delete user's records
          </button>
      </form>
      <form method='post' action='users.php' class='ui form delete'>
          <button onclick='return checkTimetableDelete()' type='submit' name='delete_user_timetable' value='<?php echo $username ?>' id='' class='ui bg-red button delete'>
            <i class='trash icon'></i> Delete user's timetable
          </button>
      </form>
   </center>
 </div>
<?php include("footer.php") ?>
