<html>
    <head>
        <title>Questão 6</title>
    </head>
    <body>
        <form name="form1" action="index.php" method="post">
            <label> Informe a data</label>
            <input type="date" name="data">
            <button type="submit">click</button>            
        </form>
        <?php
            if (isset($_POST["data"])){
                echo $_POST["data"].' - ';
                $dt = explode("-",$_POST["data"]);
                $cont = 0;
                foreach ($dt as $i){
                    switch ($cont){
                        case 0:
                            echo 'ano -> '.$i.' ';
                            break;
                        case 1:
                            echo 'mês -> '.$i.' ';
                            break;
                        case 2:
                            echo 'dia -> '.$i.' ';
                            break;
                    }
                    $cont++;
                }
            }        
        ?>
    </body>
</html>