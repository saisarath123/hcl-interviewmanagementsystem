<?php
include("database.php");
error_reporting(0);
session_start();
$uname=$_SESSION['uname'];
$sql="SELECT * FROM questions;";
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show interview</title>
    <link rel="stylesheet" href="taketest.css">
</head>
<body>
<div class="form-box">
    <form action="taketest.php" method="post">
    <table>
        <tr class="table1" style="color:blue;">
            <td>ID</td>
            <td>questions</td>
        </tr>
            <?php
            while($row=mysqli_fetch_assoc($result)){
                ?>
                <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['ques']; ?></td>
                <td> <input type="text" name="answer" placeholder="enter your answer"><td>
            </tr>
            <?php
            }
            ?>
    </table>
    <input type="submit" value="submit" class="login-btn">
    </form>
    <?php
    
    if(isset($_POST['submit'])){
        $answers=$_POST['answer']; 
        
        $sql="INSERT INTO answers (jname,ans) VALUES ('$uname','$answers');";
        mysqli_query($conn,$sql);
        }
        echo $answers;
    ?>

</div>
    
</body>
</html>