<?php
session_start();
require "../class/backend.php";

 $table=backend::get_All_days();


 foreach ($table as &$value) {
    echo '<option  value="'.$value.'" >'.$value.'</option>';
}
unset($value);

?>