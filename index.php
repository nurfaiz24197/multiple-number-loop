<!DOCTYPE html>
<html>
  <head>
    <title>Multiplication Table</title>
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
