<h1>insertion des données</h1>

<?php
include("connect.php");


$id = $_POST['id'];
$user = $_POST['user'];
$pass = sha1($_POST['pass']);


/////////////////////////////////////////////////////////////////////////

$req = $pdo->prepare("INSERT INTO authentif_user (id, user, pass)
VALUES (:id, :user, :pass)");


$req->execute(array(
    'id' => $id,
    'user' => $user,
    'pass' => $pass
));
header('Location: affichage.php?id='. $id .'');
?>
