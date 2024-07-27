<?php
if (isset($_POST['save']))
{
    include 'conn.php';
    $n = $_POST['name'];
    $e = $_POST['email'];
    $num = $_POST['number'];
    $age = $_POST['age'];
$sql = "INSERT INTO `students`(`std_name`, `std_age`, `phone`, `email`) VALUES ('$n','$age','$num','$e')";
    $result = mysqli_query($conn,$sql);

    if($result){
echo "<script>
    alert('inserted');
</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <form method="post">
            Name: <input type="text" name="name">
            Email: <input type="email" name="email">
            Number: <input type="text" name="number">
            Age: <input type="number" name="age">
            <input type="submit" value="Submit" name="save">
        </form>
    </body>
</html>