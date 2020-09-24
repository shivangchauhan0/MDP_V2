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
       <h2 style="color:#A4243B">Enter records</h2>
        <?php 
          $current_user = $_SESSION['username'];
          date_default_timezone_set('Asia/Kolkata');
          $today = date('Y-m-d');
          $search_date = $_GET['date'] != "" ? $_GET['date'] : $today;
          $dayOfWeek = date("l", strtotime($search_date));
          if ($dayOfWeek == "Monday") {
            $sql_two = "SELECT c1,s1,c2,s2,c3,s3,c4,s4,c5,s5,c6,s6,c7,s7 FROM `timetable` WHERE `username`= '$current_user'";
          } else if ($dayOfWeek == "Tuesday") {
            $sql_two = "SELECT c8 AS c1,s8 AS s1,c9 AS c2,s9 AS s2,c10 AS c3,s10 AS s3,c11 AS c4,s11 AS s4,c12 AS c5,s12 AS s5,c13 AS c6,s13 AS s6,c14 AS c7,s14 AS s7 FROM `timetable` WHERE `username`= '$current_user'";
          } else if ($dayOfWeek == "Wednesday") {
            $sql_two = "SELECT c15 AS c1,s15 AS s1,c16 AS c2,s16 AS s2,c17 AS c3,s17 AS s3,c18 AS c4,s18 AS s4,c19 AS c5,s19 AS s5,c20 AS c6,s20 AS s6,c21 AS c7,s21 AS s7 FROM `timetable` WHERE `username`= '$current_user'";
          } else if ($dayOfWeek == "Thursday") {
            $sql_two = "SELECT c22 AS c1,s22 AS s1,c23 AS c2,s23 AS s2,c24 AS c3,s24 AS s3,c25 AS c4,s25 AS s4,c26 AS c5,s26 AS s5,c27 AS c6,s27 AS s6,c28 AS c7,s28 AS s7 FROM `timetable` WHERE `username`= '$current_user'";
          } else if ($dayOfWeek == "Friday") {
            $sql_two = "SELECT c29 AS c1,s29 AS s1,c30 AS c2,s30 AS s2,c31 AS c3,s31 AS s3,c32 AS c4,s32 AS s4,c33 AS c5,s33 AS s5,c34 AS c6,s34 AS s6,c35 AS c7,s35 AS s7 FROM `timetable` WHERE `username`= '$current_user'";
          } else if ($dayOfWeek == "Saturday") {
            $sql_two = "SELECT c36 AS c1,s36 AS s1,c37 AS c2,s37 AS s2,c38 AS c3,s38 AS s3,c39 AS c4,s39 AS s4,c40 AS c5,s40 AS s5,c41 AS c6,s41 AS s6,c42 AS c7,s42 AS s7 FROM `timetable` WHERE `username`= '$current_user'";
          }
          $sql = "SELECT * FROM `notes` WHERE `username`= '$current_user' AND `date`='$today'";
          $result = $db-> query($sql);
          $result_two = $db-> query($sql_two);
          $table = $result_two-> fetch_assoc();
        ?>
        <div class="ui segment">
        <form class="ui form rec-form">
          <div class="fields">
            <div class="field">
              <label class="mb-3 display-none">LECTURE</label>
              <input class="six_vw input-highlight" name="lecture" readonly type="text" value="First">
            </div>
            <div class="field">
              <label class="mb-3 display-none">CLASS</label>
              <input class="six_vw" readonly name="class" type="text" value="<?php echo $table["c1"] ?>">
            </div>
            <div class="field">
              <label class="mb-3 display-none">SUBJECT</label>
              <input  readonly type="text" name="subject" value="<?php echo $table["s1"] ?>" placeholder="SUBJECT">
            </div>
            <div class="field">
              <label class="mb-3 display-none">CLASS TYPE</label>
              <!-- background:red -->
              <div class="six_vw">
                <input class="my-2 mx-1" id="radio-input" name="classtype" value="Theory" type="radio"><label>T</label>
                <input class="my-2 mx-1" id="radio-input" name="classtype" value="Practicals" type="radio"><label>P</label></td>
              </div>
            </div>
            <div class="field">
              <label class="mb-3 display-none">METHODOLOGY</label>
              <select class="drop-down ten_vw" class="ui fluid dropdown" name="methodology">
                          <option value="">Methodology</option>
                          <option value="Explanation">Explanation</option>
                          <option value="Discussion">Discussion</option>
                          <option value="Mind Mapping">Mind Mapping</option>
                          <option value="Demonstration">Demonstration</option>
                          <option value="Other">Other</option>
                </select>
            </div>
            <div class="field">
              <label class="mb-3 display-none">TEACHING AID</label>
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
            <div class="field">
              <label class="mb-3 display-none">CONENT</label>
              <input type="text" name="content" placeholder="Content">
            </div>
            <div class="field">
              <label class="mb-3 display-none">CA</label>
              <input type="text" name="classactivity" placeholder="Class activity">
            </div>
            <div class="field">
              <label class="mb-3 display-none">ATTENDANCE</label>
              <input type="number" name="attendance" placeholder="Attendance">
            </div>
            <div class="field">
              <label class="mb-3 display-none">OA</label>
              <input type="text" name="otheractivity" placeholder="Other activity">
            </div>
            <div class="field">
              <label class="mb-3 display-none">REMARK</label>
              <input type="text" name="remark" placeholder="Remark">
            </div>
            <div class="field">
              <label class="mb-3 display-none" style="visibility:hidden">Last name</label>
              <button id="btn" class="ui button tiny bg-red" type="submit">Add</button>
            </div>
          </div>
        </form>
        <form class="ui form rec-form my-3">
          <div class="fields">
            <div class="field">
              <input class="six_vw input-highlight" name="lecture" readonly type="text" value="Second">
            </div>
            <div class="field">
              <input class="six_vw" readonly name="class" type="text" value="<?php echo $table["c2"] ?>">
            </div>
            <div class="field">
              <input  readonly type="text" name="subject" value="<?php echo $table["s2"] ?>" placeholder="SUBJECT">
            </div>
            <div class="field">
              <div class="six_vw">
                <input class="my-2 mx-1" id="radio-input" name="classtype" value="Theory" type="radio"><label>T</label>
                <input class="my-2 mx-1" id="radio-input" name="classtype" value="Practicals" type="radio"><label>P</label></td>
              </div>
            </div>
            <div class="field">
              <select class="drop-down ten_vw" class="ui fluid dropdown" name="methodology">
                          <option value="">Methodology</option>
                          <option value="Explanation">Explanation</option>
                          <option value="Discussion">Discussion</option>
                          <option value="Mind Mapping">Mind Mapping</option>
                          <option value="Demonstration">Demonstration</option>
                          <option value="Other">Other</option>
                </select>
            </div>
            <div class="field">
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
            <div class="field">
              <input type="text" name="content" placeholder="Content">
            </div>
            <div class="field">
              <input type="text" name="classactivity" placeholder="Class activity">
            </div>
            <div class="field">
              <input type="number" name="attendance" placeholder="Attendance">
            </div>
            <div class="field">
              <input type="text" name="otheractivity" placeholder="Other activity">
            </div>
            <div class="field">
              <input type="text" name="remark" placeholder="Remark">
            </div>
            <div class="field">
              <button id="btn" class="ui button tiny bg-red" type="submit">Add</button>
            </div>
          </div>
        </form>
        <form class="ui form rec-form my-3">
          <div class="fields">
            <div class="field">
              <input class="six_vw input-highlight" name="lecture" readonly type="text" value="Third">
            </div>
            <div class="field">
              <input class="six_vw" readonly name="class" type="text" value="<?php echo $table["c3"] ?>">
            </div>
            <div class="field">
              <input  readonly type="text" name="subject" value="<?php echo $table["s3"] ?>">
            </div>
            <div class="field">
              <div class="six_vw">
                <input class="my-2 mx-1" id="radio-input" name="classtype" value="Theory" type="radio"><label>T</label>
                <input class="my-2 mx-1" id="radio-input" name="classtype" value="Practicals" type="radio"><label>P</label></td>
              </div>
            </div>
            <div class="field">
              <select class="drop-down ten_vw" class="ui fluid dropdown" name="methodology">
                          <option value="">Methodology</option>
                          <option value="Explanation">Explanation</option>
                          <option value="Discussion">Discussion</option>
                          <option value="Mind Mapping">Mind Mapping</option>
                          <option value="Demonstration">Demonstration</option>
                          <option value="Other">Other</option>
                </select>
            </div>
            <div class="field">
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
            <div class="field">
              <input type="text" name="content" placeholder="Content">
            </div>
            <div class="field">
              <input type="text" name="classactivity" placeholder="Class activity">
            </div>
            <div class="field">
              <input type="number" name="attendance" placeholder="Attendance">
            </div>
            <div class="field">
              <input type="text" name="otheractivity" placeholder="Other activity">
            </div>
            <div class="field">
              <input type="text" name="remark" placeholder="Remark">
            </div>
            <div class="field">
              <button id="btn" class="ui button tiny bg-red" type="submit">Add</button>
            </div>
          </div>
        </form>
        <form class="ui form rec-form my-3">
          <div class="fields">
            <div class="field">
              <input class="six_vw input-highlight" name="lecture" readonly type="text" value="Fourth">
            </div>
            <div class="field">
              <input class="six_vw" readonly name="class" type="text" value="<?php echo $table["c4"] ?>">
            </div>
            <div class="field">
              <input  readonly type="text" name="subject" value="<?php echo $table["s4"] ?>">
            </div>
            <div class="field">
              <div class="six_vw">
                <input class="my-2 mx-1" id="radio-input" name="classtype" value="Theory" type="radio"><label>T</label>
                <input class="my-2 mx-1" id="radio-input" name="classtype" value="Practicals" type="radio"><label>P</label></td>
              </div>
            </div>
            <div class="field">
              <select class="drop-down ten_vw" class="ui fluid dropdown" name="methodology">
                          <option value="">Methodology</option>
                          <option value="Explanation">Explanation</option>
                          <option value="Discussion">Discussion</option>
                          <option value="Mind Mapping">Mind Mapping</option>
                          <option value="Demonstration">Demonstration</option>
                          <option value="Other">Other</option>
                </select>
            </div>
            <div class="field">
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
            <div class="field">
              <input type="text" name="content" placeholder="Content">
            </div>
            <div class="field">
              <input type="text" name="classactivity" placeholder="Class activity">
            </div>
            <div class="field">
              <input type="number" name="attendance" placeholder="Attendance">
            </div>
            <div class="field">
              <input type="text" name="otheractivity" placeholder="Other activity">
            </div>
            <div class="field">
              <input type="text" name="remark" placeholder="Remark">
            </div>
            <div class="field">
              <button id="btn" class="ui button tiny bg-red" type="submit">Add</button>
            </div>
          </div>
        </form>
        <form class="ui form rec-form my-3">
          <div class="fields">
            <div class="field">
              <input class="six_vw input-highlight" name="lecture" readonly type="text" value="Fifth">
            </div>
            <div class="field">
              <input class="six_vw" readonly name="class" type="text" value="<?php echo $table["c5"] ?>">
            </div>
            <div class="field">
              <input  readonly type="text" name="subject" value="<?php echo $table["s5"] ?>">
            </div>
            <div class="field">
              <div class="six_vw">
                <input class="my-2 mx-1" id="radio-input" name="classtype" value="Theory" type="radio"><label>T</label>
                <input class="my-2 mx-1" id="radio-input" name="classtype" value="Practicals" type="radio"><label>P</label></td>
              </div>
            </div>
            <div class="field">
              <select class="drop-down ten_vw" class="ui fluid dropdown" name="methodology">
                          <option value="">Methodology</option>
                          <option value="Explanation">Explanation</option>
                          <option value="Discussion">Discussion</option>
                          <option value="Mind Mapping">Mind Mapping</option>
                          <option value="Demonstration">Demonstration</option>
                          <option value="Other">Other</option>
                </select>
            </div>
            <div class="field">
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
            <div class="field">
              <input type="text" name="content" placeholder="Content">
            </div>
            <div class="field">
              <input type="text" name="classactivity" placeholder="Class activity">
            </div>
            <div class="field">
              <input type="number" name="attendance" placeholder="Attendance">
            </div>
            <div class="field">
              <input type="text" name="otheractivity" placeholder="Other activity">
            </div>
            <div class="field">
              <input type="text" name="remark" placeholder="Remark">
            </div>
            <div class="field">
              <button id="btn" class="ui button tiny bg-red" type="submit">Add</button>
            </div>
          </div>
        </form>
        <form class="ui form rec-form my-3">
          <div class="fields">
            <div class="field">
              <input class="six_vw input-highlight" name="lecture" readonly type="text" value="Sixth">
            </div>
            <div class="field">
              <input class="six_vw" readonly name="class" type="text" value="<?php echo $table["c6"] ?>">
            </div>
            <div class="field">
              <input  readonly type="text" name="subject" value="<?php echo $table["s6"] ?>" placeholder="SUBJECT">
            </div>
            <div class="field">
              <div class="six_vw">
                <input class="my-2 mx-1" id="radio-input" name="classtype" value="Theory" type="radio"><label>T</label>
                <input class="my-2 mx-1" id="radio-input" name="classtype" value="Practicals" type="radio"><label>P</label></td>
              </div>
            </div>
            <div class="field">
              <select class="drop-down ten_vw" class="ui fluid dropdown" name="methodology">
                          <option value="">Methodology</option>
                          <option value="Explanation">Explanation</option>
                          <option value="Discussion">Discussion</option>
                          <option value="Mind Mapping">Mind Mapping</option>
                          <option value="Demonstration">Demonstration</option>
                          <option value="Other">Other</option>
                </select>
            </div>
            <div class="field">
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
            <div class="field">
              <input type="text" name="content" placeholder="Content">
            </div>
            <div class="field">
              <input type="text" name="classactivity" placeholder="Class activity">
            </div>
            <div class="field">
              <input type="number" name="attendance" placeholder="Attendance">
            </div>
            <div class="field">
              <input type="text" name="otheractivity" placeholder="Other activity">
            </div>
            <div class="field">
              <input type="text" name="remark" placeholder="Remark">
            </div>
            <div class="field">
              <button id="btn" class="ui button tiny bg-red" type="submit">Add</button>
            </div>
          </div>
        </form>
        <form class="ui form rec-form my-3">
          <div class="fields">
            <div class="field">
              <input class="six_vw input-highlight" name="lecture" readonly type="text" value="Seventh">
            </div>
            <div class="field">
              <input class="six_vw" readonly name="class" type="text" value="<?php echo $table["c7"] ?>">
            </div>
            <div class="field">
              <input  readonly type="text" name="subject" value="<?php echo $table["s7"] ?>">
            </div>
            <div class="field">
              <div class="six_vw">
                <input class="my-2 mx-1" id="radio-input" name="classtype" value="Theory" type="radio"><label>T</label>
                <input class="my-2 mx-1" id="radio-input" name="classtype" value="Practicals" type="radio"><label>P</label></td>
              </div>
            </div>
            <div class="field">
              <select class="drop-down ten_vw" class="ui fluid dropdown" name="methodology">
                          <option value="">Methodology</option>
                          <option value="Explanation">Explanation</option>
                          <option value="Discussion">Discussion</option>
                          <option value="Mind Mapping">Mind Mapping</option>
                          <option value="Demonstration">Demonstration</option>
                          <option value="Other">Other</option>
                </select>
            </div>
            <div class="field">
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
            <div class="field">
              <input type="text" name="content" placeholder="Content">
            </div>
            <div class="field">
              <input type="text" name="classactivity" placeholder="Class activity">
            </div>
            <div class="field">
              <input type="number" name="attendance" placeholder="Attendance">
            </div>
            <div class="field">
              <input type="text" name="otheractivity" placeholder="Other activity">
            </div>
            <div class="field">
              <input type="text" name="remark" placeholder="Remark">
            </div>
            <div class="field">
              <button id="btn" class="ui button tiny bg-red" type="submit">Add</button>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
<?php include("sidenav-foot.php") ?>
<?php include("footer.php") ?>
