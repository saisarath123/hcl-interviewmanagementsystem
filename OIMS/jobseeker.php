<?php
include("database.php");
error_reporting(0);
session_start();
$uname=$_SESSION['uname'];
$sql="SELECT * FROM interviews WHERE candmail='$uname';";
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show interview</title>
    <link rel="stylesheet" href="jobseeker.css">
</head>
<body style="background-image: url(38636.jpg);background-attachment: fixed;background-repeat: no-repeat;background-size: 100% 100%;" >
<nav>
            <ul class="menu">
                <li class="item button"><a href="login.php">LogOut</a></li>
            </ul>
        </nav>
<div class="form-box">
    <table style="border: 1px solid;">
        <tr class="table1" style="color:blue; border: 1px solid;">
            <td style="border: 1px solid;">ID</td>
            <td style="border: 1px solid;">mode</td>
            <td style="border: 1px solid;">Interview link</td>
            <td style="border: 1px solid;">Interview date</td>
            <td style="border: 1px solid;">Interview time</td><br>
        </tr>
            <?php
            while($row=mysqli_fetch_assoc($result)){
                ?>
                <tr style="border: 1px solid;">
                <td style="border: 1px solid;"><?php echo $row['id']; ?></td>
                <td style="border: 1px solid;"><?php echo $row['mode']; ?></td>
                <td style="border: 1px solid;"><?php echo $row['link']; ?></td>
                <td style="border: 1px solid;"><?php echo $row['idate']; ?></td>
                <td style="border: 1px solid;"><?php echo $row['itime']; ?></td>
            </tr>
            <?php
            }
            ?>
    </table>
    <a href="taketest.php">
    <input type="submit" value="Take Test" class="login-btn" style=" margin: 40px auto 20px;width:80%;display:block;outline:none;padding: 10px 0;border:1px solid rgba(0,0,0,0.8);cursor: pointer;background: transparent;color: rgba(0,0,0,0.5);font-size: 16px;">
        </a>
</div>
    
</body>
</html>