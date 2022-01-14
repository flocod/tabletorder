<?php
session_start();
require "../class/backend.php";


 $table=backend::get_admin();
 $counter_var=count($table) + 1;

 for($i=0;$i<count($table);$i++){

    $counter_var=$counter_var-1;

    echo'<tr>
     <td>'.$counter_var.'</td>
        <td>'.$table[$i]["nom"].'</td>
    
    <td>'.$table[$i]["tel"].'</td>

    <td class="delete_admin_btn"  item="'.$table[$i]["id"].'" style="color:#FBB808; cursor:pointer;">Supprimer</td>

    </tr>
    ';


}








?>