<?php include("header.php") ?>
<?php include("sidenav-head.php") ?>

 <!-- Page Content -->
 <div id="page-content-wrapper">
        <nav
          class="navbar navbar-expand-lg navbar-light bg-light border-bottom"
        >
        <button class="ui button bg-red small" id="menu-toggle"><i class="fa fa-bars mr-1" aria-hidden="true"></i> Menu</button>
        <h2 class="ml-2 my-0 nav-head">CORRECTION</h2>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <p id="username" class="mt-0 mr-3"><i class='user icon'></i><strong><?php echo $_SESSION['name'] ?></strong></p>
          </ul>
        </div>
 </nav>
 <!-- LATEST UPDATE -->
 <?php 
    // $user = $_SESSION['username'];
    // // HOD check date
    // $hod_cd_sql = "SELECT * FROM `notes` WHERE `username`='$user' AND `hod_checkdate` != '' ORDER BY srno DESC LIMIT 1 ";
    // $hod_cd = $db->query($hod_cd_sql);
    // $hod_cd = $hod_cd->fetch_assoc();
    // $hod_cd = isset($hod_cd['hod_checkdate']) ? $hod_cd['hod_checkdate'] : "False";
    // if ($hod_cd == "False") {
    //   $formatted_date_dean = "(Not checked yet)";
    // } else {
    //   $timestamp_hod = strtotime($hod_cd);
    //   $formatted_date_hod = date("M j, Y", $timestamp_hod);
    // }
    // // DEAN check date
    // $dean_cd_sql = "SELECT * FROM `notes` WHERE `username`='$user' AND `dean_checkdate` != '' ORDER BY srno DESC LIMIT 1 ";
    // $dean_cd = $db->query($dean_cd_sql);
    // $dean_cd = $dean_cd->fetch_assoc();
    // $dean_cd = isset($dean_cd['dean_checkdate']) ? $dean_cd['dean_checkdate'] : "False";
    // if ($dean_cd == "False") {
    //   $formatted_date_dean = "(Not checked yet)";
    // } else {
    //   $timestamp_dean = strtotime($dean_cd);
    //   $formatted_date_dean = date("M j, Y", $timestamp_dean);
    // }
    
    // // PRINCIPAL check date
    // $principal_cd_sql = "SELECT * FROM `notes` WHERE `username`='$user' AND `principal_checkdate` != '' ORDER BY srno DESC LIMIT 1 ";
    // $principal_cd = $db->query($principal_cd_sql);
    // $principal_cd = $principal_cd->fetch_assoc();
    // $principal_cd = isset($principal_cd['principal_checkdate']) ? $principal_cd['principal_checkdate'] : "False";
    // if ($principal_cd == "False") {
    //   $formatted_date_principal = "(Not checked yet)";
    // } else {
    //   $timestamp_principal = strtotime($principal_cd);
    //   $formatted_date_principal = date("M j, Y", $timestamp_principal);
    // }
  ?>
  <!-- <?php if ($hod_cd != '' OR $dean_cd != '' OR $principal_cd != '') { ?>
    <div class="check-dates">
      <div id="s" class='alert alert-warning mx-3 my-2' role='alert'>Last checked by <strong>HOD</strong> on <strong><?php echo $formatted_date_hod ?></strong></div>
      <div class='alert alert-primary mx-3 my-2' role='alert'>Last checked by <strong>Dean</strong> on <strong><?php echo $formatted_date_dean ?></strong></div>
      <div class='alert alert-success mx-3 my-2' role='alert'>Last checked by <strong>Principal</strong> on <strong><?php echo $formatted_date_principal ?></strong></div>
    </div>
  <?php  } ?> -->
    <div class="container-fluid my-3">
        <div class="head-bar-sec">
            <h2>LIST OF ALL <?php echo (isset($_GET['unchecked']) && $_GET['unchecked']) == "true"? "UNCHECKED":"" ?> RECORDS &#8594 <?php echo $_GET['id']?></h2>
            <?php if ((isset($_GET['unchecked']) && $_GET['unchecked'] == 'true')) { ?>
                <a class="float-right" href="correction.php?id=<?php echo isset($_GET['id']) ? $_GET['id'] : "" ; ?>&filter_date=<?php echo isset($_GET['filter_date']) ? $_GET['filter_date'] : "" ; ?>&filter_day=<?php echo isset($_GET['filter_day']) ? $_GET['filter_day'] : "" ; ?>&from_date=<?php echo isset($_GET['from_date']) ? $_GET['from_date'] : "" ; ?>&till_date=<?php echo isset($_GET['till_date']) ? $_GET['till_date'] : "";?>&filter_lecture=<?php echo isset($_GET['filter_lecture']) ? $_GET['filter_lecture'] : "";?>&limit=<?php echo isset($_GET['limit']) ? $_GET['limit'] : "";?>"><button type="submit" class="ui button bg-red mx-1 my-2 tiny " id="insert-id">All Records</button></a>
            <?php  } else { ?>
                <a class="float-right" href="correction.php?id=<?php echo isset($_GET['id']) ? $_GET['id'] : "" ; ?>&filter_date=<?php echo $_GET['filter_date'] ?>&filter_day=<?php echo $_GET['filter_day'] ?>&from_date=<?php echo $_GET['from_date'] ?>&till_date=<?php echo $_GET['till_date'] ?>&filter_lecture=<?php echo $_GET['filter_lecture'] ?>&limit=<?php echo $_GET['limit'] ?>&unchecked=true"><button type="submit" class="ui button bg-red mx-1 my-2 tiny" id="insert-id">Unchecked</button></a>
            <?php  } ?>
            <a class="float-right" href="correction-detailed.php?id=<?php echo isset($_GET['id']) ? $_GET['id'] : "" ; ?>&unchecked=<?php echo isset($_GET['unchecked']) ? $_GET['unchecked'] : "" ?>"><button type="submit" class="ui button bg-red mx-1 my-2 tiny" id="insert-id">Detailed</button></a> 
            <a class="float-right" href="correction.php?id=<?php echo isset($_GET['id']) ? $_GET['id'] : "" ; ?>&limit=<?php echo isset($_GET['limit']) ? $_GET['limit'] : "25" ?> ?&unchecked=<?php echo isset($_GET['unchecked']) ? $_GET['unchecked'] : "true" ; ?>"><button type="submit" class="ui button bg-red mx-1 my-2 tiny " id="insert-id">Unset Filters</button></a>
            <a class="float-right" href="check-logs.php"><button type="submit" class="ui button bg-red mx-1 my-2 tiny" id="insert-id">Checking logs</button></a>
        </div>
        <?php if (isset($_GET['unchecked']) && $_GET['unchecked'] == 'true') { ?>
        <div style="" class="check-form-seg">
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
                <input type="number" name="limit" class="d-none" value="<?php echo isset($_GET['limit']) ? $_GET['limit'] : 25?>">
                <input type="text" name="filter_date" class="d-none" value="<?php echo $_GET['filter_date'] != '' ? $_GET['filter_date'] : "empty"?>">
                <input type="text" name="filter_day" class="d-none" value="<?php echo isset($_GET['filter_day']) ? $_GET['filter_day'] : "empty"?>">
                <input type="text" name="from_date" class="d-none" value="<?php echo isset($_GET['from_date']) ? $_GET['from_date'] : "empty"?>">
                <input type="text" name="till_date" class="d-none" value="<?php echo isset($_GET['till_date']) ? $_GET['till_date'] : "empty"?>">
                <input type="text" name="lecture" class="d-none" value="<?php echo isset($_GET['filter_lecture']) ? $_GET['filter_lecture'] : "empty"?>">
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
                $unchecked = isset($_GET['unchecked']) ? $_GET['unchecked'] : "false";
                $limit = $_GET['limit'] == "" ? "25" : $_GET['limit'];
                $filter_date = isset($_GET['filter_date']) ? $_GET['filter_date'] : ""; 
                $filter_day = isset($_GET['filter_day']) ? $_GET['filter_day'] : ""; 
                $from_date = isset($_GET['from_date']) ? $_GET['from_date'] : ""; 
                $till_date = isset($_GET['till_date']) ? $_GET['till_date'] : ""; 
                $filter_lecture = isset($_GET['filter_lecture']) ? $_GET['filter_lecture'] : ""; 
            // ------------------------------------------------
            // ----------------FILTER QUERIES-----------------
            if ($filter_date != "") {
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
                if ($_SESSION['designation'] == 'Hod' OR $_SESSION['ischeck'] == 'true' ) {
                  $mid_sql = " AND `hod` = '0' AND `principal`='0' ";
                } else if ($_SESSION['designation'] == 'Dean') {
                  $mid_sql = " AND `dean` = '0' AND `principal`='0' ";
                } else if ($_SESSION['designation'] == 'Principal' || $_SESSION['designation'] == 'Vice-Principal') {
                  $mid_sql = " AND `principal`='0' ";
                }
            } else {
                $mid_sql="";
            }
            $end_sql = " ORDER BY srno DESC LIMIT $limit";
            $sql = $start_sql.$mid_sql.$end_sql;
            // echo $_GET['limit'];
            // echo $_GET['filter_date'];
            // -----------------------------------------------
            $result = $db->query($sql);
            if ($result-> num_rows > 0) { ?>
              <table class="ui celled table">
              <thead>
                <tr id="table-head">
                  <th>LECTURE</th>
                  <th>CLASS</th>
                  <th>SUBJECT</th>
                  <th>DATE</th>
                  <th>DAY</th>
                  <th><i class='circle yellow icon'></i>HOD</th>
                  <th><i class="circle blue icon"></i> DEAN</th>
                  <th><i class="circle green icon"></i>PRINCIPAL</th>
                  <th>STATUS</th>	  
                  <?php if (!isset($_GET['unchecked']) && $_GET['unchecked'] != 'true') { ?>
                  <th>UNCHECK</th>	  
                  <?php  } ?>
                </tr>
              </thead>
              <tbody>
            <?php  while($row = $result->fetch_assoc()) {
                $date = $row["date"];
                $timestamp = strtotime($date);
                $formatted_date = date("d-m-Y", $timestamp);
                ?>
                   <tr>
                <td><?php echo  $row["lecture"] ?></td>
                <td><?php echo  $row["class"] ?></td>
                <td><?php echo  $row["subject"] ?></td>
                <td><?php echo  $formatted_date ?></td>
                <td><?php echo  $row["day"] ?></td>
                <td><?php echo  ($row["hod"] == 1 ? "Complete" : ($row["hod"] == 2 ? "Incomplete" : "")) ?></td>
                <td><?php echo  ($row["dean"] == 1 ? "Complete" : ($row["dean"] == 2 ? "Incomplete" : "")) ?></td>
                <td><?php echo  ($row["principal"] == 1 ? "Complete" : ($row["principal"] == 2 ? "Incomplete" : "")) ?></td>
                <td><?php echo ($row["hod"] == 1 ?  $hod_true : ($row["hod"] == 2 ? $incomp : $hod_false))." ".($row["dean"] == 1 ? $dean_true : ($row["dean"] == 2 ? $incomp : $dean_false))." ".($row["principal"] == 1 ? $principal_true : ($row["principal"] == 2 ? $incomp : $principal_false))?></td>
              <?php if (!isset($_GET['unchecked']) && $_GET['unchecked'] != 'true') { ?>
                <td class="no-pad" >
                  <form method="post" action="correction.php" class="ui form delete">
                    <button onclick="return checkUndo()" type="submit" name="uncheck" value="<?php echo $row['srno']?>" id="undo" class="ui mini icon button">
                      <i class="redo alternate icon"></i>
                    </button>
                  </form>
                </td> 
              <?php  } ?>
              <?php
            } if ($_GET['unchecked'] != 'true') { 
              $username = $_GET['id'];
              $comm_sql = "SELECT * FROM `notes` WHERE `username`='$username' AND (`hod_com` != '' OR `dean_com` != '' OR `principal_com` != '')";
              $comm_res = $db->query($comm_sql);
              if ($comm_res->num_rows > 0) {
               while ($comm = $comm_res->fetch_assoc()) {
                  if ($comm["hod_com"] != "") { ?>
                    <tr>
                      <td colspan='9'> <span style='color:#FBBD08'>HOD &#8594; <?php echo $comm["hod_com"] ?></span></td>
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
                    <td colspan='9'><span style='color:#2185D0'>DEAN &#8594; <?php echo $comm["dean_com"] ?></span></td>
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
                    <td colspan='9'><span style='color:#21BA45'>PRINCIPAL &#8594; <?php echo $comm["principal_com"] ?> </span></td>
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
    </div>
    <div class="filter-grid my-2">
        <div>
          <form method="get" action="correction.php" class="ui form my-3 mx-2">
            <div class="fields">
              <div class="thirteen wide field ">
              <input type="text" name="filter_date" class="search-bar my-1" placeholder="Date" onfocus="(this.type='date')" onblur="(this.type='text')" required>
              <input type="text" name="id" class="d-none" value="<?php echo $_GET['id']?>">
              <input type="text" name="unchecked" class="d-none" value="<?php echo isset($_GET['unchecked'])? $_GET['unchecked'] : "false"?>">
              </div>
              <button type="submit" class="circular ui inline icon button search-btn my-1" name="limit" value="<?php echo $limit ?>">
                <i class="search icon"></i>
              </button>
            </div>
          </form>
        </div>
        <div>
        <form method="get" action="correction.php" class="ui form my-3 mx-2">
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
                  <input type="text" name="id" class="d-none" value="<?php echo $_GET['id']?>">
                  <input type="text" name="unchecked" class="d-none" value="<?php echo isset($_GET['unchecked']) ? $_GET['unchecked'] : "false"?>">
                  </div>
              <button type="submit" class="circular ui inline icon button search-btn my-1" name="limit" value="<?php echo $limit ?>">
                <i class="search icon"></i>
              </button>
            </div>
          </form>
        </div>
        <div>
          <form method="get" action="correction.php" class="ui form my-3 mx-2">
            <div class="fields between">
              <div class="seven wide field ">
              <input type="text" name="from_date" class="search-bar my-1" placeholder="From" onfocus="(this.type='date')" onblur="(this.type='text')" required>
              <input type="text" name="id" class="d-none" value="<?php echo $_GET['id']?>">
              <input type="text" name="unchecked" class="d-none" value="<?php echo isset($_GET['unchecked']) ? $_GET['unchecked'] : "false"?>">
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
        <form method="get" action="correction.php" class="ui form my-3 mx-2">
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
                <input type="text" name="unchecked" class="d-none" value="<?php echo isset($_GET['unchecked']) ? $_GET['unchecked'] : "false"?>">
              </div>
              <button type="submit" class="circular ui inline icon button search-btn my-1" name="limit" value="<?php echo $limit ?>">
                <i class="search icon"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
        <form method="get" action="correction.php" class="ui form row-form row-form-correction">
          <div class="inline fields">
            <label class="mb-1"> Records per page</label>
            <div id="id-input" class="seven wide field">
              <input type="number" name="limit" value="<?php echo $limit ?>">
              <input type="text" name="id" class="d-none" value="<?php echo $_GET['id']?>">
            </div>
              <button id="btn" class="ui button bg-red my-2" type="submit">Submit</button>
          </div>
        </form>
    </div>
<?php include("sidenav-foot.php") ?>
<?php include("footer.php") ?>
