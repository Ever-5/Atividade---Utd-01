<?php
    if($_POST["1n"] > $_POST["2n"]){
        $maior = $_POST["1n"];
    }else{
        $maior = $_POST["2n"];
    }

    if($maior < $_POST["3n"]){
        $maior = $_POST["3n"];
    }

    if($maior < $_POST["4n"]){
        $maior = $_POST["4n"];
    }

    if($maior < $_POST["5n"]){
        $maior = $_POST["5n"];
    }

    echo "O maior é ".$maior;
?>
