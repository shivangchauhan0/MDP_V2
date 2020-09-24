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
$db = mysqli_connect('127.0.0.1', 'root', '','teachers_diary');
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
      if (empty($flaguser)) { array_push($errors, "User already exsits"); }

    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (`name`, `tid`, `username`,`sup_depart`,`department`,`designation`,`password`) 
  			  VALUES('$name', '$tid', '$username', '$sup_depart', '$department', '$designation', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
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
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
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
            header('location: dashboard.php');
          }elseif($designation =='Dean'){
            header('location: dashboarddean.php');
          }elseif($designation =='Principal'){
            header('location: principaldash.php');
          }elseif($username =='admin'){
            header('location: admin.php');
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
    $srno=number_format($srno);
    $query = "DELETE FROM `notes` WHERE srno = $srno";
    mysqli_query($db, $query);
  }
?>