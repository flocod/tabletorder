<?php
session_start();
require "../class/backend.php";


 $table=backend::get_admin();

 for($i=0;$i<count($table);$i++){

  

    echo'
        <option  value="'.$table[$i]["nom"].'" tel="'.$table[$i]["tel"].'"  item="'.$table[$i]["id"].'" >'.$table[$i]["nom"].'</option>
    ';


}








?>