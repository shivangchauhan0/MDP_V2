<?php include("header.php") ?>
<?php include("sidenav-head.php") ?>

<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <button class="ui button bg-red small" id="menu-toggle"><i class="fa fa-bars mr-1" aria-hidden="true"></i> Menu</button>
    <h2 class="ml-2 my-0 nav-head">REQUEST LEAVE</h2>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 d-flex align-items-center">
        <a href="leave-history.php">
            <button class="ui button bg-red small mr-3">Leave History</button>
        </a>
        <p id="username" class="mt-0 mr-3"><i class='user icon'></i><strong><?php echo $_SESSION['tid'] ?></strong></p>
        </ul>
    </div>
 </nav>
 <div class="container-fluid my-3">
    <a  href="leave-history.php">
        <button style="width:96%"  class="ui button bg-red small mx-2 mt-3 mr-5 d-lg-none d-sm-block">Leave History</button>
    </a>
    
    <form class="ui form leave-form" action="leave.php" method="post">
        <?php if(isset($_GET['rs']) && $_GET['rs'] == 't') { ?>
            <div class="alert alert-success" role="alert">
                <p>Request sent. Please check <a href="leave-history.php">leave history</a> for updates</p>
            </div>
        <?php }?>
        <div class="border p-3">
            <strong>
                <label for="leave_type">Leave Type*</label>
            </strong>
            <div class="inline fields">
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" value="CL" name="leave_type" required>
                        <label>CL</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" value="DL" name="leave_type" required>
                        <label>DL</label>
                    </div>
                </div>
                <div class="field">
                <div class="ui radio checkbox">
                    <input type="radio" value="ML" name="leave_type" required>
                    <label>ML</label>
                </div>
                </div>
                <div class="field">
                <div class="ui radio checkbox">
                    <input type="radio" value="Other" name="leave_type" required>
                    <label>Other</label>
                </div>
                </div>
            </div>
        </div>
        <div class="border p-3 my-3">
            <strong>
                <label>Leave time period*</label>
            </strong>
            <div class="inline fields">
                <div class="ten wide field">
                    <label>From*</label>
                    <br>
                    <input min="<?php echo date('Y-m-d')?>" type="date" name="start_date" required>
                </div>
                <div class="ten wide field">
                    <label>To*</label>
                    <br>
                    <input min="<?php echo date('Y-m-d')?>" type="date" name="end_date" required>
                </div>
            </div>
        </div>
        <div class="border p-3 my-3">
            <strong>
                <label>Substitute Teachers</label>
            </strong>
            <div class="inline fields">
                <div class="ten wide field">
                    <label>I*</label>
                    <br>
                    <input type="text" name="c_one" placeholder="Name of the class" required>
                </div>
                <div class="ten wide field">
                    <input type="text" name="t_one" placeholder="Name of the teacher" required>
                </div>
            </div>
            <div class="inline fields">
                <div class="ten wide field">
                    <label>II</label>
                    <br>
                    <input type="text" name="c_two" placeholder="Name of the class">
                </div>
                <div class="ten wide field">
                    <input type="text" name="t_two" placeholder="Name of the teacher">
                </div>
            </div>
            <div class="inline fields">
                <div class="ten wide field">
                    <label>III</label>
                    <br>
                    <input type="text" name="c_three" placeholder="Name of the class">
                </div>
                <div class="ten wide field">
                    <input type="text" name="t_three" placeholder="Name of the teacher">
                </div>
            </div>
            <div class="inline fields">
                <div class="ten wide field">
                    <label>IV</label>
                    <br>
                    <input type="text" name="c_four" placeholder="Name of the class">
                </div>
                <div class="ten wide field">
                    <input type="text" name="t_four" placeholder="Name of the teacher">
                </div>
            </div>
            <div class="inline fields">
                <div class="ten wide field">
                    <label>V</label>
                    <br>
                    <input type="text" name="c_five" placeholder="Name of the class">
                </div>
                <div class="ten wide field">
                    <input type="text" name="t_five" placeholder="Name of the teacher">
                </div>
            </div>
        </div>
        <button class="ui button bg-red" type="submit" name="request_leave">Send Leave Request</button>
    </form>
    </div>
</div>

<?php include("sidenav-foot.php") ?>
<?php include("footer.php") ?>
