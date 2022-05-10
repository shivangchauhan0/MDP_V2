<?php include("header.php") ?>
<?php include("sidenav-head.php") ?>
<style>
    .head-bar-grid{
      display: grid;
      grid-template-columns: auto auto;
    }
    .check{
      display: none;
    }
    .action-btns{
      width:fit-content;
      margin-left: auto;        
    }
    .HOD{
      background: rgba(0, 0, 0, 0.05);
    }
    .DEAN{
      background: rgba(0, 0, 0, 0.05);
    }
    .PRINCIPAL{
      background: rgba(0, 0, 0, 0.05);
    }
    @media only screen and (max-width: 600px) {
        .head-bar-grid{
        grid-template-columns: 1fr;
      }
      .check{
        display: inline;
      }
      .corr{
        display: none;
      }
      .action-btns{
          margin-left: 0;        
        }
    }
</style>
<div id="page-content-wrapper">
  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
      <button class="ui button bg-red small" id="menu-toggle"><i class="fa fa-bars mr-1" aria-hidden="true"></i> Menu</button>
      <h2 class="ml-2 my-0 nav-head"><span class="corr">CORRECTION</span> <span class="check">CHECK</span> LOGS</h2>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <p id="username" class="mt-0 mr-3"><i class='user icon'></i><strong><?php echo $_SESSION['name'] ?></strong></p>
        </ul>
      </div>
  </nav>

  <div class="container-fluid my-3">
      <div class="head-bar-sec head-bar-grid">
            <h2>Checking logs &#8594 <?php echo $_GET['id']?></h2>
            <div class="action-btns">
              <?php 
                $role = $_GET['role'];
                if (isset($role)) {
              ?>
                <a class="" href="correction-logs.php?id=<?php echo $_GET['id'] ?>"><button type="submit" class="ui button bg-red mx-1 my-2 tiny" id="insert-id">Clear</button></a> 
              <?php } ?>
              <a class="" href="correction-logs.php?id=<?php echo $_GET['id'] ?>&role=Hod"><button type="submit" class="ui button bg-red mx-1 my-2 tiny" id="insert-id">HOD</button></a> 
              <a class="" href="correction-logs.php?id=<?php echo $_GET['id'] ?>&role=Dean"><button type="submit" class="ui button bg-red mx-1 my-2 tiny" id="insert-id">DEAN</button></a> 
              <a class="" href="correction-logs.php?id=<?php echo $_GET['id'] ?>&role=Principal"><button type="submit" class="ui button bg-red mx-1 my-2 tiny" id="insert-id">PRINCIPAL</button></a> 
              <a class="" href="correction.php?id=<?php echo $_GET['id']?>&unchecked=true"><button type="submit" class="ui button bg-red mx-1 my-2 tiny" id="insert-id">Back</button></a>
            </div>
        </div>
    
    <div class="c-logs">
      <?php 
        $id = $_GET['id'];
        if (isset($_GET['role'])) {
          switch ($_GET['role']) {
            case 'Hod':
              $sql = "SELECT * FROM `check_logs` WHERE `checker_role` = 'Hod' AND `record_owner_id` = '$id'";
              break;
            case 'Dean':
              $sql = "SELECT * FROM `check_logs` WHERE `checker_role` = 'Dean' AND `record_owner_id` = '$id' ";
              break;
            case 'Principal':
              $sql = "SELECT * FROM `check_logs` WHERE `checker_role` = 'Principal' AND `record_owner_id` = '$id'";
              break;
            
            default:
              $sql = "SELECT * FROM `check_logs` WHERE `record_owner_id` = '$id'";
              break;
          }
        } else {
          $sql = "SELECT * FROM `check_logs` WHERE `record_owner_id` = '$id'";
        }
        $result = $db->query($sql);
        if ($result-> num_rows > 0) { ?>
      <table class="ui celled table">
          <thead>
            <tr>
            <th>Comment</th>
            <th># Records</th>
            <th>Check Date</th>
            <!-- <th>Check Time</th> -->
            <th>Role</th>
          </tr>
          </thead>
          <tbody>
             <?php while($row = $result->fetch_assoc()) {
                date_default_timezone_set('Asia/Kolkata');
                $role = strtoupper($row['checker_role']);

                $date = $row["date"];
                $timestamp = strtotime($date);
                $formatted_date = date("d-m-Y", $timestamp);
                
                $time = $row['time'];
                $timestamp_sec = strtotime($time);
                $formatted_time = date("h:i a", $timestamp_sec);

            
            ?>
            <tr class="<?php echo $role?>">
              <td><?php echo $row['log'] ?></td>
              <td><?php echo $row['number'] ?> Records</td>
              <td><?php echo $formatted_date ?></td>
              <!-- <td><?php echo $formatted_time ?></td> -->
              <td><?php echo $role ?></td>
            </tr>
            <?php } 
            } else { ?>
                <div class='alert alert-warning mx-3 my-2' role='alert'>No correction logs found</div>
            <?php }?>
          </tbody>
        </table>
    </div>

</div>
<?php include("sidenav-foot.php") ?>
<?php include("footer.php") ?>
