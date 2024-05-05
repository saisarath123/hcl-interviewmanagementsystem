<?php
include("database.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equive="X-UA-Compaitable" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="login1.css">
    </head>
    <body style="background-image: url(38636.jpg);background-attachment: fixed;background-repeat: no-repeat;background-size: 100% 100%;">
        
        <div class="form-box">
        <form action="login.php" method="post">
            <h1 style="color: rgba(0,0,0,0.8); font-family: Arial, Helvetica, sans-serif;text-align: center;padding-top: 10px;"><i><b>HCL</b></i></h1>
            <div class="input-box">
                <i class="fa fa-user"></i>
            <select id="type" name="type" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.5);">
                <option style="background-color: rgba(0,0,0,0.5);">Admin</option>
                <option style="background-color: rgba(0,0,0,0.5)">Interviewer</option>
                <option style="background-color: rgba(0,0,0,0.5)">Jobseeker</option>
                
            </select>
            </div>
            
            <div class="input-box">
                <i class="fa fa-envelope"></i>
                <input type="text" id="emailid" name="uname" placeholder="Email ID" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.8);">
            </div>
            
            <div class="input-box">
                <i class="fa fa-key"></i>
            <input type="password" id="pass" name="password" placeholder="Password" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.8);">
            </div>
            
            <div  style="text-align: center;padding-bottom: 5px;">
                <input  type="submit" value="LOGIN" class="login-btn" name="submit">
                <a href="newacc.php" style="color:rgba(0,0,0,0.5);">
                <h4 style="text-align: center;"><ins>create new account</ins></h4>
                </a>
            </div>
        </form>
<?php
    if(isset($_POST['submit'])){
        $type=$_POST['type'];
        $uname=$_POST['uname'];
        $password=$_POST['password'];

        if(empty('$uname')){
            echo "please enter a valid username";
        }
        else if(empty('$password')){
            echo "please enter a valid password";
        }
        else{
            $sql="SELECT * FROM credentials WHERE type='$type' and emailid='$uname'and password='$password'";
            $result=mysqli_query($conn,$sql);
            $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            if($count==1 && $type=="Admin"){
                header("Location:admin.html");
            }
            elseif($count==1 && $type=="Interviewer"){
                header("Location:Interviewer.html");
                $_SESSION['uname']=$row['emailid'];
            }
            elseif($count==1 && $type=="Jobseeker"){
                header("Location:jobseeker.php");
                $_SESSION['uname']=$row['emailid'];
            }
            else{
                echo "enter the correct credentials!!!";
            }

        }
    }
mysqli_close($conn);
?>
    </body>
</html>