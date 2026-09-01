<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Faça os exercícios abaixo e entregue um arquivo com seu nome zipado.
    //1) Crie duas variáveis nota1 e nota2, faça a média aritmética da nota e mostre se o aluno foi aprovado ou reprovado, considerando a média 6.
    //2) Crie 3 variaveis com numeros diferentes e mostre na tela elas em ordem crescente.
    //3) Crie um array e preencha ele com valores de 0 a 10, depois mostre na tela o array.
    //4)Crie um array de notas e mostre na tela apenas as notas maiores que 6.

    //numero 1
    $nota1 = 9;
    $nota2 = 7;

    $media = ($nota1 + $nota2) / 2;
    echo "Sua primeira nota é " . $nota1 . " e sua segunda nota é {$nota2}. Sua média é {$media}. <br>";

    if ($nota1 >= 6) {
        echo "Uhul, você passou! <br><br>";
    } else {
        echo "Eita, reprovado. <br><br>";
    }


    //numero 2
    $num1 = 0.34;
    $num2 = 67;
    $num3 = 9;

    $numeros = array($num1, $num2, $num3);

    sort($numeros);

    echo "Números em ordem crescente: ";
    foreach ($numeros as $valor) {
        echo $valor . ", ";
    }

    echo "<br><br>";

    //numero3
    $numerinhos = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    foreach ($numerinhos as $valor) {
        echo $valor . ", ";
    }

    //numero4
    $notitas = array(7.5, 8.9, 2.5, 3.2, 10, 7, 7.7, 8.5);
    foreach ($notitas as $nota) {
        if ($nota > 6) {
            echo $nota . " ";
        }
    }


    ?>



</body>

</html>