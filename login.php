<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta>
	<title> CHAUSTORE </title>
</head>
<body>

	<h1> Bienvenu Chaustore</h1>
	<!--formulaire session membre-->
	<form method="POST" action="">
    <p>
    <label> Adresse e-mail ou Username
    <input type="text" name="pseudo" placeholder="username">
    </label>
  </p>
  <p>
    <label> Mot de passe
    <input type="password" name="pass" placeholder="password">
    </label>
   </p>
    
    <input type="submit" name="submit" value="connexion">
  </form>

	<!--formulare inscription-->

	<h2> Inscription</h2>
	<h4> C'est rapide et facile</h4>
	<form method="post" action="form.php">
        <p>
            <label for="firstname">Votre prénom</label>
            <input type="text" id="firstname" name="firstname" value="<?php if(!empty($_POST['firstname'])) echo $_POST['firstname'];?>"/>
        </p>
        <p>
            <label for="name">Votre nom</label>
            <input type="text" id="name" name="name" value="<?php if(!empty($_POST['name'])) echo $_POST['name'];?>"/>
        </p>
        <p>
            <label for="email">Votre email</label>
            <input type="text" id="email" name="email" value="<?php if(!empty($_POST['email'])) echo $_POST['email'];?>"/>
        </p>

        <p>
            <label for="pass"> Mot passe </label>
            <input type="password" id= "pass" name="pass" value="" /> 
        </p> 
          
        </p>    
        <input type="submit" value="Inscription"/>
           </form>

</body>
</html>