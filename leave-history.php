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
        <section class="number-of-leaves">
            <?php
                $requester_id = $_SESSION['tid'];
                $sql = "SELECT * FROM `leaves` WHERE `requester_id`='$requester_id' AND `status` = 'APPROVED' ORDER BY `request_datetime` DESC";
                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                    $cl = 0;
                    $dl = 0;
                    $ml = 0;
                    $other = 0;
                    while($row = $result->fetch_assoc()) { 
                        
                        switch ($row['type']) {
                            case 'CL':
                                $cl = $cl + (int)$row['number_of_days'];
                                break;
                            case 'DL':
                                $dl = $dl + (int)$row['number_of_days'];
                                break;
                            case 'ML':
                                $ml = $ml + (int)$row['number_of_days'];
                                break;
                            
                            default:
                                $other = $other + (int)$row['number_of_days'];
                                break;
                        }

                    }
                }
            
            ?>
            <div class="nol-item">
                <h1><?php echo $cl ?>/13</h1>
                <p class="nol-p">CL</p>
                <p>Remaing: <?php echo 13 - $cl ?></p>
            </div> 
            <div class="nol-item">
                <h1><?php echo $dl ?></h1>
                <p class="nol-p">DL</p>
            </div> 
            <div class="nol-item">
                <h1><?php echo $ml ?></h1>
                <p class="nol-p">ML</p>
            </div> 
            <div class="nol-item">
                <h1><?php echo $other ?></h1>
                <p>Other</p>
            </div> 
        </section>

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
                $sql = "SELECT * FROM `leaves` WHERE `requester_id`='$requester_id' AND `status` != 'CANCELLED' ORDER BY `request_datetime` DESC";
                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) { 
                        
                        $s_date = $row["start_date"];
                        $s_date_timestamp = strtotime($s_date);
                        $start_date = date("d-m-Y", $s_date_timestamp);

                        $e_date = $row["end_date"];
                        $e_date_timestamp = strtotime($e_date);
                        $end_date = date("d-m-Y", $e_date_timestamp);

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
                            <td><?php echo ($row['number_of_days'] == 1 ) ? $row['number_of_days']." Day" : $row['number_of_days']." Days" ?> </td>
                            <td style="width:150px"><div class="ui <?php switch ($row['status']) {
                                case 'PENDING':
                                    echo "yellow";
                                    break;
                                case 'APPROVED':
                                    echo "green";
                                    break;
                                
                                case 'DECLINED':
                                    echo "grey";
                                    break;
                                
                                default:
                                    echo "basic";
                                    break;
                            }?> horizontal label"><?php echo $row['status']?></div></td>
                            <td class="display-none-print" style="width:70px">
                                <a class="ui icon button" id="edit" href="#" data-toggle="modal" data-target="#exampleModal<?php echo $row['id']?>"><i class="eye icon"></i></a>
                                <form method="post" action="leave-history.php" class="ui form delete">
                                    <button onclick="return checkCancel()" type="submit" name="cancel_request" value='<?php echo $row["id"] ?>' id="delete" class="ui mini icon button delete" <?php echo($row['status'] != "PENDING") ? "disabled" : "" ;?>>
                                        <i style="color:#a3243b" class="close icon"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">About Leave</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="leave-desc border">
                                        <p class="thead-cl mb-3 pb-2 border-bottom">LEAVE DESCRIPTION</p>
                                        <p><?php echo $row['leave_desc']?></p>
                                    </div>
                                    <div class="st-list-con border">
                                        <div class="classes-list border pt-3 ">
                                            <p class="thead-cl px-2 pb-2 m-0">Classes</p>
                                            <?php foreach ($classes as $class) { ?>
                                               <p class="td-cl border-top p-2 m-0"><?php echo $class?></p>
                                            <?php }?>
                                        </div>
                                        <div class="classes-list border pt-3 ">
                                            <p class="thead-cl px-2 pb-2 m-0">Teachers</p>
                                            <?php foreach ($teachers as $teacher) { ?>
                                               <p class="td-cl border-top p-2 m-0"><?php echo $teacher?></p>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn bg-red" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                        </div>
                  <?php  } 
                }?>
            </tbody>
        </table>

    </div>

   
</div>
<?php include("sidenav-foot.php") ?>
<?php include("footer.php") ?>
