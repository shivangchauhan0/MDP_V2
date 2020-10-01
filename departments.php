<?php include("header.php") ?>
 <!-- Page Content -->
 <div id="page-content-wrapper">
        <nav
          class="navbar navbar-expand-lg navbar-light bg-light border-bottom"
        >
        <a href="index.php?logout='1'"><button class="ui button bg-red small"><i class='sign in alternate icon'></i></i> Logout</button></a> 
        <h2 class="ml-2 my-0 nav-head">CORRECTION</h2>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <p id="username" class="mt-0 mr-3"><i class='user icon'></i><strong><?php echo $_SESSION['name'] ?></strong></p>
          </ul>
        </div>
 </nav>
    <div class="container-fluid my-3">
        <div class="head-bar">
            <h2>LIST OF DEPARTMENTS</h2>
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
                // $sup_dep = $_SESSION['sup_depart'];
                // $sup_dep = $_GET['sup_depart'] == ""? $_SESSION['sup_depart'] : $_GET['sup_depart'];
                $sql = "SELECT * FROM `sup_depart` WHERE  1" ;
                $result = $db-> query($sql);
                $srno = 0;
                if($result-> num_rows > 0){	
                    while ($row = $result-> fetch_assoc())
                    { $srno++; ?>
                        <tr>
                            <td style="width:11vw"><span class="mx-1"><?php echo $srno ?></span></td>
                            <td><a href="sub-departments.php?sup_depart=<?php echo $row['sup_depart']?>&unchecked=true" style="color:#000" class="mx-1"><?php echo $row["sup_depart"] ?></a></td>
                            <td style="width:11vw">
                                <a href="sub-departments.php?sup_depart=<?php echo $row['sup_depart']?>&unchecked=true"><button type="submit" class="ui button tiny bg-red mx-1" id="insert-id">Correct <i class="fa fa-pen fa-fw ml-1" aria-hidden="true"></i></button></a> 
                            </td>
                        </tr>
                <?php	
                     }
                }
            ?>
            </tbody>
        </table>
    </div>
<?php include("footer.php") ?>
