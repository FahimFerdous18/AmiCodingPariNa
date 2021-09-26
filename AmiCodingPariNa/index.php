<?php 
session_start();
?>
<?php
     
     if(isset($_POST['submit']))
     {
         error_reporting(0);
        // Create connection

$conn=mysqli_connect("localhost","root","","fahim");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
        $email=$_POST['email'];
        $password=$_POST['password'];
       

      
     
        $err= [];
        if(empty($_POST['email'])){
         $err['email']='Email Required';
        }
         if(empty($_POST['password'])){
         $err['password']='password reqired';
        }
       if(isset($email) && isset($password)){
       
           $conn=mysqli_connect("localhost","root","","fahim");
           $sql="INSERT INTO user(email,password1) VALUES('$email','$password')";
           $result=mysqli_query($conn,$sql);
           
           //  echo $count;
           if($result){
             
                $_SESSION['email']=$_POST['email'];
                $_SESSION['password']= $_POST['password'];
                $_SESSION['check']=true;
                header("Location:process.php");

               
           }
           else{
            $msg= "email or password not match";
        }

       }
      
        // 
     }
?>
<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<body>
<div class="container">
<div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Login</div>
                            

                                <form class="form-horizontal" method="post" action="">

                                   
                                   
                                    <div class="form-group">
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>  
                                                 <span>
                                                    <?php
                                                if(isset($err['email']))
                                                {
                                                   echo $err['email'];
                                                }
                                                ?>
                                                </span>
                                          
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="password" class="form-control" name="password" id="name" placeholder="Password" >
                                                <span>
                                                    <?php
                                                if(isset($err['password']))
                                                {
                                                   echo $err['password'];
                                                }
                                                ?>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                  
                                   
                                  

                                    <div class="form-group ">
                                     <input type="submit" name="submit" value="Submit"  class="btn btn-warning shadow">
                                      
                                    </div>
                                  
                                </form>
                                <?php
                                if(isset($msg)){
                                    echo $msg;
                                }
                                ?>
                            </div>

                        </div>
                    </div>
                </div>
</div>
</body>
</html>