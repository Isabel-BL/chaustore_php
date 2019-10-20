
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta>
	<title> CHAUSTORE </title>
</head>
<body>

	<h1> Bienvenu Chaustore</h1>
    <h2> CONNEXION</h2>

	<!--formulaire session membre-->
	<form method="POST" action="star.php">
    <p>
    <label> Adresse e-mail
    <input type="text" name="email">
    </label>
  </p>
  <p>
    <label> Mot de passe
    <input type="password" name="password">
    </label>
   </p>
    
    <input type="submit" name="connecter" value="se connecter">

    <input type="submit" name="recuperation" value="Mot de passe oublié">
  </form>

	<!--formulare inscription-->

	<h2> Inscription</h2> 
	<h4> C'est rapide et facile</h4>
	<form method="POST" action="register.php">
        <p>
            <label for="firstname">Prénom</label>
            <input type="text" required="" name="firstname" value=""/>
            
        </p>

        <p>
            <label for="name"> Nom</label>
            <input type="text"  required="" name="name" value=""/>
            
        </p>

        <p>
            <label for="email">E-mail</label>
            <input type="text" required="" name="email" value=""/>
            
        </p>

        <p>
            <label for="pass"> Mot de passe </label>
            <input type="password" required="" name="password" placeholder='8 caractères minimum' value="" /> 
            
        </p> 
          
        </p>    
        <input type="submit"  value="Inscription" name="create" />
           </form>
           
</body>
</html>