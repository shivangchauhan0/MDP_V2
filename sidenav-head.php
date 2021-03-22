<div class="d-flex" id="wrapper">
      <!-- Sidebar -->
      <div class="bg-light border-right display-none-print" id="sidebar-wrapper">
        <div class="sidebar-heading my-1"><i class="fa fa-address-book fa-fw" aria-hidden="true"></i> Teacher's Diary</div>
        <div class="list-group list-group-flush">
          <?php if ($_SESSION['designation'] == "Hod" OR $_SESSION['ischeck'] == "true" ) { ?>
            <a href="asst-professors.php" class="list-group-item list-group-item-action bg-light"
              >Records Correction <i class="fa fa-pen fa-fw" aria-hidden="true"></i></a
            >
          <?php } elseif ($_SESSION['designation'] == "Dean") { ?>
            <a href="sub-departments.php" class="list-group-item list-group-item-action bg-light"
              >Records Correction <i class="fa fa-pen fa-fw" aria-hidden="true"></i></a
            >
          <?php } elseif ($_SESSION['designation'] == "Principal") { ?>
            <a href="departments.php" class="list-group-item list-group-item-action bg-light"
              >All Departments <i class="fa fa-users fa-fw" aria-hidden="true"></i></a
            >
            <a href="sub-departments.php?sup_depart=Arts and Social Sciences" class="list-group-item list-group-item-action bg-light"
              >Arts and SSc. <i class="fa fa-briefcase fa-fw" aria-hidden="true"></i></a
            >
            <a href="sub-departments.php?sup_depart=Physical Science" class="list-group-item list-group-item-action bg-light"
              >Physical Science <i class="fa fa-laptop fa-fw" aria-hidden="true"></i></a
            >
            <a href="sub-departments.php?sup_depart=Life Science" class="list-group-item list-group-item-action bg-light"
              >Life Science <i class="fa fa-flask fa-fw" aria-hidden="true"></i></a
            >
            <a href="sub-departments.php?sup_depart=Commerce and Management" class="list-group-item list-group-item-action bg-light"
              >Commerce <i class="fa fa-credit-card fa-fw" aria-hidden="true"></i></a
            >
            <a href="sub-departments.php?sup_depart=Education" class="list-group-item list-group-item-action bg-light"
              >Education <i class="fa fa-bookmark fa-fw" aria-hidden="true"></i></a
            >
          <?php } ?>
          <?php if ($_SESSION['designation'] == "Vice-Principal") {
              $check_vp_sql = "SELECT * FROM `users` WHERE `designation`='Vice-Principal'";
              $result = $db->query($check_vp_sql);
              $row = $result->fetch_assoc();
              if ($row['tid'] == "enable") { ?>
            <a href="departments.php" class="list-group-item list-group-item-action bg-light">
              Records Correction <i class="fa fa-pen fa-fw" aria-hidden="true"></i>
            </a>
          <?php }
            } ?>
          <?php if ($_SESSION['designation'] != "Principal") { ?>
          <a href="index.php" class="list-group-item list-group-item-action bg-light">
            Dashboard <i class="fa fa-desktop fa-fw" aria-hidden="true"></i>
          </a>
          <a href="insert-record.php" class="list-group-item list-group-item-action bg-light">
            Insert Record <i class='edit icon'></i>
          </a>
          <a href="show-records.php" class="list-group-item list-group-item-action bg-light">
            Show Records <i class='search icon'></i>
          </a>
          <a href="timetable.php" class="list-group-item list-group-item-action bg-light">
            Timetable <i class='table icon'></i>
          </a>
          <a href="timetable-new.php" class="list-group-item list-group-item-action bg-light">
             Beta Timetable <i class='table icon'></i>
          </a>
          <?php }?>
          <a href="index.php?logout='1'" id="logout-btn" class="list-group-item list-group-item-action bg-light border-bottom">
            Logout <i class='sign in alternate icon'></i>
          </a>
        </div>
      </div>
      <!-- /#sidebar-wrapper -->
<?php 
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: home.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: home.php");
  }
?>
