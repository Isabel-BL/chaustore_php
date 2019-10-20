<?php
 require_once ('/home/isabel/php/v2/admi/connect.php');
 
if (isset($_POST['create'])){
	

	$name = $_POST['name'];
	$category_id = $_POST['category'];
	$marque_id = $_POST['brand'];
	$color_id = $_POST['color'];
	//$color = mysql_real_escape_string($_post['color']);
	$prix = $_POST['prix'];
	$gender = $_POST['gender'];
    $sql =  'INSERT INTO 
		product  (name,category_id,brand_id,color_id,price,gender)
		VALUES ("'.$name.'",'.$category_id.','.$marque_id.', '.$color_id.','.$prix.' , "'.$gender.'");';
    

  	mysqli_query ($conn,  $sql);
}

echo $sql;
?>