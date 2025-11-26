<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h1>Operadores Aritiméticos</h1>
    <?php
    
    //Operadores aritméticos
    $a = 5;
    $b = 3;
    $soma = $a + $b;
    $subtracao = $b - $a;
    $multiplicacao = 4 * 3;
    $potenciacao = 2 ** 2;
    $divisao = $a / $b;
    $restodivisao = $a % $b;
    echo "Resultado da Soma é $soma. <br>";
    echo "Resultado da Subtração é $subtracao. <br>";
    echo "Resultado da Multiplicação é $multiplicacao. <br>";
    echo "Resultado da Potenciação é $potenciacao. <br>";
    $divisao_formatada = number_format($divisao, 2,);
    echo "Resultado da Divisão é $divisao_formatada. <br>";
    echo "Resultado do Resto da Divisão é $restodivisao. <br>";

    ?>
    
    <h1>Operadores de Atribuição</h1>
    <?php
    $rua = "Rua Amador Bueno";
    $rua .= " na Cidade de São Paulo.";

    $preco = 2.45;
    $preco += 2.30;
    $preco -= 1.30;

    //Formata o número para usar como separador decimal
    $preco_formatado = number_format($preco, 2, ',', ',');

    //Exibir o resultado
    echo "$rua <br>O preço ficou R$ $preco_formatado. <br>"


    ?>

    <h1>Operadores de Comparação</h1>
    <?php 
    $c = 10;
    $d = "10";

    echo($c == $d) ? "São iguais." : "Não são iguais";
    echo"<br>";
    echo($c === $d) ? "São estritamente iguais." : "Não são estritamente iguais. <br>";

    echo"<h1>Comparação de Diferentes</h1>";
    echo($c != $d) ? "São estritamente diferentes." : "Não são estritamente diferentes.";
    echo "<br>";
    echo($c !== $d) ? "São estritamente diferentes." : "Não são estritamente diferentes.";

    $teste = false;
    echo"<br> <h1> Negação </h1>";
    echo(!$teste) ? "É verdadeiro." : "É falso";

    $e = 5;
    $f = 3;
    echo"<br> <h1> Maior que e Menor que </h1>";
    echo($e > $f) ? "E é maior que F." : "E não é maior que F.";
    echo"<br>";
    echo($e < $f) ? "E é menor que F." : "E não é menor que F.";

    $h = 4;
    $i = 4;
    $j = 2;
    echo"<br> <h1> Maior que ou Igual a, Menor ou Igual a </h1>";
    echo($h >= $i) ? "H é Maior ou Igual a I" : "H não é Maior ou Igual a I";
    echo"<br>";
    echo($i <= $j) ? "I é menor ou Igual a J" : "I não é Menor ou Igual a J";

    //Operadores Lógicos
    echo"<br> <h1> Operadores Lógicos </h1>";
    $idade = 20;
    $tem_cnh = true;

    echo($idade >= 18 and $tem_cnh) ? "Você pode dirigir." : "Você não pode dirigir.";
    echo"<br>";

    $tem_ingresso = false;
    $tem_convitevip = true;

    echo($tem_ingresso or $tem_convitevip) ? "Você pode entrar na festa." : "Você não pode entrar na festa.";
    echo"<br>";

    //&& para AND e || para OR
    $sol = true;
    $sem_chuva = false;
    $feriado = true;

    echo($sol && $sem_chuva || $feriado) ? "Você pode sair para passear." : "Você não pode sair para passear.";
    echo"<br>";


    ?>
</body>
</html>