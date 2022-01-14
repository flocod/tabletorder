<?php
session_start();
require "../class/backend.php";


 $table=backend::get_medoc();
 $counter_var=count($table) + 1;

 for($i=0;$i<count($table);$i++){

    $counter_var=$counter_var-1;

    echo'<tr>
     <td>'.$counter_var.'</td>
        <td>'.$table[$i]["nom_produit"].'</td>
    
    <td>'.$table[$i]["categorie_produit"].'</td>
    <td>'.$table[$i]["prix_produit"].'</td>
    <td>'.$table[$i]["qte_produit"].'</td>
    <td>'.$table[$i]["date_upload"].'</td>

    <td class="delete_product_btn"  item="'.$table[$i]["id"].'" style="color:#FBB808; cursor:pointer;">Supprimer</td>
    <td class="modify_product_btn"  item="'.$table[$i]["id"].'"  style="color:#FBB808;cursor:pointer;"> Modifier</td>
    </tr>
    ';


}








?>