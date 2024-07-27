<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h3>Welcome <?= $_POST['name']?></h3>
        <p>Your email is <?= $_POST['email']?></p>
        <p>Your age is <?= $_POST['age']?></p>

        <?php
     //   if ($_POST['age'] < 18){
     //       echo "<p>You are a child</p>";
     //   }
     //   else if($_POST['age'] < 30){
     //       echo "<p>You are young</p>";
     //   }
     //   else{
     //       echo "<p>You are old</p>";
     //   }
        ?>
    </body>
</html>