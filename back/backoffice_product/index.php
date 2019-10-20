<?php

 require_once ('/home/isabel/php/v2/admi/connect.php');

$sql =  'SELECT p.*, c.id as category_id, c.name as category_name, b.name as brand_name, k.name as color_name from product p, 
category c,brand b ,  color k where p.category_id = c.id and p.brand_id = b.id and p.color_id = k.id; ';

$result = mysqli_query ($conn,  $sql);

echo "<h3>Liste des produits</h3>";

echo "<table border=1>";
echo "<thead>";
echo "<tr>
    <td>ID</td>
    <td>Produit</td>
    <td>Catégorie</td>
    <td>Marque</td>
    <td>Color</td>
    <td>Prix</td>
    <td>Gender</td>
    <td colspan=2><input type='button' value='Ajouter un produit' onclick=\"location.href='productpage.php?id=0'\"></td>
</tr>";
echo "</thead>";

echo "<tbody>";
while ($row = mysqli_fetch_assoc ($result)) {
    //echo "<form  method=post>";
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["category_name"]."</td>";
    echo "<td>".$row["brand_name"]."</td>";
    echo"<td>".$row["color_name"]."</td>";
    echo "<td>".$row["price"]."€</td>";
    echo"<td>".$row["gender"]."</td>";
    echo "<td><input type='button' value='Modifier' onclick=\"location.href='productpage.php?id=".$row["id"]."';\"></td>";
    echo "<td><input type='button' name='delete' value='Supprimer' onclick=\"location.href='delete.php?id=".$row["id"]."';\"></td>";
    echo "</tr>";
    //echo "</form>";
}
echo "<tbody>";
echo "</table>";
?>
