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
    <div class="container-fluid my-3">
        <div class="head-bar">
            <h2>LIST OF ASSISTANT PROFESSORS</h2>
        </div>
        <table class="ui celled table my-4">
            <thead>
                <tr id="table-head">
                <th>ID</th>
                <th>Name</th>
                <th>Designation</th>
                <?php if ($_SESSION['department'] == 'Applied Economics') { ?>
                <th>Department</th>
               <?php }?>
                <th>Correct</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $dep = $_GET['department'] == ""? $_SESSION['department'] : $_GET['department'];
                if ($_SESSION['department'] != 'Applied Economics') {
                    $sql = "SELECT * FROM `users` WHERE `department`='$dep'";
                } else {
                    $sql = "SELECT * FROM `users` WHERE `department`='Applied Economics' OR `department`='B.Com. Honors' OR `department`='Taxation and Computer Application'";
                }
                $result = $db-> query($sql);
                if($result-> num_rows > 0){	
                    while ($row = $result-> fetch_assoc())
                    {
                        if (($row['designation'] == "Hod" AND $_SESSION['designation'] == "Hod") || $row['designation'] == "Dean" || $row['designation'] == "Principal" ) {
                            continue;
                        }
                        else { ?>
                        <tr class="<?php echo $row['designation'] == "Hod" ? "active" : "" ?>">
                            <td style="width:11vw"><span class="mx-1"><?php echo $row["tid"] ?></span></td>
                            <td><a href="correction.php?id=<?php echo $row['username']?>&unchecked=true" style="color:#000" class="mx-1"><?php echo $row["name"] ?></a></td>
                            <td><a href="correction.php?id=<?php echo $row['username']?>&unchecked=true" style="color:#000" class="mx-1"><?php echo $row["designation"] == "Professor"?"ASSISTANT PROFESSOR" : strtoupper($row["designation"]) ?></a></td>
                            <?php if ($_SESSION['department'] == 'Applied Economics') { ?>
                            <td><a href="correction.php?id=<?php echo $row['username']?>&unchecked=true" style="color:#000" class="mx-1"><?php echo $row["department"] ?></a></td>
                            <?php }?>
                            <td style="width:11vw">
                                <a href="correction.php?id=<?php echo $row['username']?>&unchecked=true"><button type="submit" class="ui button tiny bg-red mx-1" id="insert-id">Correct <i class="fa fa-pen fa-fw ml-1" aria-hidden="true"></i></button></a> 
                            </td>
                        </tr>
                <?php	}
                     }
                } else {
                    echo "<div class='alert alert-danger my-2' role='alert'>
                          No records found!
                          </div>";
                  }
            ?>
            </tbody>
        </table>
    </div>
<?php include("sidenav-foot.php") ?>
<?php include("footer.php") ?>
