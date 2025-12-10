<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php 
        echo "<h1>Funções - Aula do dia 10/12/2025</h1>";
        function saudacao() {
            echo "Olá, boas-vindas ao PHP!";
        }

        saudacao(); //Chamando a função

        echo "<br><br>Chamando Função";
        function somar($a, $b) {
            return $a + $b;
        }

        $resultado = somar(5, 3); //Chamando a Função e passando os Argumentos
        echo "<br>Resultado da Soma é: " . $resultado;

        echo "<br><br>";

        function saudacaoPersonalizada($nome = "Visitante") {
            echo "Olá, $nome! Boas-vindas ao nosso site!";
        }

        echo "Chamada SEM Argumento - ";        
        saudacaoPersonalizada(); //Chamada SEM Argumento, usa o Valor Padrão
        echo "<br>Chamada COM Argumento - ";
        saudacaoPersonalizada("Marcelo"); //Chamada COM Argumento

        echo"<br>";

        function encontrarMaiorValor($array) {
            return max($array); //Função MAX() encontra o Maior valor no Array
        }
        echo "<br>Função Max() encontra o Maior valor no Array (lista)<br>";
        $valores = [2, 5, 9, 1, 3]; //Vetor (lista)
        echo "O Maior valor é: " . encontrarMaiorValor($valores);

    ?>
</body>
</html>