<html>
    <head>
        <title>Questão 8</title>
    </head>
    <body>
        <form name="form1" action="index.php" method="post">
            <label> Quantas idades você quer pegar?</label>
            <input type="text" name="qtd">
            <button type="submit">click</button>            
        </form>
        <form name="form2" action="questao8.php" method="post">
            <?php
                if (isset($_POST["qtd"])){
                    $qtd = $_POST["qtd"];
                    for($i=1;$i<=$qtd;$i++){
                        echo '<label>'.$i.''.'número</label>';
                        echo '<input style="margin-bottom: 10px"type="text" name="'.$i.'n"> <br>';
                        
                    }
                    echo '<button type="submit">Visualizar maioridade.</button>';
                }        
            ?>
        </form>
    </body>
</html>
