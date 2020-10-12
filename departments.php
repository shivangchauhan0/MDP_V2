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
        <div class="head-bar-sec">
            <h2>LIST OF DEPARTMENTS</h2>
            <?php 
                $check_vp_sql = "SELECT * FROM `users` WHERE `designation`='Vice-Principal'";
                $result = $db->query($check_vp_sql);
                $row = $result->fetch_assoc();
                $auth = $row['tid'] != "enable"?"Enable":"Disable";
                if ($_SESSION['designation'] == "Principal") { ?>
                    <form method="post" action="index.php" class="ui form d-inline">
                        <button type="submit" name="vp_check"  id="" class="ui button vp-check bg-red float-right">
                            <?php echo $auth ?> Vice Principal checking
                        </button>
                    </form>
            <?php   }
            ?>
        </div>
        <table class="ui celled table my-4">
            <thead>
                <tr id="table-head">
                <th>Srno</th>
                <th>Name</th>
                <th>Correct</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $sql = "SELECT * FROM `sup_depart` WHERE  1" ;
                $result = $db-> query($sql);
                $srno = 0;
                if($result-> num_rows > 0){	
                    while ($row = $result-> fetch_assoc())
                    { $srno++; ?>
                        <tr>
                            <td style="width:11vw"><span class="mx-1"><?php echo $srno ?></span></td>
                            <td><a href="sub-departments.php?sup_depart=<?php echo $row['sup_depart']?>" style="color:#000" class="mx-1"><?php echo $row["sup_depart"] ?></a></td>
                            <td style="width:11vw">
                                <a href="sub-departments.php?sup_depart=<?php echo $row['sup_depart']?>"><button type="submit" class="ui button tiny bg-red mx-1" id="insert-id">Correct <i class="fa fa-pen fa-fw ml-1" aria-hidden="true"></i></button></a> 
                            </td>
                        </tr>
                <?php	
                     }
                }
            ?>
            </tbody>
        </table>
    </div>
 <div class="container-fluid my-3">
        <div class="head-bar">
            <h2>LIST OF DEANS</h2>
        </div>
        <table class="ui celled table my-4">
            <thead>
                <tr id="table-head">
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Correct</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $sql = "SELECT * FROM `users` WHERE  `designation`= 'Dean' OR `designation`= 'Vice-Principal' " ;
                $result = $db-> query($sql);
                $srno = 0;
                if($result-> num_rows > 0){	
                    while ($row = $result-> fetch_assoc())
                    { $srno++; ?>
                        <tr class="<?php echo $row['designation'] == "Vice-Principal" ? "active" : "" ?>">
                            <td><a href="correction.php?id=<?php echo $row['username']?>&unchecked=true" style="color:#000" class="mx-1"><?php echo $row["name"] ?></a></td>
                            <td><a href="correction.php?id=<?php echo $row['username']?>&unchecked=true" style="color:#000" class="mx-1"><?php echo $row["designation"] == "Professor"?"ASSISTANT PROFESSOR" : strtoupper($row["designation"]) ?></a></td>
                            <td style="width:11vw">
                                <a href="correction.php?id=<?php echo $row['username']?>&unchecked=true"><button type="submit" class="ui button tiny bg-red mx-1" id="insert-id">Correct <i class="fa fa-pen fa-fw ml-1" aria-hidden="true"></i></button></a> 
                            </td>
                        </tr>
                <?php	
                     }
                }
            ?>
            </tbody>
        </table>
    </div>
<?php include("sidenav-foot.php") ?>
<?php include("footer.php") ?>
