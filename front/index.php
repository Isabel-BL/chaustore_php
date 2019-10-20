<?php

 require_once ('/home/isabel/php/v2/admi/connect.php');

$sql =  'SELECT product.name as name_product ,  brand.name as marque , category.name as categorie, price as prix, image as image from product inner join brand on product.brand_id = brand.id inner join category  on product.category_id = category.id;';


$result = mysqli_query ($conn,  $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="css/main.css" rel="stylesheet">
    <title> </title>
</head>
<body>
    
    <nav id="nav"> 
        <ul>
            <li> <a > LIVRASON ET RETOURS GRATUITS EN BOUTIQUES! </a> </li>
            
            <li > <a href="#" class="espace"> BOUTIQUES</a></li>
            <li > <a href="login.php" class="espace" > COMPTE</a></li>
            <li > <a href="#" class="espace"> FAVORIS</a></li>
            
        </ul>
    </nav>

</body>
</html>

<?php


echo "<h1> ISABELLE CHAUSTORE</h1>";

echo "<table border=1 ";
echo "<thead>";
echo "<tr>
    
    <td>Produit</td>
    <td>Catégorie</td>
    <td>Marque</td>
    
    <td>Prix</td>
    <td> Image</td>
   
    
</tr>";
echo "</thead>";

echo "<tbody>";
while ($row = mysqli_fetch_assoc ($result)) {
    //echo "<form  method=post>";
    echo "<tr>";
    
    echo "<td>".$row["name_product"]."</td>";
    echo "<td>".$row["marque"]."</td>";
    echo "<td>".$row["categorie"]."</td>";
    
    echo "<td>".$row["prix"]."€</td>";
    echo "<td>".$row["image"]."</td>";
    
 $name= $row['name_product']; 
   $_sql = "SELECT sum(stock) AS somme FROM stock 
        INNER JOIN product ON product.id = stock.product_id
        INNER JOIN size ON size.id = stock.size_id
        WHERE product.name = '$name'";

    $_select = mysqli_query($conn, $_sql);
    $_s = mysqli_fetch_assoc($_select);    
   
if($_s['somme'] <= 0){
     ?> 
     <td> Indisponible </td>
     <?php    
    }    
    else if($_s['somme'] <=10){
    ?>
    <td> Bientot épuisé </td>
    <?php 
    }
    else {
    ?>
    <td> Disponible </td>
     </tr>
    <?php    
    }
           

}
?>

