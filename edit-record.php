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
    <div class="ui inverted segment">
        <form method="post" action="insert-record.php" class="ui form inverted">
            <div class="fields">
                <div class="field">
                    <label class="labels">LECTURE</label>
                    <input class=" input-highlight" name="lecture" readonly type="text" value="<?php echo $lectures[$i] ?>">
                </div>
                <div class="field">
                    <label class="labels">CLASS</label>
                    <input class="" readonly name="class" type="text" value="<?php echo $classes[$i] ?>">
                </div>
                <div class="field">
                    <label class="labels">SUBJECT</label>
                    <input  readonly type="text" name="subject" value="<?php echo $subjects[$i] ?>">
                </div>
                <div class="field">
                    <label class="labels">METHODOLODGY</label>
                    <select class="drop-down" class="ui fluid dropdown" name="methodology">
                            <option value="">Methodology</option>
                            <option value="Explanation">Explanation</option>
                            <option value="Discussion">Discussion</option>
                            <option value="Mind Mapping">Mind Mapping</option>
                            <option value="Demonstration">Demonstration</option>
                            <option value="Other">Other</option>
                    </select>
                </div>
                <div class="field">
                    <label class="labels">TEACHING AID</label>
                    <select class="drop-down" class="ui fluid dropdown" name="teachingaid">
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
                    <label class="">CLASS TYPE</label>
                    <div class="">
                        <input class="my-2 mx-1" id="radio-input" name="classtype" value="Theory" type="radio"><label>Theory</label>
                        <input class="my-2 mx-1" id="radio-input" name="classtype" value="Practicals" type="radio"><label>Practicals</label></td>
                    </div>
                </div>
            </div>
            <div class="fields">
                <div class="field">
                    <label class="labels">CONTENT</label>
                    <input type="text" name="content" placeholder="Content">
                </div>
                <div class="field">
                    <label class="labels">CA</label>
                    <input type="text" name="classactivity" placeholder="Class activity">
                </div>
                <div class="field">
                    <label class="labels">ATTENDANCE</label>
                    <input type="number" name="attendance" placeholder="Attendance">
                </div>
                <div class="field">
                    <label class="labels">OA</label>
                    <input type="text" name="otheractivity" placeholder="Other activity">
                </div>
                <div class="field">
                    <label class="labels">REMARK</label>
                    <input type="text" name="remark" placeholder="Remark">
                </div>
            </div>
            <div class="fields">
                <div class="field">
                    <button id="btn" name="add_record" class="ui button bg-red" value="<?php echo $search_date ?>" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include("sidenav-foot.php") ?>
<?php include("footer.php") ?>
