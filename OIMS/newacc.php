<?php
include("database.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new account</title>
    <link rel="stylesheet" href="newacc1.css">
</head>
<body style=" background-image: url(38636.jpg);background-attachment: fixed;background-repeat: no-repeat;background-size: 100% 100%;">
    <div class="form-box">
        <form action="newacc.php" method="post">
        <h1  style="color: rgba(0,0,0,0.8); font-family: Arial, Helvetica, sans-serif;text-align: center;padding-top: 10px;"><i><b>HCL</b></i></h1>
        <div class="input-box">
            <input type="radio" name="type" value="Admin">Admin
            <input type="radio" name="type" value="Interviewer">Interviewer
            <input type="radio" name="type" value="Jobseeker">Jobseeker
        </div>
        
        <div class="input-box">
            <input type="email" id="emailid" name="uname" placeholder="Email ID" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.8);">
        </div>
        
        <div class="input-box">
        <input type="password" id="p1" placeholder="Password" name="password" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.8);">
        </div>
        <div class="input-box">
            <input type="password" id="p2"  placeholder="Confirm Password" name="conf" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.8);">
            </div>

        <div style="text-align: center;padding-bottom: 5px;">
            <input type="submit" name="submit" class="submit-btn" id="b1">
        </div>
        </form>
<div class="p1">
<?php
try{
    if(isset($_POST['submit'])){
        $type=$_POST['type'];
        $uname=$_POST['uname'];
        $password=$_POST['password'];
        if(empty($_POST['type']))
        {
            echo "please select the type";
        }
        else if(empty($_POST['uname'])){
            echo "enter a valid Email-ID";
        }
        else if(empty($_POST['password'])){
            echo "enter valid passwords";
        }
        else if(empty($_POST['conf'])){
            echo "confirm password!!!";
        }
        else if($_POST['password'] != $_POST['conf']){
            echo "Passwords does not match!!!";
        }
        else{
        $sql="INSERT INTO credentials (type,emailid,password) VALUES ('$type','$uname','$password')";
        mysqli_query($conn,$sql);
        echo "registered successfully";

        }
    }
}
catch(mysqli_sql_exception){
    
}
    mysqli_close($conn);
?>
</div>
</body>
</html>