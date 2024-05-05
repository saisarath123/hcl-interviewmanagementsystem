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
        <title>Remove Interview</title>
        <link rel="stylesheet" href="rem_interview.css">
    </head>
    <body>
        
        <nav>
            <ul class="menu">
                <li class="item"><a href="new_interview.php">Add</a></li>
                <li class="item"><a href="show_interviews.php">Show All</a></li>
                <li class="item"><a href="admin.html">Home</a></li>
                <li class="item button"><a href="login.php">LogOut</a></li>
            </ul>
        </nav>
        <div class="form-box">
            <form action="rem_interview.php" method="post">
            <h4 style="color:blue;text-align: center;">Remove Interview</h4>
        <div class="input-box">
            <input class="text" name="jname" placeholder="Name of Jobseeker" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.8);">
        </div>
        <div class="input-box">
            <input class="text" name="contact" placeholder="Mailid of Jobseeker" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.8);">
        </div>
        <div class="sbt-btn">
            <input type="submit" name="submit" style="width:90%;border: none;outline: none;background: transparent;color:rgba(0,0,0,0.8);">
        </div>
        <label id="l1"></label>
            </form>
<?php
$jname=$_POST['jname'];
$contact=$_POST['contact'];
try{
if(isset($_POST['submit'])){
    if(empty($jname)){
        echo "please enter the name";
    }
    else if(empty($contact)){
        echo "please enter the contact number";
    }
    else{
        $sql="DELETE FROM interviews WHERE contact='$contact'";
        mysqli_query($conn,$sql);
        echo "interview removed succesfully!!!";
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