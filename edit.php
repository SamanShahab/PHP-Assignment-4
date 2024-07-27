<?php
include 'conn.php';
$id = $_GET['id']; //4
$sql = "SELECT * FROM `students` WHERE std_id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $num = $_POST['number'];
    $age = $_POST['age'];
    $sqlUpdate = "UPDATE `students` SET `std_name`='$name',`std_age`='$age',`phone`='$num',`email`='$email' WHERE std_id = $id";

    $resultUpdate = mysqli_query($conn, $sqlUpdate);
    if ($resultUpdate) {
        header('Location: read.php');
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
        Name: <input type="text" name="name" value="<?php echo $row[1] ?>">
        Email: <input type="email" name="email" value="<?php echo $row[4] ?>">
        Number: <input type="text" name="number" value="<?php echo $row[3] ?>">
        Age: <input type="number" name="age" value="<?php echo $row[2] ?>">
        <input type="submit" value="Update" name="save">
    </form>
</body>

</html>