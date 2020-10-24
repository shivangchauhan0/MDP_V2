<?php include("header.php") ?>
<?php include("sidenav-head.php") ?>
 <!-- Page Content -->
 <div id="page-content-wrapper">
        <nav
          class="navbar navbar-expand-lg navbar-light bg-light border-bottom"
        >
        <button class="ui button bg-red small" id="menu-toggle"><i class="fa fa-bars mr-1" aria-hidden="true"></i> Menu</button>
        <h2 class="ml-2 my-0 nav-head">RECORDS</h2>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <p id="username" class="mt-0 mr-3"><i class='user icon'></i><strong><?php echo $_SESSION['name'] ?></strong></p>
          </ul>
        </div>
 </nav>
    <div class="container-fluid my-3">
      <div class="head-bar-sec">
        <h2>LIST OF RECORDS</h2>
        <a onclick="window.print()" class="float-right display-none-print" href="#"><button type="submit" class="ui button bg-red mx-1 my-2" id="insert-id">Print Report</button></a>
      </div>
      <table class="ui celled table" id="show-records-table">
        <thead>
          <tr id="table-head">
            <th>DATE</th>
            <th>DAY</th>
            <th>LECTURE</th>
            <th>CLASS</th>
            <th>SUBJECT</th>
            <th>CLASS TYPE</th>
            <th>METHODOLOGY</th>
            <th>TEACHING AID</th>
            <th>CONTENT</th>	  
            <th>CLASS ACTIVITY</th>	  
            <th>ATTENDANCE</th>	  
            <th>OTHER ACTIVITY</th>	  
            <th>REMARK</th>	  
            <th class="display-none-print">E || D</th>	  
          </tr>
        </thead>
        <tbody>
          <?php 
            $username = $_SESSION['username'];
            // $user=$_GET['username'];	
            // ----------------FILtER VARIABLES-----------------
              $limit = $_GET['limit'] != "" ? $_GET['limit'] : 25;
              $filter_date = $_GET['filter_date'] != "" ? $_GET['filter_date'] : "empty"; 
              $filter_day = $_GET['filter_day'] != "" ? $_GET['filter_day'] : ""; 
              $from_date = $_GET['from_date'] != "" ? $_GET['from_date'] : ""; 
              $till_date = $_GET['till_date'] != "" ? $_GET['till_date'] : ""; 
              $filter_lecture = $_GET['filter_lecture'] != "" ? $_GET['filter_lecture'] : ""; 
            // ------------------------------------------------
            // ----------------FILTER QUERIES-----------------
            if ($filter_date != "empty") {
              $sql = "SELECT * FROM `notes` WHERE `username`='$username' AND `date`='$filter_date'  ORDER BY srno DESC LIMIT $limit ";
            } else if ($filter_day != "") {
              $sql = "SELECT * FROM `notes` WHERE `username`='$username' AND `day`='$filter_day'  ORDER BY srno DESC LIMIT $limit ";
            } else if ($from_day != "") {
              $sql = "SELECT * FROM `notes` WHERE `username`='$username' AND `date` BETWEEN '$from_date' AND '$till_date' ORDER BY srno DESC LIMIT $limit ";
            } else if ($filter_lecture != "") {
              $sql = "SELECT * FROM `notes` WHERE `username`='$username' AND `lecture`='$filter_lecture'  ORDER BY srno DESC LIMIT $limit ";
            } else {
              $sql = "SELECT * FROM `notes` WHERE `username`='$username' ORDER BY srno DESC LIMIT $limit ";
            }
            // -----------------------------------------------
            $result = $db->query($sql);
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                $date = $row["date"];
                $timestamp = strtotime($date);
                $formatted_date = date("d-m-Y", $timestamp);
                ?>
            <tr>
                <td><?php echo  $formatted_date ?></td>
                <td><?php echo  $row["day"]?></td>
                <td><?php echo  $row["lecture"] ?></td>
                <td><?php echo  $row["class"] ?></td>
                <td><?php echo  $row["subject"] ?></td>
                <td><?php echo  $row["theory/prac"] ?></td>
                <td><?php echo  $row["methodology"] ?></td>
                <td><?php echo  $row["teaching_aid"] ?></td>
                <td><?php echo  $row["content"] ?></td>
                <td><?php echo  $row["class_activity"] ?></td>
                <td><?php echo  $row["attendance"] ?></td>
                <td><?php echo  $row["other_activity"] ?></td>
                <td><?php echo  $row["remark"] ?></td>
                <td class="display-none-print">
                  <?php if($row["principal"]== 1) { ?>
                    <a class="ui icon button disabled" id="edit" href="edit-record.php?id=<?php echo $row["srno"] ?>"><i class="edit icon"></i></a>
                    <form method="post" action="show-records.php" class="ui form delete">
                      <button onclick="return checkDelete()" type="submit" name="delete" value='<?php echo $row["srno"] ?>' id="delete" class="ui mini icon button disabled delete">
                        <i class="trash icon"></i>
                      </button>
                    </form>
                    <?php }else { ?>
                    <a class="ui icon" id="edit" href="edit-record.php?id=<?php echo $row["srno"] ?>"><i class="edit icon"></i></a>
                    <form method="post" action="show-records.php" class="ui form delete">
                      <button onclick="return checkDelete()" type="submit" name="delete" value='<?php echo $row["srno"] ?>' id="delete" class="ui mini icon button delete">
                        <i class="trash icon"></i>
                      </button>
                    </form>
                  <?php } ?>
                </td>
            </tr>
          <?php
        }
        $username = $_SESSION['username'];
        $comm_sql = "SELECT * FROM `notes` WHERE `username`='$username' AND (`hod_com` != '' OR `dean_com` != '' OR `principal_com` != '')";
        $comm_res = $db->query($comm_sql);
        if ($comm_res->num_rows > 0) {
         while ($comm = $comm_res->fetch_assoc()) {
                 if ($comm["hod_com"] != "") {
                 echo "<tr class='display-none-print'><td colspan='14'> <span style='color:#FBBD08'>HOD &#8594; ".$comm["hod_com"]."</span></td></tr>";
                 }
                 if ($comm["dean_com"] != "") {
                 echo "<tr class='display-none-print'><td colspan='14'><span style='color:#2185D0'>DEAN &#8594; ".$comm["dean_com"]."</span></td></tr>";
                 }
                 if ($comm["principal_com"] != "") {
                 echo "<tr class='display-none-print'><td colspan='14'><span style='color:#21BA45'>PRINCIPAL &#8594; ".$comm["principal_com"]."</span></td></tr>";
                 }
               }
             }
              }
              else {
                echo "<div class='alert alert-danger my-2' role='alert'>
                No records found!
              </div>";
              }
          ?>
        </tbody>
      </table>
      <div class="filter-grid my-2 display-none-print">
        <div>
          <form method="get" action="show-records.php" class="ui form my-3 mx-2">
            <div class="fields">
              <div class="thirteen wide field ">
              <input type="text" name="filter_date" class="search-bar my-1" placeholder="Date" onfocus="(this.type='date')" onblur="(this.type='text')" required>
              </div>
              <button type="submit" class="circular ui inline icon button search-btn my-1" name="limit" value="<?php echo $limit ?>">
                <i class="search icon"></i>
              </button>
            </div>
          </form>
        </div>
        <div>
        <form method="get" action="show-records.php" class="ui form my-3 mx-2">
          <div class="fields">
          <div class="thirteen wide field input">
                      <select class="ui fluid dropdown search-day my-1" name="filter_day" required>
                          <option value="">Day</option>
                          <option value="Monday">Monday</option>
                          <option value="Tuesday">Tuesday</option>
                          <option value="Wednesday">Wednesday</option>
                          <option value="Thursday">Thursday</option>
                          <option value="Friday">Friday</option>
                          <option value="Saturday">Saturday</option>
                      </select>
                  </div>
              <button type="submit" class="circular ui inline icon button search-btn my-1" name="limit" value="<?php echo $limit ?>">
                <i class="search icon"></i>
              </button>
            </div>
          </form>
        </div>
        <div>
          <form method="get" action="show-records.php" class="ui form my-3 mx-2">
            <div class="fields between">
              <div class="seven wide field ">
              <input type="text" name="from_date" class="search-bar my-1" placeholder="From" onfocus="(this.type='date')" onblur="(this.type='text')" required>
              </div>
              <i class="arrows alternate horizontal icon" id="between-arrow"></i>
              <div class="seven wide field ">
              <input type="text" name="till_date" class="search-bar my-1" placeholder="Till" onfocus="(this.type='date')" onblur="(this.type='text')" required>
              </div>
              <button type="submit" class="circular ui inline icon button search-btn my-1" name="limit" value="<?php echo $limit ?>">
                <i class="search icon"></i>
              </button>
            </div>
          </form>
        </div>
        <div>
        <form method="get" action="show-records.php" class="ui form my-3 mx-2">
          <div class="fields">
            <div class="thirteen wide field input">
              <select class="ui fluid dropdown search-day my-1" name="filter_lecture" required>
                <option value="">lecture</option>
                <option value="First">First</option>
                <option value="Second">Second</option>
                <option value="Third">Third</option>
                <option value="Fourth">Fourth</option>
                <option value="Fifth">Fifth</option>
                <option value="Sixth">Sixth</option>
                <option value="Seventh">Seventh</option>
                </select>
              </div>
              <button type="submit" class="circular ui inline icon button search-btn my-1" name="limit" value="<?php echo $limit ?>">
                <i class="search icon"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
        <form method="get" action="show-records.php" class="ui form row-form display-none-print">
          <div class="inline fields">
            <label class="mb-1"> Records per page</label>
            <div class="seven wide field" id="id-input">
              <input type="number" name="limit" value="<?php echo $limit ?>">
            </div>
              <button id="btn" class="ui button bg-red my-2" type="submit">Submit</button>
          </div>
        </form>
    </div>
<?php include("sidenav-foot.php") ?>
<?php include("footer.php") ?>
