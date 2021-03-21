<?php include("server.php") ?>
<?php include("header.php") ?>
<?php 
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: home.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: home.php");
  }
  ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <h2 class="ml-2 my-0 nav-head"><i class="fa fa-desktop fa-fw" aria-hidden="true"></i> DASHBOARD</h2>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <p id="username" class="mt-0 mr-3 mt-3"><i class='user icon'></i><strong><?php echo $_SESSION['name'] ?></strong></p>
            <a href="users.php"><button type="submit" class="ui button bg-red mx-1 my-2" id="insert-id">Users</button></a> 
            <a href="index.php?logout='1'"><button type="submit" class="ui button bg-red mx-1 my-2" id="insert-id">Logout</button></a> 
          </ul>
        </div>
 </nav>
 <div class="nav-btns mt-1 ml-1">
    <a href="users.php"><button type="submit" class="ui button bg-red mx-1 my-2 tiny" id="insert-id">Users</button></a> 
    <a href="index.php?logout='1'"><button type="submit" class="ui button bg-red mx-1 my-2 tiny" id="insert-id">Logout</button></a>
 </div>
 <div class="admin-grid">
    <div class="ad-con mx-2 pr-1 border-right">
        <div class="head-bar">
            <h2 style="text-align:center" class="my-3 mx-4">ADD NEW ID</h2>
        </div>
        <form method="post" action="admin-dashboard.php" class="ui form admin-form ">
          <?php include('errors.php'); ?>
          <div class="fields">
            <div id="id-input" class="seven wide field">
              <label>ID</label>
              <input placeholder="ID" name="tid" type="text" required>
            </div>
            <div id="deg-input" class="seven wide field">
              <label>Designation</label>
              <select class="ui fluid dropdown" name="designation" required>
                      <option value="">Designation</option>
                      <option value="Principal">Principal</option>
                      <option value="Vice-Principal">Vice Principal</option>
                      <option value="Dean">Dean</option>
                      <option value="Hod">HOD</option>
                      <option value="Professor">Assistant Professor</option>
                  </select>
            </div>
            <div class="field">
                  <label style="visibility:hidden">Designation</label>
                  <button type="submit" class="ui button bg-red" id="insert-id" name="insert_tid">Insert</button>
          </div>
          </div>
      </form>
      <div class="container-four">
        <table class="ui celled table admin-table">
              <thead>
                <tr id="table-head">
                  <th>ID</th>
                  <th>Designation</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
            <?php
              $sql = "SELECT * FROM `verifyid` WHERE 1";
              $result = $db-> query($sql);
              if($result-> num_rows > 0){	
                while ($row = $result-> fetch_assoc()) { ?>
                          <tr><td><?php echo $row["tid"] ?></td>
                          <td><?php echo $row["designation"] ?></td>
                          <td>
                          <form method='post' action='admin-dashboard.php' class='ui form delete'>
                            <button onclick='return checkDelete()' type='submit' name='delete_tid' value='<?php echo $row['id'] ?>' id='delete' class='ui mini icon button delete'>
                              <i class='trash icon'></i>
                            </button>
                          </form>   
                          </td>
                          </tr>
                <?php	}
                }
              ?>
            </tbody>
        </table>
      </div>
   </div>
   <div class="ad-con mx-2 pl-1 pr-1 border-right">
   <div class="head-bar">
            <h2 style="text-align:center" class="my-3 mx-4">ADD NEW TEACHING AID</h2>
        </div>
        <form method="post" action="server.php" class="ui form admin-form ">
          <?php include('errors.php'); ?>
          <div class="fields">
            <div id="id-input" class="fifteen wide field">
              <label>Teaching Aid</label>
              <input placeholder="Teaching aid" name="teachingaid" type="text" required>
            </div>
            <div class="field">
                  <label style="visibility:hidden">Designation</label>
                  <button type="submit" class="ui button bg-red" id="insert-id" name="insert_teachingaid">Insert</button>
          </div>
          </div>
      </form>
      <div class="container-four">
        <table class="ui celled table admin-table">
              <thead>
                <tr id="table-head">
                  <th>Name</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
            <?php
              $sql = "SELECT * FROM `teachingaid` WHERE 1";
              $result = $db-> query($sql);
              if($result-> num_rows > 0){	
                while ($row = $result-> fetch_assoc()) { ?>
                          <td><?php echo $row["name"] ?></td>
                          <td>
                          <form method='post' action='admin-dashboard.php' class='ui form delete'>
                            <button onclick='return checkDelete()' type='submit' name='delete_teachingaid' value='<?php echo $row['id'] ?>' id='delete' class='ui mini icon button delete'>
                              <i class='trash icon'></i>
                            </button>
                          </form>   
                          </td>
                          </tr>
                <?php	}
                }
              ?>
            </tbody>
        </table>
      </div>
   </div>
   <div class="ad-con mx-3">
    <div class="head-bar">
            <h2 style="text-align:center" class="my-3 mx-4">ADD NEW METHODOLOGY</h2>
        </div>
        <form method="post" action="server.php" class="ui form admin-form ">
          <?php include('errors.php'); ?>
          <div class="fields">
            <div id="id-input" class="fifteen wide field">
              <label>Methodology</label>
              <input placeholder="Methodology" name="methodology" type="text" required>
            </div>
            <div class="field">
                  <label style="visibility:hidden">Designation</label>
                  <button type="submit" class="ui button bg-red" id="insert-id" name="insert_methodology">Insert</button>
          </div>
          </div>
      </form>
      <div class="container-four">
        <table class="ui celled table admin-table">
              <thead>
                <tr id="table-head">
                  <th>Methodology</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
            <?php
              $sql = "SELECT * FROM `methodology` WHERE 1";
              $result = $db-> query($sql);
              if($result-> num_rows > 0){	
                while ($row = $result-> fetch_assoc()) { ?>
                          <td><?php echo $row["name"] ?></td>
                          <td>
                          <form method='post' action='admin-dashboard.php' class='ui form delete'>
                            <button onclick='return checkDelete()' type='submit' name='delete_methodology' value='<?php echo $row['id'] ?>' id='delete' class='ui mini icon button delete'>
                              <i class='trash icon'></i>
                            </button>
                          </form>   
                          </td>
                          </tr>
                <?php	}
                }
              ?>
            </tbody>
        </table>
      </div>
  </div>
 </div>
  <?php include("footer.php") ?>
