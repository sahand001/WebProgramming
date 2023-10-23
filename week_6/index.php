<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>
</body>
</html>





<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

<?php
// remove all session variables
session_unset();
// destroy the session
session_destroy();
?>

<?php


include  "db.php";

?>
<br>
<?php
$sql = "insert into student (name, email, gender, dete_of_birth) values ('sahand','sahand.ary@gmail.com','male','2000-04-09')";
if(mysqli_query($conn,$sql)){
    echo "new record created seccessfully";

}
else{
    echo mysqli_error($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    


</body>
</html>