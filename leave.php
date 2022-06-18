<?php include("header.php") ?>
<?php include("sidenav-head.php") ?>

<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <button class="ui button bg-red small" id="menu-toggle"><i class="fa fa-bars mr-1" aria-hidden="true"></i> Menu</button>
    <h2 class="ml-2 my-0 nav-head">REQUEST LEAVE</h2>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <p id="username" class="mt-0 mr-3"><i class='user icon'></i><strong><?php echo $_SESSION['name'] ?></strong></p>
        </ul>
    </div>
 </nav>


    <form class="ui form leave-form">
        <div class="border p-3">
            <strong>
                <label for="leave_type">Leave Type</label>
            </strong>
            <div class="inline fields">
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" name="leave_type">
                        <label>CL</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" name="leave_type">
                        <label>DL</label>
                    </div>
                </div>
                <div class="field">
                <div class="ui radio checkbox">
                    <input type="radio" name="leave_type">
                    <label>ML</label>
                </div>
                </div>
                <div class="field">
                <div class="ui radio checkbox">
                    <input type="radio" name="leave_type">
                    <label>Other</label>
                </div>
                </div>
            </div>
        </div>
        <div class="border p-3 my-3">
            <strong>
                <label>Leave time period</label>
            </strong>
            <div class="inline fields">
                <div class="ten wide field">
                    <label>From</label>
                    <br>
                    <input type="date" name="start_date">
                </div>
                <div class="ten wide field">
                    <label>To</label>
                    <br>
                    <input type="date" name="end_date">
                </div>
            </div>
        </div>
        <div class="border p-3 my-3">
            <strong>
                <label>Substitute Teachers</label>
            </strong>
            <div class="inline fields">
                <div class="ten wide field">
                    <label>I</label>
                    <br>
                    <input type="text" name="c_one" placeholder="Name of the class">
                </div>
                <div class="ten wide field">
                    <input type="text" name="t_one" placeholder="Name of the teacher">
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
        <button class="ui button bg-red" type="submit">Send Leave Request</button>
    </form>
</div>

<?php include("sidenav-foot.php") ?>
<?php include("footer.php") ?>
