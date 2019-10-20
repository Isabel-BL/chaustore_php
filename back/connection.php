<?php
  session_start();

$user ="isabel";
$pw ="coderlover";

if(isset($_POST['submit'])){
  $pseudo = $_POST['pseudo'];
  $pass = $_POST['pass'];

  if(!empty($_POST['pseudo'])&&!empty($_POST['pass'])){
    if($pseudo==$user&&$pass==$pw){
      $_SESSION['pseudo'] = $pseudo;
      header('Location: indexglobal.php');
    }else{
      echo 'Error';
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title> Espace Admi</title>
  <meta charset="utf-8">
  <link href="css_connexion/style.css" rel="stylesheet">
</head>
<body>
  <h1> Chaussure Store</h1>
  <div class="style">
   <form method="POST" action="connection.php">
    <p>
    <label> Username
    <input type="text" name="pseudo" placeholder="username">
    </label>
  </p>
  <p>
    <label> Password
    <input type="password" name="pass" placeholder="password">
    </label>
   </p>
    
    <input type="submit" name="submit" value="connexion">
  </form>
</div>
</body>
</html>