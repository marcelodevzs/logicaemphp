<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While, Do While, For, Foreach</title>
</head>
<body>
    <?php 
        echo "<h1>Loop - Aula do dia 10/12/2025</h1>";

        //While (Enquanto)
        echo "While (Enquanto)<br>";
        $i = 1;
        while ($i <= 5) {
            echo $i . "<br>"; //Imprime o valor de $i e pula para a próxima linha
            $i++;
        }

        echo "<br>";

        echo "While - Somente Números Pares<br>";
        $j = 2;
        while ($j <= 10) {
            echo $j . "<br>"; //Imprime os números pares
            $j += 2; //Incrementa de 2 em 2, o mesmo que $j = $j + 2
        }

        //Do While (Faça Enquanto)
        echo "<br><br>Do While (Faça Enquanto)<br>";
        $m = 2;
        do {
            echo $m . "<br>";
            $m++;
        } while ($m <= 5);

        echo "<br>";

        //For (Para)
        echo "<br>For (Para)<br>";
        for ($n = 1; $n <= 5; $n++) {
            echo $n . "<br>";
        }

        echo "<br>";

        for ($p =1; $p <= 5; $p++) {
            echo "O quadrado de $p é " . ($p * $p) . ".<br>";
        }

        echo "<br>Foreach (Para Cada)<br>";
        $frutas = ["Maça", "Banana", "Laranja", "Uva"];
        foreach ($frutas as $fruta) {
            echo $fruta . "<br>"; //Imprime o nome de cada fruta
        }

        echo "<br>";

        $idades = [
            "João" => 25,
            "Maria" => 30,
            "Pedro" => 22
        ];

        foreach ($idades as $nome => $idade) {
            echo "$nome tem $idade anos. <br>"; //Exibe nome e idade
        }
    
    
    ?>
    
</body>
</html>