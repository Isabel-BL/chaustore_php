
<?php
 require_once ('/home/isabel/php/v2/admi/connect.php');

if (isset($_POST['update'])){
	
	$id = $_POST['id'];

	$name = $_POST['name'];
	$category_id = $_POST['category'];
	$marque_id = $_POST['brand'];
	//$color = mysql_real_escape_string($_post['color']);
	$prix = $_POST['prix'];
    $sql =  'UPDATE
		product  
	SET
		name = "'.$name.'",
		category_id = '.$category_id.',
		brand_id = '.$marque_id.',
		price = '.$prix.' where id='.$id 

	;


  	mysqli_query ($conn,  $sql);


    //header('Location: http://localhost/chaustore/backoffice/?maj=1');
  	//exit();
}

?>