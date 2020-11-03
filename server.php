<?php 
session_start();
error_reporting(0);

// initializing variables
$username = "";
$designation ="";
$department = "";
$sup_depart = "";
$errors = array(); 

// connect to the user database
$db = mysqli_connect('127.0.0.1', 'root', '','test');
$db -> select_db('notes');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $tid = mysqli_real_escape_string($db, $_POST['tid']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $sup_depart=mysqli_real_escape_string($db, $_POST['sup_depart']);
  $department=mysqli_real_escape_string($db, $_POST['department']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $flag="";
  $flaguser="true";
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($tid)) { array_push($errors, "Teachers ID is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  $ID_check_query = "SELECT * FROM `verifyid` WHERE `tid`='$tid' LIMIT 1";
  $result = mysqli_query($db, $ID_check_query);
  $idf = mysqli_fetch_assoc($result);
   if ($idf['tid']==$tid) {
      $designation = $idf['designation'];
      $flag="true";
      $user_check_query = "SELECT * FROM users WHERE username='$username' OR `tid`='$tid' LIMIT 1";
      $result = mysqli_query($db, $user_check_query);
      $user = mysqli_fetch_assoc($result);
      if ($user) { // if user exists
        if ($user['username'] === $username) {
          $flaguser="";
          if (empty($flaguser)) { array_push($errors, "Username already taken"); }
        }
        if ($user['tid'] === $tid) {
          $flaguser="";
          if (empty($flaguser)) { array_push($errors, "Account already exists"); }
        }
      }
      
      // Finally, register user if there are no errors in the form
      if (count($errors) == 0) {
        $password = $password_1;//encrypt the password before saving in the database
        $query = "INSERT INTO users (`name`, `tid`, `username`,`sup_depart`,`department`,`designation`,`password`) 
              VALUES('$name', '$tid', '$username', '$sup_depart', '$department', '$designation', '$password')";
        mysqli_query($db, $query);
        if($designation != "Principal") {
          $check_tt_query = "SELECT * FROM `timetable_new` WHERE `username`='$username'";
          $tt_res = $db->query($check_tt_query);
          if ($tt_res->num_rows == 0) {
            $query_timetable = "INSERT INTO `timetable_new` (`id`, `d1`, `c1`, `s1`, `c2`, `s2`, `c3`, `s3`, `c4`, `s4`, `c5`, `s5`, `c6`, `s6`, `c7`, `s7`, `d2`, `c8`, `s8`, `c9`, `s9`, `c10`, `s10`, `c11`, `s11`, `c12`, `s12`, `c13`, `s13`, `c14`, `s14`, `d3`, `c15`, `s15`, `c16`, `s16`, `c17`, `s17`, `c18`, `s18`, `c19`, `s19`, `c20`, `s20`, `c21`, `s21`, `d4`, `c22`, `s22`, `c23`, `s23`, `c24`, `s24`, `c25`, `s25`, `c26`, `s26`, `c27`, `s27`, `c28`, `s28`, `d5`, `c29`, `s29`, `c30`, `s30`, `c31`, `s31`, `c32`, `s32`, `c33`, `s33`, `c34`, `s34`, `c35`, `s35`, `d6`, `c36`, `s36`, `c37`, `s37`, `c38`, `s38`, `c39`, `s39`, `c40`, `s40`, `c41`, `s41`, `c42`, `s42`, `username`) VALUES (NULL, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '$username')";
          }
          mysqli_query($db, $query_timetable);
        }
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You can now log in";
        header('location: login.php?success=1');
  }
   } else {
    if (empty($flag)) { array_push($errors, "Not authorized for registration"); }
   }
   

}
// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $hash_password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND (password='$password' OR password='$hash_password')";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $row = $results-> fetch_assoc();
          $designation = $row['designation'];
          $department = $row['department'];
          $sup_depart = $row['sup_depart'];
          $name = $row['name'];
          $_SESSION['username'] = $username;
          $_SESSION['designation'] = $designation;
          $_SESSION['department'] = $department;
          $_SESSION['sup_depart'] = $sup_depart;
          $_SESSION['name'] = strtoupper($name);

          if($designation =='Hod'){
            header('location: asst-professors.php');
          }elseif($designation =='Dean'){
            header('location: sub-departments.php');
          }elseif($designation =='Principal'){
            header('location: departments.php');
          }elseif($username =='admin'){
            header('location: admin-dashboard.php');
          }else{
            header('location: index.php');
          }
         
        }else {
            array_push($errors, "Incorrect Username or Password");
        }
    }
  }
