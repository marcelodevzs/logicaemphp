<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Primeiro PHP</title>
</head>
<body>
    <h2>
        <?php
            echo "Meu Primeiro PHP \u{1F600}\u{1F4BB}\u{1F30D}";        
            
            /*
            Isso é um comentário
            de várias
            linhas          
            */

            //Quebra de linha antes do próximo ECHO
            echo "<br> <br>";

            //Váriaveis
            $nome = "Marcelo A";
            $sobrenome = "Freitas";

            //A variável pode ser mudada
            $nome = "Marcelo";
            echo "Seja bem-vindo, $nome $sobrenome";

            echo "<br> <br>";

            const time = "São Paulo";

            echo "Meu time de futebol é " . time;
            echo "<br> <br>";
            echo "Seja bem-vindo, $nome $sobrenome seu time é " . time;

            //Tipo de Dados
            $sobrenome1 = "Siqueira"; //String
            $idade = 45; //Int
            $peso = 85.7; //Float
            $casado = true; //Boolean  

            echo "$sobrenome, $idade, $peso";

            echo "<br> <br>";

            //Método 1: Usando var_dump para exibir o valor do booleano
            var_dump($casado);
            echo "<br>";
            
            //Método 2: Usando uma conversão para String
            echo ($casado ? "Casado" : "Não é Casado");
            echo "<br>";
            var_dump($sobrenome);
            echo "<br>";
            var_dump($idade);
            echo "<br>";
            var_dump($peso);
            echo"<br> <br>";

            $frase = "Meu time de futebol " .time;
            $frase1 = "Meu nome é $nome e meu sobrenome é $sobrenome";
            echo($frase);
            echo"<br>";
            echo($frase1);
        ?>
    </h2>
    <p>Meu Primeiro Parágrafo!</p>

</body>
</html>