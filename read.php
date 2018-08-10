<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1>Liste des randonnées</h1>
    <table>
      <!-- Afficher la liste des randonnées -->
      <tr>
      <th>Name</th>
      <th>Difficulty</th>
      <th>distance</th>
      <th>duration</th>
      <th>Height difference</th>
      </tr>
      <?php
      $servername = "den1.mysql3.gear.host";
      $username = "randogyozmo";
      $password = "Gh0Q~8_G6GYo";

      try {
        $conn = new PDO("mysql:host=den1.mysql3.gear.host;dbname=randogyozmo","randogyozmo","Gh0Q~8_G6GYo");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $sql = "CREATE DATABASE myDBPDO";
        // $conn -> exec();
        // echo "DB created";
      } catch(PDOException $e){
        echo "probleme : <br>".$e->getMessage();
      }

      $sql = "SELECT * FROM randogyozmo.hiking";
      
      foreach ($conn->query($sql) as $value) {
        echo "<tr><th>".$value['name']."</th>"."<th>".$value["difficulty"]."</th>"."<th>".$value["distance"]."</th>"."<th>".$value["duration"]."</th>"."<th>".$value["height_difference"]."</th>"."</tr>";
      }
      ?>
      
    </table>


      
  </body>
</html>
