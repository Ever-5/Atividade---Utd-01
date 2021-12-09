<?php
    $cont = 0;
    for($i=1;$i<=10;$i++){
        $cont = $cont + $_POST[$i.'n'];
    }
    $media = $cont/10;
    echo "A média dos números é ".$media;
?>