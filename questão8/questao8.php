<?php
    $i = 1;
    foreach($_POST as $idade){
        if($idade >= 18){
            echo 'A pessoa de número '.$i.' é maior de idade<br>';
        }else{
            echo 'A pessoa de número '.$i.' é menor de idade<br>';
        }
        $i++;
    }
?>
