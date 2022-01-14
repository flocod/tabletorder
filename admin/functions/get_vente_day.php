<?php
session_start();
require "../class/backend.php";

$day=backend::get_lastday();

 $table=backend::get_vente_day($day);
 $counter_var=count($table) + 1;

 for($i=0;$i<count($table);$i++){

    $counter_var=$counter_var-1;

    echo'<tr>
    <td>'.$table[$i]["id"].'</td>
    <td>'.$table[$i]["nom"].'</td>
    <td><a href="tel:'.$table[$i]["tel"].'" >'.$table[$i]["tel"].'</a></td>
   <td>'.$table[$i]["categorie"].'</td>
   <td>'.$table[$i]["type"].'</td>
   <td>'.$table[$i]["medicament"].'</td>
   <td>'.$table[$i]["quantite"].'</td>
   <td>'.$table[$i]["prix"].'</td>

   <td> <a style="color:green" href="ordonance/'.$table[$i]["ordonance"].'" target="_blank"> VOIR </a>    </td>
   <td>'.$table[$i]["ville"].'</td>
   <td>'.$table[$i]["quartier"].'</td>
   <td style="color:green; cursor:pointer;" >'.$table[$i]["statut"].'</td>
   <td>'.$table[$i]["date"].'</td>

   </tr>
   ';




}






?>