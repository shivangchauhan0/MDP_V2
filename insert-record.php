<?php include("header.php") ?>
<?php include("sidenav-head.php") ?>

 <!-- Page Content -->
 <div id="page-content-wrapper">
        <nav
          class="navbar navbar-expand-lg navbar-light bg-light border-bottom"
        >
        <button class="ui button bg-red small" id="menu-toggle"><i class="fa fa-bars mr-1" aria-hidden="true"></i> Menu</button>
        <h2 class="ml-2 my-0 nav-head">RECORD <span id="date-today" class="mx-2">[<?php date_default_timezone_set('Asia/Kolkata'); echo date('d-m-Y')?>]</span></h2>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <p id="username" class="mt-0 mr-3"><i class='user icon'></i><strong><?php echo $_SESSION['name'] ?></strong></p>
          </ul>
        </div>
 </nav>
    <div class="container-fluid my-3">
        <form method="get" action="insert-record.php" class="ui form note-form">
            <div class="fields">
                <div class="four wide field">
                    <label class="labels">Date</label>
                    <input type="text" name="date" placeholder="MM/DD/YYYY" onfocus="(this.type='date')" onblur="(this.type='text')" required> 
                </div>
                <div class="field">
                    <label style="visibility:hidden" class="labels">Date</label>
                    <button id="btn" class="ui button bg-red" type="submit">Submit</button>
                </div>
            </div>
        </form>
      <div class="rec-forms">
        <?php 
          $current_user = $_SESSION['username'];
          date_default_timezone_set('Asia/Kolkata');
          $today = date('Y-m-d');
          $dayOfWeek = date("l", strtotime($today));
          if ($dayOfWeek == "Monday") {
            $sql_two = "SELECT c1,s1,c2,s2,c3,s3,c4,s4,c5,s5,c6,s6,c7,s7 FROM `timetable` WHERE `username`= '$current_user'";
          } else if ($dayOfWeek == "Tuesday") {
            $sql_two = "SELECT c8,s8,c9,s9,c10,s10,c11,s11,c12,s12,c13,s13,c14,s14 FROM `timetable` WHERE `username`= '$current_user'";
          } else if ($dayOfWeek == "Wednesday") {
            $sql_two = "SELECT c15,s15,c16,s16,c17,s17,c18,s18,c19,s19,c20,s20,c21,s21 FROM `timetable` WHERE `username`= '$current_user'";
          } else if ($dayOfWeek == "Thursday") {
            $sql_two = "SELECT c22,s22,c23,s23,c24,s24,c25,s25,c26,s26,c27,s27,c28,s28 FROM `timetable` WHERE `username`= '$current_user'";
          } else if ($dayOfWeek == "Friday") {
            $sql_two = "SELECT c29,s29,c30,s30,c31,s31,c32,s32,c33,s33,c34,s34,c35,s35 FROM `timetable` WHERE `username`= '$current_user'";
          } else if ($dayOfWeek == "Saturday") {
            $sql_two = "SELECT c36,s36,c37,s37,c38,s38,c39,s39,c40,s40,c41,s41,c42,s42 FROM `timetable` WHERE `username`= '$current_user'";
          }
          $sql = "SELECT * FROM `notes` WHERE `username`= '$current_user' AND `date`='$today'";
          $result = $db-> query($sql);
          $result_two = $db-> query($sql_two);
          $table = $result_two-> fetch_assoc();
        ?>
        <form class="ui form">
          <div class="fields">
            <div class="field">
              <label>First name</label>
              <input type="text" placeholder="First Name">
            </div>
            <div class="field">
              <label>Middle name</label>
              <input type="text" placeholder="Middle Name">
            </div>
            <div class="field">
              <label>Last name</label>
              <input type="text" placeholder="Last Name">
            </div>
          </div>
        </form>
      </div>
    </div>
<?php include("sidenav-foot.php") ?>
<?php include("footer.php") ?>
