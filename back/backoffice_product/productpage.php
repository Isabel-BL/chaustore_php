<?php

  require_once ('/home/isabel/php/v2/admi/connect.php');
  
    $sql_categorie =  'SELECT * FROM category;';
    $sql_brand =  'SELECT * FROM brand;';
    $sql_color = 'SELECT * FROM color;';
    $result_categorie = mysqli_query ($conn,  $sql_categorie);
    $result_brand = mysqli_query ($conn,  $sql_brand);
    $result_color = mysqli_query($conn, $sql_color);

if(isset($_GET['id']) && $_GET['id']>0){
  

    $sql =  'SELECT p.*, c.id as category_id, c.name as category_name, b.name as brand_name , k.name as color_name from 
    product p, category c, brand b, color k where p.id='.$_GET['id'].' and p.category_id = c.id and p.brand_id = b.id 
    and p.color_id = k.id;';

    $result = mysqli_query ($conn,  $sql);
    $product = mysqli_fetch_assoc ($result);

    if(empty($product)){
        echo "<h4>Produit non trouvé</h4>";
    }
    else{
?>
    <h4><?php echo $product["name"];?> </h4>
    <form action="update.php" method="post">

        <input type="hidden" name="id" value="<?php echo $product["id"];?>">

        <label for=""> Nom </label>
        <input type="text" id="name" name="name" value="<?php echo $product["name"];?>">
        </p>

        <p>
        <label for=""> Categorie </label>

        <?php
        echo "<select name='category'>";
        while($row_categorie = mysqli_fetch_assoc($result_categorie)) {
            $selected_categorie="";
            if($product['category_id']==$row_categorie['id']){
                $selected_categorie="selected='selected'";
            }

            echo '<option value="'.$row_categorie['id'].'" '.$selected_categorie.'>'.$row_categorie['name'].'</option>';
        }
        echo '</select>';
        ?>
        </p>

        <p>
        <label for=""> Marque </label>
        <?php
        echo "<select name='brand'>";
        while($row_brand = mysqli_fetch_assoc($result_brand)) {
            $selected_brand="";
            if($product['brand_id']==$row_brand['id']){
                $selected_brand="selected";
            }

            echo '<option value="'.$row_brand['id'].'"  '.$selected_brand.'>'.$row_brand['name'].'</option>';
        }
        echo '</select>';
        ?>

        </p>

        <p>
        <label for=""> Color </label>
        <input type="text" id="color" name="color" value="<?php echo $product["color_name"];?>">
        </p>
        
        <p>
        <label for=""> Prix </label>
        <input type="text" id="prix" name="prix" value="<?php echo $product["price"];?>">
        </p>
        
        <input type="button" value="Annuler" onclick="location.href='index.php'">
        <input type="submit" value="Enregistrer" name="update">

        
    </form>


<?php
    }
}
elseif($_GET['id']==0){
   
?>

    <h4>Nouveau produit</h4>
    <form action="add.php" method="post">

        <p>
        <label for=""> Nom </label>
        <input type="text" id="name" name="name" value="">
        </p>
        <p>
    <label for=""> Category </label>

         <?php
        echo "<select name='category'>";
        while($row_categorie = mysqli_fetch_assoc($result_categorie)) {
          

            echo '<option value="'.$row_categorie['id'].'" >'.$row_categorie['name'].'</option>';
        }
        echo '</select>';
        ?>
        </p>

        <p>
        <label for=""> Marque </label>

        <?php
        echo "<select name='brand'>";
        while($row_brand = mysqli_fetch_assoc($result_brand)) {


            echo '<option value="'.$row_brand['id'].'" >'.$row_brand['name'].'</option>';
        }
        echo '</select>';

        ?>
    </p>
        <p>
        <label for=""> Color </label>
         <?php
        echo "<select name='color'>";
        while($row_color = mysqli_fetch_assoc($result_color)) {


            echo '<option value="'.$row_color['id'].'" >'.$row_color['name'].'</option>';
        }
        echo '</select>';

        ?>
    </p>

        <p>
        <label for=""> Prix </label>
        <input type="text"  name="prix" value="">
        </p>

        <p>
        <label for=""> Gender </label>
        <select name="gender"> 
            <option value="F"> femme </option>
            <option value="H"> homme </option>

        </select>
        </p>
        <input type="button" value="Annuler" onclick="location.href='index.php'">
        <input type="submit" value="Enregistrer" name="create">
    </form>
<?php
}
else{
    echo "<h4>Erreur : ID vide </h4>";
}


?>