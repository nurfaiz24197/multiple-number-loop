<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <form method="post">
        Enter a number: <input type="number" name="num"><br>
        <input type="submit" name="submit" value="Generate Table">
    </form>
    <?php
        if(isset($_POST['submit'])){
          $num = $_POST['num'];
          echo "<h2>Multiplication Table for ".$num."</h2>";
          echo "<table border='1'>";
          for($i=1;$i<=12;$i++){
            echo "<tr><td>".$i." x ".$num."</td><td>".$i*$num."</td></tr>";
          }
          echo "</table>";
        }
      ?>
</body>

</html>