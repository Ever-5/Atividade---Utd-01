<html>
    <head>
        <title>Questão 7</title>
    </head>
    <body>
        <form name="form1" action="questao7.php" method="post">
        <?php
            for($i=1;$i<=5;$i++){
                echo '<label>'.$i.''.'número</label>';
                echo '<input style="margin-bottom: 10px"type="text" name="'.$i.'n"> <br>';
            }
            
        ?>
            <button type="submit" value="submit"> Enviar </button>
        </form>
    </body>
</html>