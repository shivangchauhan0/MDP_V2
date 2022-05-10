<?php include("header.php") ?>
<?php include("sidenav-head.php") ?>
<style>
    .head-bar-grid{
      display: grid;
      grid-template-columns: auto auto;
    }
    .action-btns{
      width:fit-content;
      margin-left: auto;        
    }
    @media only screen and (max-width: 600px) {
      .head-bar-grid{
      grid-template-columns: 1fr;
    }
    }
</style>
<div id="page-content-wrapper">
  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
      <button class="ui button bg-red small" id="menu-toggle"><i class="fa fa-bars mr-1" aria-hidden="true"></i> Menu</button>
      <h2 class="ml-2 my-0 nav-head">CORRECTION LOGS</h2>
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
              <a class="" href="correction-logs.php?id=<?php echo $_GET['id'] ?>&role=hod"><button type="submit" class="ui button bg-red mx-1 my-2 tiny" id="insert-id">HOD</button></a> 
              <a class="" href="correction-logs.php?id=<?php echo $_GET['id'] ?>&role=dean"><button type="submit" class="ui button bg-red mx-1 my-2 tiny" id="insert-id">DEAN</button></a> 
              <a class="" href="correction-logs.php?id=<?php echo $_GET['id'] ?>&role=principal"><button type="submit" class="ui button bg-red mx-1 my-2 tiny" id="insert-id">PRINCIPAL</button></a> 
              <a class="" href="correction.php?id=<?php echo $_GET['id']?>&unchecked=true"><button type="submit" class="ui button bg-red mx-1 my-2 tiny" id="insert-id">Back</button></a>
            </div>
        </div>
    
    <div class="c-logs">
      <table class="ui celled table">
          <thead>
            <tr>
            <th>Comment</th>
            <th>#</th>
            <th>Date</th>
            <th>Time</th>
            <th>Role</th>
          </tr>
          </thead>
          <tbody>
            <?php 
              $sql = "SELECT * FROM `check_logs` WHERE 1";
              $result = $db->query($sql);

              while($row = $result->fetch_assoc()) {
                $date = $row["date"];
                $timestamp = strtotime($date);
                $formatted_date = date("d-m-Y", $timestamp);
                
                $time = $row['time'];
                $timestamp_sec = strtotime($time);
                $formatted_time = date("h:i", $timestamp_sec);

            
            ?>
            <tr>
              <td><?php echo $row['log'] ?></td>
              <td><?php echo $row['number'] ?></td>
              <td><?php echo $formatted_date ?></td>
              <td><?php echo $formatted_time ?></td>
              <td><?php echo strtoupper($row['checker_role']) ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
    </div>

</div>
<?php include("sidenav-foot.php") ?>
<?php include("footer.php") ?>
