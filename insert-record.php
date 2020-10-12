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
      <div class="rec-forms mt-1">
      <?php 
          date_default_timezone_set('Asia/Kolkata');
          $today = date('Y-m-d');
          $search_date = $_GET['date'] != "" ? $_GET['date'] : $today;
          $dayOfWeek = date("l", strtotime($search_date));
					$timestamp = strtotime($search_date);
					$formatted_date = date("d-m-Y", $timestamp);
        ?>
  
       <h2 style="color:#A4243B;font-family: 'Montserrat', sans-serif;">ENTER RECORDS OF <?php echo $formatted_date?> [<?php echo $dayOfWeek ?>]</h2>
        <div class="ui segment">
        <form class="ui form rec-form hidden-sm">
          <div class="fields mb-0 less-height">
            <div class="field field-rec">
              <label class="mb-3 display-none">LECTURE</label>
              <input class="hide six_vw input-highlight" name="lecture" readonly type="text" value="First">
            </div>
            <div class="field field-rec">
              <label class="mb-3 display-none">CLASS</label>
              <input class="hide six_vw" readonly name="class" type="text" value="<?php echo $table["c1"] ?>">
            </div>
            <div class="field field-rec">
              <label class="mb-3 display-none">SUBJECT</label>
              <input  class="hide" readonly type="text" name="subject" value="<?php echo $table["s1"] ?>">
            </div>
            <div class="field field-rec">
              <label class="mb-3 display-none">CLASS TYPE</label>
              <div class="hide six_vw">
                <input  class="hide" readonly type="text" name="subject" value="<?php echo $table["s1"] ?>">
              </div>
            </div>
            <div class="field field-rec">
              <label class="mb-3 display-none">METHODOLOGY</label>
              <select class="hide drop-down ten_vw" class="ui fluid dropdown" name="methodology">
                          <option value="">Methodology</option>
                          <option value="Explanation">Explanation</option>
                          <option value="Discussion">Discussion</option>
                          <option value="Mind Mapping">Mind Mapping</option>
                          <option value="Demonstration">Demonstration</option>
                          <option value="Other">Other</option>
                </select>
            </div>
            <div class="field field-rec">
              <label class="mb-3 display-none">TEACHING AID</label>
              <select class="hide drop-down ten_vw" class="ui fluid dropdown" name="teachingaid">
                    <option value="">Teaching Aid</option>
                    <option value="Actual objects">Actual objects</option>
                    <option value="Models">Models</option>
                    <option value="Pictures">Pictures</option>
                    <option value="Charts">Charts</option>
                    <option value="Maps">Maps</option>
                    <option value="Flash Cards">Flash Cards</option>
                    <option value="Flannel Board">Flannel Board</option>
                    <option value="Bulletin Board">Bulletin Board</option>
                    <option value="Chalk Board">Chalk Board</option>
                    <option value="Overhead Projector">Overhead Projector</option>
                    <option value="Slides">Slides</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="field field-rec">
              <label class="mb-3 display-none">CONENT</label>
              <input class="hide" type="text" name="content" placeholder="Content">
            </div>
            <div class="field field-rec">
              <label class="mb-3 display-none">CA</label>
              <input class="hide" type="text" name="classactivity" placeholder="Class activity">
            </div>
            <div class="field field-rec">
              <label class="mb-3 display-none">ATTENDANCE</label>
              <input class="hide" type="number" name="attendance" placeholder="Attendance">
            </div>
            <div class="field field-rec">
              <label class="mb-3 display-none">OA</label>
              <input class="hide" type="text" name="otheractivity" placeholder="Other activity">
            </div>
            <div class="field field-rec">
              <label class="mb-3 display-none">REMARK</label>
              <input class="hide" type="text" name="remark" placeholder="Remark">
            </div>
            <div class="field field-rec">
              <label class="mb-3 display-none">SUBMIT</label>
              <button id="btn" name="add_record" class="ui hide button tiny bg-red" type="submit">Add</button>
            </div>
          </div>
        </form>
        <?php 
          $current_user = $_SESSION['username'];
          date_default_timezone_set('Asia/Kolkata');
          $today = date('Y-m-d');
          $search_date = $_GET['date'] != "" ? $_GET['date'] : $today;
          $dayOfWeek = date("l", strtotime($search_date));
					$timestamp = strtotime($search_date);
					$formatted_date = date("d-m-Y", $timestamp);
          if ($dayOfWeek == "Monday") {
            $sql_two = "SELECT c1,s1,c2,s2,c3,s3,c4,s4,c5,s5,c6,s6,c7,s7 FROM `timetable_new` WHERE `username`= '$current_user'";
          } else if ($dayOfWeek == "Tuesday") {
            $sql_two = "SELECT c8 AS c1,s8 AS s1,c9 AS c2,s9 AS s2,c10 AS c3,s10 AS s3,c11 AS c4,s11 AS s4,c12 AS c5,s12 AS s5,c13 AS c6,s13 AS s6,c14 AS c7,s14 AS s7 FROM `timetable_new` WHERE `username`= '$current_user'";
          } else if ($dayOfWeek == "Wednesday") {
            $sql_two = "SELECT c15 AS c1,s15 AS s1,c16 AS c2,s16 AS s2,c17 AS c3,s17 AS s3,c18 AS c4,s18 AS s4,c19 AS c5,s19 AS s5,c20 AS c6,s20 AS s6,c21 AS c7,s21 AS s7 FROM `timetable_new` WHERE `username`= '$current_user'";
          } else if ($dayOfWeek == "Thursday") {
            $sql_two = "SELECT c22 AS c1,s22 AS s1,c23 AS c2,s23 AS s2,c24 AS c3,s24 AS s3,c25 AS c4,s25 AS s4,c26 AS c5,s26 AS s5,c27 AS c6,s27 AS s6,c28 AS c7,s28 AS s7 FROM `timetable_new` WHERE `username`= '$current_user'";
          } else if ($dayOfWeek == "Friday") {
            $sql_two = "SELECT c29 AS c1,s29 AS s1,c30 AS c2,s30 AS s2,c31 AS c3,s31 AS s3,c32 AS c4,s32 AS s4,c33 AS c5,s33 AS s5,c34 AS c6,s34 AS s6,c35 AS c7,s35 AS s7 FROM `timetable_new` WHERE `username`= '$current_user'";
          } else if ($dayOfWeek == "Saturday") {
            $sql_two = "SELECT c36 AS c1,s36 AS s1,c37 AS c2,s37 AS s2,c38 AS c3,s38 AS s3,c39 AS c4,s39 AS s4,c40 AS c5,s40 AS s5,c41 AS c6,s41 AS s6,c42 AS c7,s42 AS s7 FROM `timetable_new` WHERE `username`= '$current_user'";
          }
          
          $result_two = $db-> query($sql_two);
          $table = $result_two-> fetch_assoc();
          $lectures = array("First", "Second", "Third","Fourth","Fifth","Sixth","Seventh");
          $classes = array($table["c1"], $table["c2"], $table["c3"],$table["c4"],$table["c5"],$table["c6"],$table["c7"]);
          $subjects = array($table["s1"], $table["s2"], $table["s3"],$table["s3"],$table["s5"],$table["s6"],$table["s7"]);
      
          for ($i=0; $i < 7; $i++) { 
              $sql = "SELECT * FROM `notes` WHERE `username`= '$current_user' AND `date`='$search_date' AND `lecture`='$lectures[$i]'";
              $result = $db-> query($sql);
              if($result-> num_rows == 0){
            ?>
            <div class="ui horizontal divider d-none-large">
              <?php echo $i+1 ?>
            </div>
            <form method="post" action="insert-record.php" class="ui form rec-form">
              <div class="fields">
                <div class="field field-rec">
                  <input class="six_vw input-highlight" name="lecture" readonly type="text" value="<?php echo $lectures[$i] ?>">
                </div>
                <div class="field field-rec">
                  <input class="six_vw" readonly name="class" type="text" value="<?php echo $classes[$i] ?>">
                </div>
                <div class="field field-rec">
                  <input  readonly type="text" name="subject" value="<?php echo $subjects[$i] ?>">
                </div>
                <div class="field field-rec">
                  <div class="six_vw">
                    <input class="my-2 mx-1" id="radio-input" name="classtype" value="Theory" type="radio"><label>T</label>
                    <input class="my-2 mx-1" id="radio-input" name="classtype" value="Practicals" type="radio"><label>P</label></td>
                  </div>
                </div>
                <div class="field field-rec">
                  <select class="drop-down ten_vw" class="ui fluid dropdown" name="methodology">
                              <option value="">Methodology</option>
                              <option value="Explanation">Explanation</option>
                              <option value="Discussion">Discussion</option>
                              <option value="Mind Mapping">Mind Mapping</option>
                              <option value="Demonstration">Demonstration</option>
                              <option value="Other">Other</option>
                    </select>
                </div>
                <div class="field field-rec">
                  <select class="drop-down ten_vw" class="ui fluid dropdown" name="teachingaid">
                        <option value="">Teaching Aid</option>
                        <option value="Actual objects">Actual objects</option>
                        <option value="Models">Models</option>
                        <option value="Pictures">Pictures</option>
                        <option value="Charts">Charts</option>
                        <option value="Maps">Maps</option>
                        <option value="Flash Cards">Flash Cards</option>
                        <option value="Flannel Board">Flannel Board</option>
                        <option value="Bulletin Board">Bulletin Board</option>
                        <option value="Chalk Board">Chalk Board</option>
                        <option value="Overhead Projector">Overhead Projector</option>
                        <option value="Slides">Slides</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="field field-rec">
                  <input type="text" name="content" placeholder="Content">
                </div>
                <div class="field field-rec">
                  <input type="text" name="classactivity" placeholder="Class activity">
                </div>
                <div class="field field-rec">
                  <input type="number" name="attendance" placeholder="Attendance">
                </div>
                <div class="field field-rec">
                  <input type="text" name="otheractivity" placeholder="Other activity">
                </div>
                <div class="field field-rec">
                  <input type="text" name="remark" placeholder="Remark">
                </div>
                <div class="field field-rec">
                  <button id="btn" name="add_record" class="ui button tiny bg-red" value="<?php echo $search_date ?>" type="submit">Add</button>
                </div>
              </div>
        </form>
            <?php 
              }
          } ?>
      </div>
      <h2 style="color:#A4243B;font-family: 'Montserrat', sans-serif;">ALREADY ADDED RECORS OF <?php echo $formatted_date?> (<?php echo $dayOfWeek ?>)</h2>
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
            <th>REMARK</th>	  
            <th>E || D</th>	  
          </tr>
        </thead>
        <tbody>
          <?php 
            $username = $_SESSION['username'];
            date_default_timezone_set('Asia/Kolkata');
            $today = date('Y-m-d');
            $search_date = $_GET['date'] != "" ? $_GET['date'] : $today;
            $sql = "SELECT * FROM `notes` WHERE `username`= '$current_user' AND `date`='$search_date'";
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
                <td>
                  <?php if($row["principal"]== 1) { ?>
                    <a class="ui icon button disabled" id="edit" href="edit-record.php?id=<?php echo $row["srno"] ?>"><i class="edit icon"></i></a>
                    <form method="post" action="insert-record.php" class="ui form delete">
                      <button onclick="return checkDelete()" type="submit" name="delete" value='<?php echo $row["srno"] ?>' id="delete" class="ui mini icon button disabled delete">
                        <i class="trash icon"></i>
                      </button>
                    </form>
                    <?php }else { ?>
                    <a class="ui icon" id="edit" href="edit-record.php?id=<?php echo $row["srno"] ?>"><i class="edit icon"></i></a>
                    <form method="post" action="insert-record.php" class="ui form delete">
                      <button onclick="return checkDelete()" type="submit" name="delete" value='<?php echo $row["srno"] ?>' id="delete" class="ui mini icon button delete">
                        <i class="trash icon"></i>
                      </button>
                    </form>
                  <?php } ?>
                </td>
            </tr>
          <?php
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
    </div>
    </div>
<?php include("sidenav-foot.php") ?>
<?php include("footer.php") ?>
