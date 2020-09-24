<?php include("header.php") ?>
<?php include("sidenav-head.php") ?>

 <!-- Page Content -->
 <div id="page-content-wrapper">
        <nav
          class="navbar navbar-expand-lg navbar-light bg-light border-bottom"
        >
          <button class="ui button bg-red small" id="menu-toggle"><i class="fa fa-bars mr-1" aria-hidden="true"></i> Menu</button>
        <h2 class="ml-2 my-0 nav-head">DASHBOARD</h2>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <p id="username" class="mt-0 mr-3"><i class='user icon'></i><strong><?php echo $_SESSION['name'] ?></strong></p>
          </ul>
        </div>
 </nav>
    <div class="container-fluid my-3">
      <table class="ui celled table">
        <thead>
          <tr id="table-head">
            <th>LECTURE</th>
            <th>CLASS</th>
            <th>SUBJECT</th>
            <th>DATE</th>
            <th>DAY</th>
            <th><i class='circle yellow icon'></i>HOD</th>
            <th><i class="circle blue icon"></i> DEAN</th>
            <th><i class="circle green icon"></i>PRINCIPAL</th>
            <th>STATUS</th>	  
            <th>E || D</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $username = $_SESSION['username'];
            $user=$_GET['username'];
            $hod_true = $_SESSION['designation'] == 'Hod'? $hod_true="" : $hod_true="<i class=\"circle yellow icon\"></i>";
            $hod_false = $_SESSION['designation'] == 'Hod'? $hod_false="" : $hod_false="<i class=\"circle outline yellow icon\"></i>";
            $incomp = "<i class=\"circle red icon\"></i>";
            $dean_true="<i class=\"circle blue icon\"></i>";
            $dean_false="<i class=\"circle outline blue icon\"></i>";
            $principal_true="<i class=\"circle green icon\"></i>";	
            $principal_false="<i class=\"circle outline green icon\"></i>";	
            $sql = "SELECT * FROM `notes` WHERE (`username`='$username' OR `username`='$user') ";
            $result = $db->query($sql);
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                $date = $row["date"];
                $timestamp = strtotime($date);
                $formatted_date = date("d-m-Y", $timestamp);
                ?>
            <tr>
                <td><?php echo  $row["lecture"] ?></td>
                <td><?php echo  $row["class"] ?></td>
                <td><?php echo  $row["subject"] ?></td>
                <td><?php echo  $formatted_date ?></td>
                <td><?php echo  $row["day"] ?></td>
                <td><?php echo  ($row["hod"] == 1 ? "Complete" : ($row["hod"] == 2 ? "Incomplete" : "")) ?></td>
                <td><?php echo  ($row["dean"] == 1 ? "Complete" : ($row["dean"] == 2 ? "Incomplete" : "")) ?></td>
                <td><?php echo  ($row["principal"] == 1 ? "Complete" : ($row["principal"] == 2 ? "Incomplete" : "")) ?></td>
                <td><?php echo ($row["hod"] == 1 ?  $hod_true : ($row["hod"] == 2 ? $incomp : $hod_false))." ".($row["dean"] == 1 ? $dean_true : ($row["dean"] == 2 ? $incomp : $dean_false))." ".($row["principal"] == 1 ? $principal_true : ($row["principal"] == 2 ? $incomp : $principal_false))?></td>
                <td>
                  <?php if($row["principal"]== 1) { ?>
                    <a class="ui icon button disabled" id="edit" href="edit.php?id=<?php echo $row["srno"] ?>"><i class="edit icon"></i></a>
                    <form method="post" action="index.php" class="ui form delete">
                      <button onclick="return checkDelete()" type="submit" name="delete" value='<?php echo $row["srno"] ?>' id="delete" class="ui mini icon button disabled delete">
                        <i class="trash icon"></i>
                      </button>
                    </form>
                    <?php }else { ?>
                    <a class="ui icon" id="edit" href="edit.php?id=<?php echo $row["srno"] ?>"><i class="edit icon"></i></a>
                    <form method="post" action="index.php" class="ui form delete">
                      <button onclick="return checkDelete()" type="submit" name="delete" value='<?php echo $row["srno"] ?>' id="delete" class="ui mini icon button delete">
                        <i class="trash icon"></i>
                      </button>
                    </form>
                  <?php } ?>
                </td>
            </tr>
          <?php 
              }
            $username = $_SESSION['username'];
            $user=$_GET['username'];
            $sql = "SELECT * FROM `notes` WHERE (`username`='$username' OR `username`='$user') ";
            $result = $db->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                 if ($row["hod_com"] != "") {
                  echo "<tr><td colspan='10'> HOD : ".$row["hod_com"]."</td></tr>";
                 }
                 if ($row["dean_com"] != "") {
                  echo "<tr><td colspan='10'> Dean : ".$row["dean_com"]."</td></tr>";
                 }
                 if ($row["principal_com"] != "") {
                  echo "<tr><td colspan='10'> Principal : ".$row["principal_com"]."</td></tr>";
                 }
              ?>
          <?php
                }
              }
          ?>
        </tbody>
      </table>
    </div>
<?php include("sidenav-foot.php") ?>
<?php include("footer.php") ?>
