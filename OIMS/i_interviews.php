<?php
include("database.php");
error_reporting(0);
session_start();
$uname=$_SESSION['uname'];
$sql="SELECT * FROM interviews WHERE imail='$uname';";
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show interview</title>
    <link rel="stylesheet" href="i_interviews.css">
</head>
<body style="background-image: url(38636.jpg);background-attachment: fixed;background-repeat: no-repeat;background-size: 100% 100%;"  >
<nav>
            <ul class="menu">
                <li class="item button"><a href="login.php">LogOut</a></li>
            </ul>
        </nav>
<div class="form-box">
    <table>
        <tr class="table1" style="color:blue;">
            <td>ID</td>
            <td>Jobseeker name</td>
            <td>Qualification</td>
            <td>Age</td>
            <td>CGPA</td>
            <td>10%</td>
            <td>12%</td>
            <td>position</td>
            <td>contact</td>
            <td>mode</td>
            <td>Interview link</td>
            <td>Interview date</td>
            <td>Interview time</td><br>
        </tr>
            <?php
            while($row=mysqli_fetch_assoc($result)){
                ?>
                <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['jname']; ?></td>
                <td><?php echo $row['qualification']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['cgpa']; ?></td>
                <td><?php echo $row['tenth']; ?></td>
                <td><?php echo $row['twelfth']; ?></td>
                <td><?php echo $row['position']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['mode']; ?></td>
                <td><?php echo $row['link']; ?></td>
                <td><?php echo $row['idate']; ?></td>
                <td><?php echo $row['itime']; ?></td>
            </tr>
            <?php
            }
            ?>
    </table>
</div>
    
</body>
</html>