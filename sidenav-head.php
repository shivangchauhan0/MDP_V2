<div class="d-flex" id="wrapper">
      <!-- Sidebar -->
      <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading my-1"><i class="fa fa-address-book fa-fw" aria-hidden="true"></i> Teacher's Diary</div>
        <div class="list-group list-group-flush">
          <a href="#" class="list-group-item list-group-item-action bg-light"
            >Dashboard <i class="fa fa-desktop fa-fw" aria-hidden="true"></i></a
          >
          <a href="#" class="list-group-item list-group-item-action bg-light"
            >Insert Record <i class='edit icon'></i></a
          >
          <a href="#" class="list-group-item list-group-item-action bg-light"
            >Show Record <i class='search icon'></i></a
          >
          <a href="#" class="list-group-item list-group-item-action bg-light"
            >Timetable <i class='table icon'></i></a
          >
          <a href="index.php?logout='1'" id="logout-btn" class="list-group-item list-group-item-action bg-light border-bottom"
            >Logout <i class='sign in alternate icon'></i></i></a
          >
        </div>
      </div>
      <!-- /#sidebar-wrapper -->
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
