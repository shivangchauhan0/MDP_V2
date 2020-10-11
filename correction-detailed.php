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
          <?php 
              $user = $_GET['id'];
              $sql = "SELECT * FROM `users` WHERE `username` = '$user'";
              $result = $db->query($sql);
              $row = $result->fetch_assoc();
            ?>
            <h2>LIST OF ALL <?php echo $_GET['unchecked'] == "true"?"UNCHECKED":"" ?> RECORDS &#8594 <?php echo strtoupper($row['name'])?></h2>
            <?php if ($_GET['unchecked'] == 'true') { ?>
                <a class="float-right" href="correction-detailed.php?id=<?php echo $_GET['id'] ?>&filter_date=<?php echo $_GET['filter_date'] ?>&filter_day=<?php echo $_GET['filter_day'] ?>&from_date=<?php echo $_GET['from_date'] ?>&till_date=<?php echo $_GET['till_date'] ?>&filter_lecture=<?php echo $_GET['filter_lecture'] ?>&limit=<?php echo $_GET['limit'] ?>"><button type="submit" class="ui button bg-red mx-1 my-2 tiny " id="insert-id">All Records</button></a>
            <?php  } else { ?>
                <a class="float-right" href="correction-detailed.php?id=<?php echo $_GET['id'] ?>&filter_date=<?php echo $_GET['filter_date'] ?>&filter_day=<?php echo $_GET['filter_day'] ?>&from_date=<?php echo $_GET['from_date'] ?>&till_date=<?php echo $_GET['till_date'] ?>&filter_lecture=<?php echo $_GET['filter_lecture'] ?>&limit=<?php echo $_GET['limit'] ?>&unchecked=true"><button type="submit" class="ui button bg-red mx-1 my-2 tiny" id="insert-id">Unchecked</button></a>
            <?php  }
              ?>
              <a class="float-right" href="correction.php?id=<?php echo $_GET['id'] ?>&unchecked=true"><button type="submit" class="ui button bg-red mx-1 my-2 tiny" id="insert-id">Brief</button></a>
            <a class="float-right" href="correction.php?id=<?php echo $_GET['id'] ?>&limit=<?php echo $_GET['limit'] ?>&unchecked=<?php echo $_GET['unchecked'] ?>"><button type="submit" class="ui button bg-red mx-1 my-2 tiny " id="insert-id">Unset Filters</button></a>
        </div>
        <?php if ($_GET['unchecked'] == 'true') { ?>
        <div class="check-form-seg">
        <form method="post" action="index.php" class="ui form check-form">
            <div class="fields">
              <div class="field">
              <label class="correction-form-label">Status</label>
                <div class="ui">
                  <input type="radio" class="radio-btn" name="done" value="1" tabindex="0" class="hidden" required>
                  <label class="correction-form-label" class="radio-label">Complete</label>
                </div>
              </div>
              <div class="field">
              <label style="visibility:hidden">Comment</label>
                <div class="ui">
                  <input type="radio" class="radio-btn" name="done" value="2" tabindex="0" class="hidden">
                  <label class="correction-form-label" class="radio-label">Incomplete</label>
                </div>
              </div>
              <div class="eleven wide field">
              <label class="correction-form-label">Comment</label>
                <input id="comment" name="comment" type="text" placeholder="">
                <input type="text" name="username" class="d-none" value="<?php echo $_GET['id']?>">
                <input type="text" name="limit" class="d-none" value="<?php echo $_GET['limit'] != "" ? $_GET['limit'] : 25?>">
                <input type="text" name="filter_date" class="d-none" value="<?php echo $_GET['filter_date'] != "" ? $_GET['filter_date'] : "empty"?>">
                <input type="text" name="filter_day" class="d-none" value="<?php echo $_GET['filter_day'] != "" ? $_GET['filter_day'] : "empty"?>">
                <input type="text" name="from_date" class="d-none" value="<?php echo $_GET['from_date'] != "" ? $_GET['from_date'] : "empty"?>">
                <input type="text" name="till_date" class="d-none" value="<?php echo $_GET['till_date'] != "" ? $_GET['till_date'] : "empty"?>">
                <input type="text" name="lecture" class="d-none" value="<?php echo $_GET['filter_lecture'] != "" ? $_GET['filter_lecture'] : "empty"?>">
              </div>
              <div class="field">
                <label style="visibility:hidden">Comment</label>
                <button type="submit" name="check"  id="done" class="ui button bg-red">
                 Check
                </button>
              </div>
            </div>
          </form>
        </div>
        <?php  } ?>
     
          <?php 
            $username = $_GET['id'];
            $hod_true ="<i class=\"circle yellow icon\"></i>";
            $hod_false = "<i class=\"circle outline yellow icon\"></i>";
            $incomp = "<i class=\"circle red icon\"></i>";
            $dean_true="<i class=\"circle blue icon\"></i>";
            $dean_false="<i class=\"circle outline blue icon\"></i>";
            $principal_true="<i class=\"circle green icon\"></i>";	
            $principal_false="<i class=\"circle outline green icon\"></i>";	
            // ----------------FILTER VARIABLES-----------------
            $unchecked = $_GET['unchecked'] != "" ? $_GET['unchecked'] : "false";
            $limit = $_GET['limit'] != "" ? $_GET['limit'] : 25;
            $filter_date = $_GET['filter_date'] != "" ? $_GET['filter_date'] : "empty"; 
            $filter_day = $_GET['filter_day'] != "" ? $_GET['filter_day'] : ""; 
            $from_date = $_GET['from_date'] != "" ? $_GET['from_date'] : ""; 
            $till_date = $_GET['till_date'] != "" ? $_GET['till_date'] : ""; 
            $filter_lecture = $_GET['filter_lecture'] != "" ? $_GET['filter_lecture'] : ""; 
            // ------------------------------------------------
            // ----------------FILTER QUERIES-----------------
            if ($filter_date != "empty") {
              $start_sql = "SELECT * FROM `notes` WHERE `username`='$username' AND `date`='$filter_date'";
            } else if ($filter_day != "") {
              $start_sql = "SELECT * FROM `notes` WHERE `username`='$username' AND `day`='$filter_day'";
            } else if ($from_date != "") {
              $start_sql = "SELECT * FROM `notes` WHERE `username`='$username' AND `date` BETWEEN '$from_date' AND '$till_date'";
            } else if ($filter_lecture != "") {
              $start_sql = "SELECT * FROM `notes` WHERE `username`='$username' AND `lecture`='$filter_lecture'";
            } else {
              $start_sql = "SELECT * FROM `notes` WHERE `username`='$username'";
            }
            if ($unchecked == "true") {
              if ($_SESSION['designation'] == 'Hod') {
                $mid_sql = " AND `hod` = '0' AND `principal`='0' ";
              } else if ($_SESSION['designation'] == 'Dean') {
                $mid_sql = " AND `dean` = '0' AND `principal`='0' ";
              } else if ($_SESSION['designation'] == 'Principal' || $_SESSION['designation'] == 'Vice-Principal') {
                $mid_sql = " AND `principal`='0' ";
              }
          } else {
              $mid_sql="";
          }
            $end_sql = "ORDER BY srno DESC LIMIT $limit";
            $sql = $start_sql.$mid_sql.$end_sql;
            // -----------------------------------------------
            $result = $db->query($sql);
            if ($result->num_rows > 0) { ?>
             <table class="ui celled table"id="show-records-table">
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
                  <th>STATUS</th>
                  <?php if ($_GET['unchecked'] != 'true') { ?>
                  <th>UNCHECK</th>	  
                  <?php  } ?>  
                </tr>
              </thead>
              <tbody>
            <?php 
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
                <td><?php echo ($row["hod"] == 1 ?  $hod_true : ($row["hod"] == 2 ? $incomp : $hod_false))." ".($row["dean"] == 1 ? $dean_true : ($row["dean"] == 2 ? $incomp : $dean_false))." ".($row["principal"] == 1 ? $principal_true : ($row["principal"] == 2 ? $incomp : $principal_false))?></td>
              <?php if ($_GET['unchecked'] != 'true') { ?>
                <td class="no-pad" >
                  <form method="post" action="index.php" class="ui form delete">
                    <button onclick="return checkUndo()" type="submit" name="uncheck" value="<?php echo $row['srno']?>" id="undo" class="ui mini icon button">
                    <i class="redo alternate icon"></i>
                    </button>
                  </form>
                </td> 
              <?php  } ?>
            </tr>
          <?php
        } if ($_GET['unchecked'] != 'true') { 
          $username = $_GET['id'];
          $comm_sql = "SELECT * FROM `notes` WHERE `username`='$username' AND (`hod_com` != '' OR `dean_com` != '' OR `principal_com` != '')";
          $comm_res = $db->query($comm_sql);
          if ($comm_res->num_rows > 0) {
           while ($comm = $comm_res->fetch_assoc()) {
              if ($comm["hod_com"] != "") { ?>
                <tr>
                  <td colspan='13'> <span style='color:#FBBD08'>HOD &#8594; <?php echo $comm["hod_com"] ?></span></td>
                  <td>
                      <?php if ($_SESSION["designation"] == "Hod") { ?>
                        <form method="post" action="index.php" class="ui form delete">
                          <button onclick="return checkDelete()" type="submit" name="del_com" value='<?php echo $comm["srno"] ?>' id="delete" class="ui mini icon button delete">
                            <i class="trash icon"></i>
                          </button>
                        </form>
                      <?php } ?>
                  </td>
                </tr>
            <?php }
              if ($comm["dean_com"] != "") { ?>
              <tr>
                <td colspan='13'><span style='color:#2185D0'>DEAN &#8594; <?php echo $comm["dean_com"] ?></span></td>
                <td>
                    <?php if ($_SESSION["designation"] == "Dean") { ?>
                      <form method="post" action="index.php" class="ui form delete">
                            <button onclick="return checkDelete()" type="submit" name="del_com" value='<?php echo $comm["srno"] ?>' id="delete" class="ui mini icon button delete">
                              <i class="trash icon"></i>
                            </button>
                      </form>
                    <?php } ?>
                </td>
              </tr>
              <?php }
              if ($comm["principal_com"] != "") { ?>
              <tr>
                <td colspan='13'><span style='color:#21BA45'>PRINCIPAL &#8594; <?php echo $comm["principal_com"] ?> </span></td>
                <td>
                  <?php if ($_SESSION['designation'] == 'Principal' || $_SESSION['designation'] == 'Vice-Principal') { ?>
                        <form method="post" action="index.php" class="ui form delete">
                              <button onclick="return checkDelete()" type="submit" name="del_com" value='<?php echo $comm["srno"] ?>' id="delete" class="ui mini icon button delete">
                                <i class="trash icon"></i>
                              </button>
                        </form>
                  <?php } ?>
                </td>
              </tr>
            <?php  }
              }
            }
          }
        }
              else {
                if ($_GET['unchecked'] == 'true') {
                  echo "<div class='alert alert-danger my-4' role='alert'>
                        No Unchekced records found!
                        </div>";
                } else {
                  echo "<div class='alert alert-danger my-4' role='alert'>
                        No records found!
                        </div>";
                }
              }
          ?>
        </tbody>
      </table>
      <div class="filter-grid my-2">
        <div>
          <form method="get" action="correction-detailed.php" class="ui form my-3 mx-2">
            <div class="fields">
              <div class="thirteen wide field ">
                <input type="text" name="filter_date" class="search-bar my-1" placeholder="Date" onfocus="(this.type='date')" onblur="(this.type='text')" required>
                <input type="text" name="id" class="d-none" value="<?php echo $_GET['id']?>">
              </div>
              <button type="submit" class="circular ui inline icon button search-btn my-1" name="limit" value="<?php echo $limit ?>">
                <i class="search icon"></i>
              </button>
            </div>
          </form>
        </div>
        <div>
        <form method="get" action="correction-detailed.php" class="ui form my-3 mx-2">
          <div class="fields">
          <div class="thirteen wide field input">
                      <select class="ui fluid dropdown search-day my-1" name="filter_day" required>
                          <option value="">Day</option>
                          <option value="Monday">Monday</option>
                          <option value="Tuesday">Tuesday</option>
                          <option value="Wednesday">Wednesday</option>
                          <option value="Thrusday">Thrusday</option>
                          <option value="Friday">Friday</option>
                          <option value="Saturday">Saturday</option>
                      </select>
                  <input type="text" name="id" class="d-none" value="<?php echo $_GET['id']?>">
                  </div>
              <button type="submit" class="circular ui inline icon button search-btn my-1" name="limit" value="<?php echo $limit ?>">
                <i class="search icon"></i>
              </button>
            </div>
          </form>
        </div>
        <div>
          <form method="get" action="correction-detailed.php" class="ui form my-3 mx-2">
            <div class="fields between">
              <div class="seven wide field ">
                <input type="text" name="from_date" class="search-bar my-1" placeholder="From" onfocus="(this.type='date')" onblur="(this.type='text')" required>
                <input type="text" name="id" class="d-none" value="<?php echo $_GET['id']?>">
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
        <form method="get" action="correction-detailed.php" class="ui form my-3 mx-2">
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
                <input type="text" name="id" class="d-none" value="<?php echo $_GET['id']?>">
              </div>
              <button type="submit" class="circular ui inline icon button search-btn my-1" name="limit" value="<?php echo $limit ?>">
                <i class="search icon"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
        <form method="get" action="correction-detailed.php" class="ui form row-form">
          <div class="inline fields">
            <label> Records per page</label>
            <div class="seven wide field">
              <input type="number" name="limit" value="<?php echo $limit ?>">
              <input type="text" name="id" class="d-none" value="<?php echo $_GET['id']?>">
            </div>
              <button id="btn" class="ui button bg-red my-2" type="submit">Submit</button>
          </div>
        </form>
    </div>
<?php include("sidenav-foot.php") ?>
<?php include("footer.php") ?>