// NOTES DELETE
if(isset($_POST['delete'])) 
  {    
    $srno = mysqli_real_escape_string($db, $_POST['delete']);
    $query = "DELETE FROM `notes` WHERE srno = $srno";
    mysqli_query($db, $query);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
// TIMETABLE UPDATE
if(isset($_POST['tt_update'])) 
  {    
    $c1 = $_POST['c1'];
    $s1 = $_POST['s1'];
    $c2 = $_POST['c2'];
    $s2 = $_POST['s2'];
    $c3 = $_POST['c3'];
    $s3 = $_POST['s3'];
    $c4 = $_POST['c4'];
    $s4 = $_POST['s4'];
    $c5 = $_POST['c5'];
    $s5 = $_POST['s5'];
    $c6 = $_POST['c6'];
    $s6 = $_POST['s6'];
    $c7 = $_POST['c7'];
    $s7 = $_POST['s7'];
    // --------------------------------
    $c8 = $_POST['c8'];
    $s8 = $_POST['s8'];
    $c9 = $_POST['c9'];
    $s9 = $_POST['s9'];
    $c10 = $_POST['c10'];
    $s10 = $_POST['s10'];
    $c11 = $_POST['c11'];
    $s11 = $_POST['s11'];
    $c12 = $_POST['c12'];
    $s12 = $_POST['s12'];
    $c13 = $_POST['c13'];
    $s13 = $_POST['s13'];
    $c14 = $_POST['c14'];
    $s14 = $_POST['s14'];
    // -------------------------------
    $c15 = $_POST['c15'];
    $s15 = $_POST['s15'];
    $c16 = $_POST['c16'];
    $s16 = $_POST['s16'];
    $c17 = $_POST['c17'];
    $s17 = $_POST['s17'];
    $c18 = $_POST['c18'];
    $s18 = $_POST['s18'];
    $c19 = $_POST['c19'];
    $s19 = $_POST['s19'];
    $c20 = $_POST['c20'];
    $s20 = $_POST['s20'];
    $c21 = $_POST['c21'];
    $s21 = $_POST['s21'];
    // --------------------------------
    $c22 = $_POST['c22'];
    $s22 = $_POST['s22'];
    $c23 = $_POST['c23'];
    $s23 = $_POST['s23'];
    $c24 = $_POST['c24'];
    $s24 = $_POST['s24'];
    $c25 = $_POST['c25'];
    $s25 = $_POST['s25'];
    $c26 = $_POST['c26'];
    $s26 = $_POST['s26'];
    $c27 = $_POST['c27'];
    $s27 = $_POST['s27'];
    $c28 = $_POST['c28'];
    $s28 = $_POST['s28'];
    // ----------------------------------
    $c29 = $_POST['c29'];
    $s29 = $_POST['s29'];
    $c30 = $_POST['c30'];
    $s30 = $_POST['s30'];
    $c31 = $_POST['c31'];
    $s31 = $_POST['s31'];
    $c32 = $_POST['c32'];
    $s32 = $_POST['s32'];
    $c33 = $_POST['c33'];
    $s33 = $_POST['s33'];
    $c34 = $_POST['c34'];
    $s34 = $_POST['s34'];
    $c35 = $_POST['c35'];
    $s35 = $_POST['s35'];
    // -----------------------------------
    $c36 = $_POST['c36'];
    $s36 = $_POST['s36'];
    $c37 = $_POST['c37'];
    $s37 = $_POST['s37'];
    $c38 = $_POST['c38'];
    $s38 = $_POST['s38'];
    $c39 = $_POST['c39'];
    $s39 = $_POST['s39'];
    $c40 = $_POST['c40'];
    $s40 = $_POST['s40'];
    $c41 = $_POST['c41'];
    $s41 = $_POST['s41'];
    $c42 = $_POST['c42'];
    $s42 = $_POST['s42'];
    // ----------------------------------
    $username = $_POST['tt_update'];
    $query = "UPDATE `timetable_new` SET `c1` = '$c1', `s1` = '$s1', `c2` = '$c2', `s2` = '$s2', `c3` = '$c3', `s3` = '$s3', `c4` = '$c4', `s4` = '$s4', `c5` = '$c5', `s5` = '$s5', `c6` = '$c6', `s6` = '$s6', `c7` = '$c7', `s7` = '$s7', `c8` = '$c8', `s8` = '$s8', `c9` = '$c9', `s9` = '$s9', `c10` = '$c10', `s10` = '$s10', `c11` = '$c11', `s11` = '$s11', `c12` = '$c12', `s12` = '$s12', `c13` = '$c13', `s13` = '$s13', `c14` = '$c14', `s14` = '$s14', `c15` = '$c15', `s15` = '$s15', `c16` = '$c16', `s16` = '$s16', `c17` = '$c17', `s17` = '$s17', `c18` = '$c18', `s18` = '$s18', `c19` = '$c19', `s19` = '$s19', `c20` = '$c20', `s20` = '$s20', `c21` = '$c21', `s21` = '$s21', `c22` = '$c22', `s22` = '$s22', `c23` = '$c23', `s23` = '$s23', `c24` = '$c24', `s24` = '$s24', `c25` = '$c25', `s25` = '$s25', `c26` = '$c26', `s26` = '$s26', `c27` = '$c27', `s27` = '$s27', `c28` = '$c28', `s28` = '$s28', `c29` = '$c29', `s29` = '$s29', `c30` = '$c30', `s30` = '$s30', `c31` = '$c31', `s31` = '$s31', `c32` = '$c32', `s32` = '$s32', `c33` = '$c33', `s33` = '$s33', `c34` = '$c34', `s34` = '$s34', `c35` = '$c35', `s35` = '$s35', `c36` = '$c36', `s36` = '$s36', `c37` = '$c37', `s37` = '$s37', `c38` = '$c38', `s38` = '$s38', `c39` = '$c39', `s39` = '$s39', `c40` = '$c40', `s40` = '$s40', `c41` = '$c41', `s41` = '$s41', `c42` = '$c42', `s42` = '$s42' WHERE `username` = '$username'";
    mysqli_query($db, $query);
    header('location: timetable.php');
  }
//   NEW SUBMIT RECORD ROUTE
if (isset($_POST['add_record'])) { 
  date_default_timezone_set('Asia/Kolkata');
  $date_t = mysqli_real_escape_string($db, $_POST['add_record']);
  $current_user = $_SESSION['username'];
  $dayOfWeek = date("l", strtotime($date_t));
  $lecture = mysqli_real_escape_string($db, $_POST['lecture']);
  $class = mysqli_real_escape_string($db, $_POST['class']);
  $subject = mysqli_real_escape_string($db, $_POST['subject']);
  $classtype = mysqli_real_escape_string($db, $_POST['classtype']);
  $methodology= mysqli_real_escape_string($db, $_POST['methodology']);
  $teaching_aid = mysqli_real_escape_string($db, $_POST['teachingaid']);
  $content = mysqli_real_escape_string($db, $_POST['content']);
  $class_activity = mysqli_real_escape_string($db, $_POST['classactivity']);
  $attendance = mysqli_real_escape_string($db, $_POST['attendance']);
  $other_activity = mysqli_real_escape_string($db, $_POST['otheractivity']);
  $remark = mysqli_real_escape_string($db, $_POST['remark']);
  $hod = 0;
  $dean = 0;
  $principal = 0;
  
  if ($_SESSION['designation'] == 'Hod') {
     $hod = 1;
  } else if ($_SESSION['designation'] == 'Dean' || $_SESSION['designation'] == 'Vice-Principal' ) {
    $hod = 1;
    $dean = 1;
 } 
  $query = "INSERT INTO `notes`( `username`, `lecture`, `class`, `subject`,`date`,`day` , `theory/prac`, `methodology`, `teaching_aid`, `content`, `class_activity`, `attendance`, `other_activity`, `remark`, `hod`, `dean`, `principal`) VALUES ('$current_user','$lecture','$class','$subject','$date_t','$dayOfWeek','$classtype','$methodology','$teaching_aid','$content','$class_activity','$attendance','$other_activity','$remark','$hod','$dean','$principal')";
  mysqli_query($db, $query);
  header('Location: ' . $_SERVER['HTTP_REFERER']);
     
}
// EDIT RECORD
if (isset($_POST['edit_record'])){
  $id =  mysqli_real_escape_string($db, $_POST['edit_record']);
  $subject = mysqli_real_escape_string($db, $_POST['subject']);
  $classtype = mysqli_real_escape_string($db, $_POST['classtype']);
  $methodology= mysqli_real_escape_string($db, $_POST['methodology']);
  $teaching_aid = mysqli_real_escape_string($db, $_POST['teachingaid']);
  $content = mysqli_real_escape_string($db, $_POST['content']);
  $class_activity = mysqli_real_escape_string($db, $_POST['classactivity']);
  $attendance = mysqli_real_escape_string($db, $_POST['attendance']);
  $other_activity = mysqli_real_escape_string($db, $_POST['otheractivity']);
  $remark = mysqli_real_escape_string($db, $_POST['remark']);
  $query = "UPDATE `notes` SET `subject` = '$subject',`theory/prac`='$classtype',`methodology`= '$methodology',`teaching_aid`='$teaching_aid',`content`='$content',`class_activity`='$class_activity',`attendance`='$attendance',`other_activity`='$other_activity',`remark`='$remark' WHERE `srno`='$id'";
  mysqli_query($db, $query);
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}

// ADMIN
  // ID
    if (isset($_POST['insert_tid'])) {
      $tid = mysqli_real_escape_string($db, $_POST['tid']);
      $designation = mysqli_real_escape_string($db, $_POST['designation']);
    
      $user_check_query = "SELECT * FROM `verifyid` WHERE `tid`='$tid' LIMIT 1";
      $result = mysqli_query($db, $user_check_query);
      $user = mysqli_fetch_assoc($result);
      
      if ($user) { // if user exists
        if ($user['tid'] === $tid) {
          array_push($errors, "ID already exists");
        }
      }
    
      if (count($errors) == 0) {
          $query = "INSERT INTO `verifyid` ( `tid`, `designation`) 
                    VALUES('$tid', '$designation')";
          mysqli_query($db, $query);
      }
      header('Location: ' . $_SERVER['HTTP_REFERER']);
      
    }
    if(isset($_POST['delete_tid'])) 
    {    
      $id = mysqli_real_escape_string($db, $_POST['delete_tid']);
      $query = "DELETE FROM `verifyid` WHERE `id` = $id";
      mysqli_query($db, $query);
      header('Location: ' . $_SERVER['HTTP_REFERER']);
  
    } 
  // METHODOLOGY
  if (isset($_POST['insert_methodology'])) {
     $name = $_POST['methodology'];
     $query = "INSERT INTO `methodology` (`name`) 
                    VALUES('$name')";
          mysqli_query($db, $query);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
  if(isset($_POST['delete_methodology'])) 
    {    
      $id = mysqli_real_escape_string($db, $_POST['delete_methodology']);
      $query = "DELETE FROM `methodology` WHERE `id` = $id";
      mysqli_query($db, $query);
      header('Location: ' . $_SERVER['HTTP_REFERER']);
    } 
  // TEACHING AID
  if (isset($_POST['insert_teachingaid'])) {
     $name = $_POST['teachingaid'];
     $query = "INSERT INTO `teachingaid` (`name`) 
                    VALUES('$name')";
          mysqli_query($db, $query);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
  if(isset($_POST['delete_teachingaid'])) 
    {    
      $id = mysqli_real_escape_string($db, $_POST['delete_teachingaid']);
      $query = "DELETE FROM `teachingaid` WHERE `id` = $id";
      mysqli_query($db, $query);
      header('Location: ' . $_SERVER['HTTP_REFERER']);
    } 
// USERS
if(isset($_POST['delete_user'])) 
{    
  $id = mysqli_real_escape_string($db, $_POST['delete_user']);
  $query = "DELETE FROM `users` WHERE `id` = $id";
  mysqli_query($db, $query);
  header('Location: users.php');
}  
if(isset($_POST['delete_user_records'])) 
{    
  $username = mysqli_real_escape_string($db, $_POST['delete_user_records']);
  $query_two = "DELETE FROM `notes` WHERE `username` = '$username'";
  mysqli_query($db, $query_two);
  header('Location: users.php');
}  
if(isset($_POST['delete_user_timetable'])) 
{    
  $username = mysqli_real_escape_string($db, $_POST['delete_user_timetable']);
  $query_two = "SELECT * FROM `timetable_new` WHERE `username` = '$username'";
  $result = $db-> query($query_two);
  $row = $result-> fetch_assoc();
  $id = $row['id'];
  $delete_query = "DELETE FROM `timetable_new` WHERE `timetable_new`.`id` = $id";
  mysqli_query($db, $delete_query);
  header('Location: users.php');
}  
// CHECK NOTES
if(isset($_POST['check'])){
  $done = mysqli_real_escape_string($db, $_POST['done']);
  $comment = mysqli_real_escape_string($db, $_POST['comment']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  // ----------------FILTER VARIABLES-----------------
  $limit = $_POST['limit'];
  $filter_date = mysqli_real_escape_string($db, $_POST['filter_date']); 
  $filter_day =  mysqli_real_escape_string($db, $_POST['filter_day']); 
  $from_date =  mysqli_real_escape_string($db, $_POST['from_date']); 
  $till_date =  mysqli_real_escape_string($db, $_POST['till_date']);
  $filter_lecture =  mysqli_real_escape_string($db, $_POST['lecture']); 
  // ------------------------------------------------
  if ($_SESSION['designation'] == 'Hod') {
    $start_sql = "UPDATE `notes` SET `hod`= '$done' WHERE `username`='$username' AND `hod` = '0'";
    $comment_sql = "UPDATE `notes` SET `hod_com`= '$comment' WHERE `username`='$username' AND `hod` = '0' ORDER BY srno DESC LIMIT 1";
    $check_date_sql = "UPDATE `notes` SET `checkdate`= '$comment' WHERE `username`='$username' AND `hod` = '0' ORDER BY srno DESC LIMIT 1";
  } else if ($_SESSION['designation'] == 'Dean') {
    $start_sql = "UPDATE `notes` SET `dean`= '$done' WHERE `username`='$username' AND `dean` = '0'";
    $comment_sql = "UPDATE `notes` SET `dean_com`= '$comment' WHERE `username`='$username' AND `dean` = '0' ORDER BY srno DESC LIMIT 1";
  } else if ($_SESSION['designation'] == 'Principal' || $_SESSION['designation'] == 'Vice-Principal') {
    $start_sql = "UPDATE `notes` SET `principal`= '$done' WHERE `username`='$username' AND `principal` = '0'";
    $comment_sql = "UPDATE `notes` SET `principal_com`= '$comment' WHERE `username`='$username' AND `principal` = '0' ORDER BY srno DESC LIMIT 1";
  }
  if ($filter_date != "empty") {
    $mid_sql = " AND `date`='$filter_date'";
  } else if ($filter_day != "empty") {
    $mid_sql = " AND `day`='$filter_day'";
  } else if ($from_date != "empty") {
    $mid_sql = " AND `date` BETWEEN '$from_date' AND '$till_date'";
  } else if ($filter_lecture != "empty") {
    $mid_sql = " AND `lecture`='$filter_lecture'";
  } else {
    $mid_sql = "";
  }
  $end_sql = " ORDER BY srno DESC LIMIT $limit";
  $sql = $start_sql.$mid_sql.$end_sql;
  if ($comment != '')
      {
        if ($_SESSION['designation'] == 'Hod') {
          $comment_reset_sql = "UPDATE `notes` SET `hod_com` = '' WHERE `username`='$username'";
        } else if ($_SESSION['designation'] == 'Dean') {
          $comment_reset_sql = "UPDATE `notes` SET `dean_com` = '' WHERE `username`='$username'";
        } else if ($_SESSION['designation'] == 'Principal' || $_SESSION['designation'] == 'Vice-Principal') {
          $comment_reset_sql = "UPDATE `notes` SET `principal_com` = '' WHERE `username`='$username'";
        }
        mysqli_query($db, $comment_reset_sql);
        mysqli_query($db, $comment_sql);
      }
  mysqli_query($db, $sql);
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}

// UNCHECK NOTES
if(isset($_POST['uncheck'])) 
  {
    $srno = mysqli_real_escape_string($db, $_POST['uncheck']);
    if ($_SESSION['designation'] == 'Hod') {
      $query = "UPDATE `notes` SET `hod`= 0 WHERE `srno`='$srno'";
    } else if ($_SESSION['designation'] == 'Dean') {
      $query = "UPDATE `notes` SET `Dean`= 0 WHERE `srno`='$srno'";
    } else if ($_SESSION['designation'] == 'Principal' || $_SESSION['designation'] == 'Vice-Principal') {
      $query = "UPDATE `notes` SET `Principal`= 0 WHERE `srno`='$srno'";
    } 
      mysqli_query($db, $query);
      header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
// DELETE COMMENTS
if(isset($_POST['del_com'])) 
  {
    $srno = mysqli_real_escape_string($db, $_POST['del_com']);
    if ($_SESSION['designation'] == 'Hod') {
      $query = "UPDATE `notes` SET `hod_com`= '' WHERE `srno`='$srno'";
    } else if ($_SESSION['designation'] == 'Dean') {
      $query = "UPDATE `notes` SET `dean_com`= '' WHERE `srno`='$srno'";
    } else if ($_SESSION['designation'] == 'Principal' || $_SESSION['designation'] == 'Vice-Principal') {
      $query = "UPDATE `notes` SET `principal_com`= '' WHERE `srno`='$srno'";
    } 
      mysqli_query($db, $query);
      header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
// VICE PRINCIPAL CHECKING 
if(isset($_POST['vp_check'])) 
{
  $check_vp_sql = "SELECT * FROM `users` WHERE `designation`='Vice-Principal'";
  $result = $db->query($check_vp_sql);
  $row = $result->fetch_assoc();
  if($row['tid'] == "disable" || $row['tid'] != "enable"){
    $query = "UPDATE `users` SET `tid`= 'enable' WHERE `designation`='Vice-Principal'";
  } 
  if($row['tid'] == "enable"){
    $query = "UPDATE `users` SET `tid`= 'disable' WHERE `designation`='Vice-Principal'";
  } 
    mysqli_query($db, $query);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>

