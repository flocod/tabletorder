<?php
session_start();
require "../class/backend.php";



 $table=backend::get_NBR_medoc(10);
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

  
    </tr>
    ';


}


$_SESSION['NBR_PRODUITS']=count($table);





?>