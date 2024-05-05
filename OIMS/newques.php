<?php
include("database.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Question</title>
    <link rel="stylesheet" href="newques.css">
</head>
<body>
<nav>
            <ul class="menu">
                <li class="item button"><a href="login.php">LogOut</a></li>
            </ul>
        </nav>
<div class="form-box">
    <form action="newques.php" method="post">
    <textarea name="ques" cols="35" rows="15" class="input-box" style="padding-left:20%" placeholder="      Enter The Question"></textarea>
    <input type="submit" value="ADD" class="login-btn" name="submit">
    </form>
</div>
<?php
try{
$ques=$_POST['ques'];
if(isset($_POST['submit'])){
    if(empty($ques)){
        echo "please enter a question";
    }
    else{
        $sql="INSERT INTO questions (ques) VALUES ('$ques');";
        mysqli_query($conn,$sql);
    }
}
}
catch(mysqli_sql_exception){

}
mysqli_close($conn);
?>

</body>
</html>