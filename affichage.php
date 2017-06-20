<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link href="./bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet">
  <link href="./bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="./bootstrap-3.3.7-dist/fonts" rel="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100|Roboto:100" rel="stylesheet">
  <script src="jquery-3.2.1.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="style.css" />
  <title>Journal</title>
</head>
<body>
  <!-- <header>
    <nav>
    <ul>
      <li><a href="index.php">Ajouter un article</a></li>
      <li><a href="suppr_article.php">supprimer des articles</a></li>
    </ul>
  </nav> -->

  <!-- </header> -->

  <?php
  echo "<table style='border: solid 1px black;'>";
  echo "<tr><th>Id</th><th>User</th><th>Password</th></tr>";

  class TableRows extends RecursiveIteratorIterator {
      function __construct($it) {
          parent::__construct($it, self::LEAVES_ONLY);
      }

      function current() {
          return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
      }

      function beginChildren() {
          echo "<tr>";
      }

      function endChildren() {
          echo "</tr>" . "\n";
      }
  }
  $servername = "localhost";
  $username = "root";
  $password = "Adoc7";
  $dbname = "authentif";
  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT id, user, pass FROM authentif_user");
      $stmt->execute();

      // set the resulting array to associative
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
      foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
          echo $v;
      }
  }
  catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
  }
  $conn = null;
  echo "</table>";
  ?>
</body>
</html>
