<?php
include("database.php");
error_reporting(0);
$sql="SELECT * FROM questions;";
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show interview</title>
    <link rel="stylesheet" href="ques.css">
</head>
<body>
<nav>
            <ul class="menu">
                <li class="item button"><a href="login.php">LogOut</a></li>
            </ul>
        </nav>
<div class="form-box">
    <table style="text-align:center;">
        <tr class="table1" style="color:blue;">
            <td>S.no</td>
            <td>Questions</td>
        </tr>
            <?php
            while($row=mysqli_fetch_assoc($result)){
                ?>
                <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['ques']; ?></td>
            </tr>
            <?php
            }
            ?>
            <a href="newques.php" style="text-decoration:none";>
            <input type="submit" value="ADD QUESTION" class="login-btn" name="submit">
            </a>
    </table>
</div>
<?php
mysqli_close($conn);
?>
</body>
</html>