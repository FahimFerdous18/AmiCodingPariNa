<?php
session_start();
error_reporting(0);
//check user authenticate or not..if not redirect to login page
if($_SESSION['check']!=true){
    header("Location:index.php");
}
//logout functionality
if($_GET['logout']){
    session_destroy();
    header("Location:index.php");
}
?>


<?php

if(isset($_POST['khoj'])){
    // Create connection

$conn=mysqli_connect("localhost","root","","fahim");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $input  = $_POST['inputbox']; 
    $search_value=$_POST['search'];
   $str_arr = explode (",", $input); 
   rsort($str_arr); //for descending order
  // print_r($str_arr);
   $username=$_SESSION['email'];
//    print_r($str_arr);
if(!empty($input)&&!empty($search_value)){
    $_SESSION['number']=$input;
    $_SESSION['search']=$search_value;
   foreach ($str_arr as $key => $value) {
    date_default_timezone_set('Asia/Dhaka');
    $time1=date("Y-m-d H:i:a");
    $sql12="INSERT INTO number_tab(number1,time1,username)VALUES('$value','$time1','$username')";
    $result1=mysqli_query($conn,$sql12);
       
   }
}
else{
    $msg="Field must not be empty";
}

  

if($result1) {
   
    $search="SELECT*FROM number_tab WHERE number1=$search_value";
    $search_result=mysqli_query($conn,$search);
    $count=mysqli_num_rows($search_result);
if($count>0){
    $success="True";
}
else{
    $false="False";
}
} 
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>User name:<?php echo $_SESSION['email'] ?></h2>
  <a class="btn btn-success" href="?logout=logout">Logout</a>
  <form method="post" action="" name="formsubmit" id="submit">
    Input value  <input type="text" name="inputbox" value="<?php echo $_SESSION['number'] ?>"><br>
    Search <input type="text" name="search" value="<?php echo $_SESSION['search'] ?>"><br>
    <input class="btn btn-default" type="submit" value="khoj" name="khoj" onclick="submitForm()">
      <br>
  </form>
  <h2><?php 
  if(isset($success)){
      echo "Result:".$success;
  }
  if(isset($false)){
    echo "Result:".$false;
}
if(isset($msg)){
   echo $msg;
}
  ?></h2>
</div>
<h2>Inserted data values from database table(to understand propely this functionality have done)</h2>
<table class="table table-striped"> 
  <tr>
    <th>user</th>
    <th>number</th>
    <th>time</th>
    
  </tr>

<?php 
$conn=mysqli_connect("localhost","root","","fahim");
$check="SELECT*FROM number_tab";
$result=mysqli_query($conn,$check);
while($row=$result->fetch_assoc()){?>
<tr>
  <td><?php echo$row['username'] ?></td>
  <td><?php echo$row['number1'] ?></td>
  <td><?php echo$row['time1'] ?></td>
</tr>
<?php }?>
</table>
</body>
</html>
