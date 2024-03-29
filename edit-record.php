<?php include("header.php") ?>
<?php include("sidenav-head.php") ?>

 <!-- Page Content -->
 <div id="page-content-wrapper">
        <nav
          class="navbar navbar-expand-lg navbar-light bg-light border-bottom"
        >
        <button class="ui button bg-red small" id="menu-toggle"><i class="fa fa-bars mr-1" aria-hidden="true"></i> Menu</button>
        <h2 class="ml-2 my-0 nav-head">EDIT RECORD</h2>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <p id="username" class="mt-0 mr-3"><i class='user icon'></i><strong><?php echo $_SESSION['name'] ?></strong></p>
          </ul>
        </div>
 </nav>
<div class="container-fluid my-3">
    <div class="ui segment seg-width">
        <?php 
             $id = $_GET['id'];
             $sql = "SELECT * FROM `notes` WHERE srno = '$id'" ;
             $result = $db-> query($sql);
            $row = $result->fetch_assoc();
        ?>
        <form method="post" action="edit-record.php" class="ui form">
            <div class="fields">
                <div class="field">
                    <label class="labels">LECTURE</label>
                    <input class=" input-highlight" name="lecture" readonly type="text" value="<?php echo isset($row['lecture']) ? $row['lecture'] : ""; ?>">
                </div>
                <div class="field">
                    <label class="labels">CLASS</label>
                    <input class="" readonly name="class" type="text" value="<?php echo isset($row['class']) ? $row['class'] : ""; ?>">
                </div>
                <div class="field">
                    <label class="labels">SUBJECT</label>
                    <input type="text" name="subject" value="<?php echo isset($row['subject']) ? $row['subject'] : ""; ?>">
                </div>
                <div class="field">
                    <label class="labels">METHODOLODGY</label>
                    <select class="drop-down" class="ui fluid dropdown" name="methodology">
                            <option value="">Methodology</option>
                              <?php
                                $sql_query = "SELECT * FROM methodology";
                                $methodology = mysqli_query($db,$sql_query);
                                while($row = mysqli_fetch_assoc($methodology) ){
                                  ?>
                                      <option value="<?php echo isset($row['name']) ? $row['name'] : ""; ?>"><?php echo isset($row['name']) ? $row['name'] : ""; ?></option>
                                <?php }
                              ?>
                    </select>
                </div>
                <div class="field">
                    <label class="labels">TEACHING AID</label>
                    <select class="drop-down" class="ui fluid dropdown" name="teachingaid">
                        <option value="">Teaching Aid</option>
                        <?php
                                $sql_query = "SELECT * FROM teachingaid";
                                $teachingaid = mysqli_query($db,$sql_query);
                                while($row = mysqli_fetch_assoc($teachingaid) ){
                                  ?>
                                      <option value="<?php echo isset($row['name']) ? $row['name'] : ""; ?>"><?php echo isset($row['name']) ? $row['name'] : ""; ?></option>
                                <?php }
                          ?>
                    </select>
                </div>
            </div>
            <?php 
             $id = $_GET['id'];
             $sql = "SELECT * FROM `notes` WHERE srno = '$id'" ;
             $result = $db-> query($sql);
            $row = $result->fetch_assoc();
            ?>
            <div class="fields">
                <div class="field">
                    <label class="">CLASS TYPE</label>
                    <div class="">
                        <input class="my-2 mx-1" id="radio-input" name="classtype" value="Theory" type="radio"><label>T</label>
                        <input class="my-2 mx-1" id="radio-input" name="classtype" value="Practicals" type="radio"><label>P</label></td>
                    </div>
                </div>
                <div class="field">
                    <label class="labels">CONTENT</label>
                    <input type="text" name="content" value="<?php echo isset($row['content']) ? $row['content'] : ""; ?>" placeholder="Content">
                </div>
                <div class="field">
                    <label class="labels">CLASS ACTIVITY</label>
                    <input type="text" name="classactivity" value="<?php echo isset($row['class_activity']) ? $row['class_activity'] : ""; ?>" placeholder="Class activity">
                </div>
                <div class="field">
                    <label class="labels">ATTENDANCE</label>
                    <input type="number" name="attendance" value="<?php echo isset($row['attendance']) ? $row['attendance'] : ""; ?>" placeholder="Attendance">
                </div>
                <div class="field">
                    <label class="labels">OTHER ACTIVITY</label>
                    <input type="text" name="otheractivity" value="<?php echo isset($row['other_activity']) ? $row['other_activity'] : ""; ?>" placeholder="Other activity">
                </div>
            </div>
            <div class="fields">
                <div class="field">
                    <button id="btn" name="edit_record" value="<?php echo $row['srno'];?>" class="ui button bg-red" type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include("sidenav-foot.php") ?>
<?php include("footer.php") ?>
