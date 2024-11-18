<!-- Usando a função GET -->
 <!-- GET: método HTML padrão, a requisição é enciada como uma string anexada a URL -->

 <!-- Esse programa recebe dois valores pela URL usando o método GET -->

<!-- http://localhost/PHP-basico-JuliaZanirato/2_opera_variaveis.php?numero1=457&numero2=20 -->

<?php
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    // Verifica se os valores foram passados corretamento
    if (isset($numero1) && isset($numero2)){

        // converter para inteiros
        $numero1 = (int)$numero1;
        $numero2 = (int)$numero2;
        
        //soma
        $soma = $numero1 + $numero2;
        //subtração
        $subtracao = $numero1 - $numero2;
        //multiplicação
        $multiplicacao = $numero1 * $numero2;
        //divisão
        $divisao = $numero1 / $numero2;

        //exibir resultado
        echo "A soma é: $soma <br>";
        echo "A subtração é: $subtracao <br>";
        echo "A multiplicação é: $multiplicacao <br>";
        echo "A divisão é: $divisao<br>"
    }
    else{
        echo "ATENÇÃO! Por favor, forneça os valores de numero1 e numero2 pela URL.";
    }

?>