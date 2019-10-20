<?php 

$conn = mysqli_connect('localhost', 'isabel', 'coderlover');

    mysqli_select_db($conn,'chaustore');
    mysqli_set_charset($conn,'utf8');
//Selec Query


	if (isset($_GET['id'])){
		$id = $_GET['id'];
		
		$query = 'DELETE FROM stock WHERE product_id='.$id;

		$sql= ('DELETE FROM product WHERE id='.$id);
		mysqli_query($conn, $sql);

		mysqli_query($conn, $query);

		echo 'Article supprime';
}


?>
