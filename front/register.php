<?php 
require_once('/home/isabel/php/v2/admi/connect.php');
require_once('/home/isabel/php/v2/front/login.php');
$msg="";
  

	if(isset($_POST['create']))
	{
		if(!empty($_POST['firstname']) || !empty($_POST['name'])|| !empty($_POST['email']) || !empty($_POST['password']))
		{
			$firstname = htmlspecialchars($_POST['firstname']);
			$name = htmlspecialchars($_POST['name']);
			$email = htmlspecialchars($_POST['email']);
			$password = sha1($_POST['password']);

		
			if(filter_var($email, FILTER_VALIDATE_EMAIL))
			
			else
			{
				$msg="Votre adresse mail n'est pas valide";
			}


		} 
		else 
		{
			$msg="Veuillez saisir les champs";
		}


		$req = "INSERT INTO user (   
                firstname, 
                lastname, 
                email,
                password)
                VALUES (
               '".$_POST['firstname']."', 
              '".$_POST['name']."', 
                '".$_POST['email']."',
        	'".sha1($_POST['password'])."'
         )";
        
      	$res = $conn->query($req);

        if(isset($res)){

            $msg = "Merci ".$_POST['firstname'].", votre inscription a bien été prise en compte";
            
        }
        else {
            $msg = "Une erreur est survenue veuillez réessayer plus tard";
            
        }

        mail("isabel___92@hotmail.com" , " Welcome to chaustore", " votre compte a été ajouté avec success");


	}	

?>
