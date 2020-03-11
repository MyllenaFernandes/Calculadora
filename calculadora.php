<!DOCTYPE HTML>
<html lang = "pt-br">
    <head>
        <title> Exemplo</title>
        <meta charset = "UTF-8">
    </head>
    <body>
        <form action="calculadora.php" method="POST">
                <fieldset>
                    <p>
                        <label>Digite o primeiro valor: </label>
                        <input name="num1" type="text" />
                    </p>
                    <p>
                        <label>Digite o segundo valor: </label>
                        <input name="num2" type="text" /> 
                    </p>
                    <p>
                        <label>Escolha uma operação: </label>
                        <select name="operacao">
                            <option value="soma">Soma(+)</option>>  
                            <option value="subtracao">Subtração(-)</option>
                            <option value="divisao">Divisão(/)</option>
                            <option value="multiplicacao">Multiplicação(*)</option>
                        </select>
                    </p>
                    <input type="submit" value="Calcular" />
                </fieldset>    
            </form>
            <?php
            if(!empty($_POST)){
                $a = $_POST ["num1"];
                $b = $_POST ["num2"];
                $op =$_POST ["operacao"];

                    if($op == "soma"){                       
                        $c = $a + $b;
                         $c = "$c";}
                    else if($op == "subtracao"){
                        $c = $a - $b;
                          $c = "$c";}
                    else if($op == "multiplicacao"){
                        $c = $a*$b;
                          $c = "$c";}
                    else{
                        $c = $a/$b;
                         $c = "$c";}
                    echo "O resultado da operação é: $c";
            }
            ?>      
        </body>
</html>