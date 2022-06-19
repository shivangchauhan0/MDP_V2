<?php include("header.php") ?>
<?php include("sidenav-head.php") ?>

<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <button class="ui button bg-red small" id="menu-toggle"><i class="fa fa-bars mr-1" aria-hidden="true"></i> Menu</button>
    <h2 class="ml-2 my-0 nav-head">LEAVE HISTORY</h2>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <p id="username" class="mt-0 mr-3"><i class='user icon'></i><strong><?php echo $_SESSION['name'] ?></strong></p>
        </ul>
    </div>
 </nav>

    <div class="container-fluid my-3">
        <div class="head-bar-sec">
            <h2>LEAVE HISTORY</h2>
            <a onclick="window.print()" class="float-right display-none-print" href="#"><button type="submit" class="ui button bg-red mx-1 my-2" id="insert-id">Print Report</button></a>
        </div>

        <table class="ui celled table" id="show-records-table">
            <thead>
            <tr id="table-head">
                <th>Leave Type</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Total Days</th>
                <th>Status</th>
                <th class="display-none-print">Actions</th>	  
            </tr>
            </thead>
            <tbody>
          <?php 
                $requester_id = $_SESSION['tid'];
                $sql = "SELECT * FROM `leaves` WHERE `requester_id`='$requester_id' ORDER BY `request_datetime` DESC";
                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) { 
                        
                        $s_date = $row["start_date"];
                        $s_date_timestamp = strtotime($s_date);
                        $start_date = date("d-m-Y", $s_date_timestamp);

                        $e_date = $row["end_date"];
                        $e_date_timestamp = strtotime($e_date);
                        $end_date = date("d-m-Y", $e_date_timestamp);

                        $datediff = $e_date_timestamp - $s_date_timestamp;

                        $classes = array();
                        $teachers = array();
                            if($row['c_one'] != '') {
                                array_push($classes, $row['c_one']);
                            }
                            if($row['c_two'] != '') {
                                array_push($classes, $row['c_two']);
                            }
                            if($row['c_three'] != '') {
                                array_push($classes, $row['c_three']);
                            }
                            if($row['c_four'] != '') {
                                array_push($classes, $row['c_four']);
                            }
                            if($row['c_five'] != '') {
                                array_push($classes, $row['c_five']);
                            }
                            if($row['t_one'] != '') {
                                array_push($teachers, $row['t_one']);
                            }
                            if($row['t_two'] != '') {
                                array_push($teachers, $row['t_two']);
                            }
                            if($row['t_three'] != '') {
                                array_push($teachers, $row['t_three']);
                            }
                            if($row['t_four'] != '') {
                                array_push($teachers, $row['t_four']);
                            }
                            if($row['t_five'] != '') {
                                array_push($teachers, $row['t_five']);
                            }
                         ?>
                        <tr>
                            <td><?php echo $row['type']?></td>
                            <td><?php echo $start_date?></td>
                            <td><?php echo $end_date?></td>
                            <td><?php echo (round($datediff / (60 * 60 * 24)) != 0) ? round($datediff / (60 * 60 * 24)) : 1 ?> Day(s)</td>
                            <td><?php echo $row['status']?></td>
                            <td style="width:70px">
                                <a class="ui icon button" id="edit" href="leave-history-detail.php?id=<?php echo $row["id"] ?>"><i class="eye icon"></i></a>
                                <form method="post" action="leave-history.php" class="ui form delete">
                                    <button onclick="return checkCancel()" type="submit" name="delete" value='<?php echo $row["id"] ?>' id="delete" class="ui mini icon button delete">
                                        <i style="color:#a3243b" class="close icon"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                  <?php  } 
                }?>
            </tbody>
        </table>

    </div>

   
</div>
<?php include("sidenav-foot.php") ?>
<?php include("footer.php") ?>
