<?php

 require_once ('admi/connect.php');

$sql =  'SELECT p.*,  c.name as category_name, b.name as brand_name from product p, 
category c,brand b  where  p.brand_id = b.id ; ';

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
    </nav

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
   
    
</tr>";
echo "</thead>";

echo "<tbody>";
while ($row = mysqli_fetch_assoc ($result)) {
    //echo "<form  method=post>";
    echo "<tr>";
    
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["category_name"]."</td>";
    echo "<td>".$row["brand_name"]."</td>";
    
    echo "<td>".$row["price"]."€</td>";
    
    echo "<td><input type='button' value='Indisponible' </td>";
    echo "<td><input type='button' name='delete' value='Biento épuisé'</td>";
    echo "</tr>";
    //echo "</form>";
}
echo "<tbody>";
echo "</table>";
?>
