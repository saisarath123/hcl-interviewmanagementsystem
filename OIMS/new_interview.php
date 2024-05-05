<?php
include("database.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equive="X-UA-Compaitable" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New Interview</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="new_interview.css">
    </head>
    <body>
        <nav>
            <ul class="menu">
                <li class="item"><a href="rem_interview.php">Remove</a></li>
                <li class="item"><a href="show_interviews.php">Show All</a></li>
                <li class="item"><a href="admin.html">Home</a></li>
                <li class="item button"><a href="login.php">LogOut</a></li>
            </ul>
        </nav>
            <div class="form-box">
            <form action="new_interview.php" method="post">
            <h4 style="color:blue;text-align: center; padding-top: 10px;">Jobseeker details</h4>
            <div class="input-box">
            <input type="text" name="jname" placeholder="Name" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.8);">
            </div>
            <div class="input-box">
            <input type="text" name="qualification" placeholder="Qualification" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.8);">
            </div>
            <div class="input-box">
            <input type="int" name="age" placeholder="Age" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.8);">
            </div>
            <div class="input-box">
            <input type="float" name="cgpa" placeholder="Degree CGPA" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.8);">
            </div>
            <div class="input-box">
            <input type="int" name="tenth" placeholder="10%" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.8);">
            </div>
            <div class="input-box">
            <input type="int" name="twelfth" placeholder="12%" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.8);">
            </div>
            <div class="input-box">
                <input type="text" name="position" placeholder="Position" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.8);">
            </div>
            <div class="input-box">
                <input type="text" name="contact" placeholder="contact" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.8);">
            </div>
            <h4 style="color:blue;text-align: center;">Interview details</h4>
            <div class="input-box">
            <input type="text" name="type" placeholder="mode" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.8);">
            </div>
            <div class="input-box">
                <input type="text" name="iname" placeholder="Interviewer Name" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.8);">
            </div>
            <div class="input-box">
                <input type="email" name="imail" placeholder="Interview mail" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.8);">
            </div>
            <div class="input-box">
                <input type="text" name="inum" placeholder="Interviewer number" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.8);">
            </div>
            <div class="input-box">
                <input type="url" name="link" placeholder="Interview Link" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.8);">
            </div>
            <div class="input-box">
                <input type="date" name="date" placeholder="Interview Link" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.8);">
            </div>
            <div class="input-box">
                <input type="time" name="time" placeholder="Interview Link" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.8);">
            </div>
            <div class="sbt-btn">
                <input type="submit" name="submit" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.8);">
            </div>
        </form>
<?php
$date=$_POST['date'];
$time=$_POST['time'];
$type=$_POST['type'];
$jname =$_POST['jname'];
$qualification =$_POST['qualification'];
$age =$_POST['age'];
$cgpa =$_POST['cgpa'];
$tenth =$_POST['tenth'];
$twelfth =$_POST['twelfth'];
$position =$_POST['position'];
$contact =$_POST['contact'];
$iname =$_POST['iname'];
$imail =$_POST['imail'];
$inum =$_POST['inum'];
$link =$_POST['link'];
try{
    if(isset($_POST['submit'])){

        if(empty($_POST['jname'])){
            echo "enter all the details";
        }

        else{
            $sql="INSERT INTO interviews (jname,qualification,age,cgpa,tenth,twelfth,position,contact,mode,iname,imail,inum,link,idate,itime) VALUES('$jname','$qualification','$age','$cgpa','$tenth','$twelfth','$position','$contact','$type','$iname','$imail','$inum','$link','$date','$time')";
            mysqli_query($conn,$sql);
            echo "Interview added Successfully!!!";
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
