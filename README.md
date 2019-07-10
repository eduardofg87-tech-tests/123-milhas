# 123 Milhas BH/MG - PHP Sênior Test
## Téorico
Atenção, as perguntas se referem apenas a linguagem PHP, sem considerar a utilização de frameworks.

1. No PHP qual a melhor maneira de fazer um mixin de funcionalidades em uma determinada classe? *
- [ ] Utilizando herança
- [x] Utilizando uma trait
- [ ] Utilizando um generator
- [ ] Utilizando uma interface

2. Qual das classes abaixo não existe no PHP por padrão?
- [ ] Closure
- [ ] Datatime
- [x] Currency
- [ ] Exception
- [ ] SplFileInfo
- [ ] ReflectionClass

3. Em uma expressão de comparação qual é a diferença entre == e ===?

`$foo == $bar`      `Igualdade`     TRUE se `$foo` é igual a `$bar` depois da conversão de tipo
`$foo === $bar`     `Idênticos`     TRUE se `$foo` é igual a `$bar`, e eles são do mesmo tipo. 

4. Qual função devemos utilizar para redirecionar o navegador para uma nova página?
- [ ] redir
- [x] header()
- [ ] location()
- [ ] redirect()

5. Considere que você executou o script a seguir:
``<?php``
``$name = mysql_real_escape_string($_POST["name"]);``
``$password  = mysql_real_escape_string($_POST["password"]);``
``?> ``

Qual a motivação para ter utilizado a função mysql_real_escape_string no script acima. Cada resposta correta representa uma solução completa. Escolha todas que se aplicam.
- [ ] Ela escapa os caracteres especiais das strings $_POST["name"] e $_POST["password"].
- [ ] Ela pode ser utilizada como medida de prevenção contra um ataque de SQL injection.
- [ ] Ela pode ser utilizada para mitigar um ataque de Cross Site Scripting.
- [ ] Ela escapa todos os caracteres especiais das strings $_POST["name"] e $_POST["password"] exceto ' e ".

`Não devemos usar funções da extensão "mysql" pelo seu desenvolvimento ter sido descontinuado; a extensão se tornou obsoleta, ou seja, código que utilize essas funções não irá funcionar versões modernas do PHP 7 e/ou superiores, já estamos a ponto de lançamento do PHP 7.4 e o trabalho na versão 8 está a todo vapor.`

Segue um link sobre usar `Prepared Statements` ao invés de `mysql_real_escape_string`:
[mysql_real_escape_string X Prepared Statements](https://ilia.ws/archives/103-mysql_real_escape_string-versus-Prepared-Statements.html)


## Prático
Caso julgue necessário você poderá utilizar frameworks e/ou bibliotecas publicas para resolver as questões a seguir. Se necessário faça o versionamento no Github e cole o link do repositório no campo da resposta.

1. Escreva uma função que receba como parâmetros os coeficientes de uma equação de segundo grau e retorne suas raízes.

`Resposta:`

```
<?php

function equacaoDeSegundoGrau(int $a, int $b, int $c): string
{
    $delta = ($b * $b) - (4 * $a * $c); 
    switch($delta) {
        case 0:
            $resultado = "Delta é igual à 0, portanto as raízes são iguais:" . PHP_EOL; 
            $x = (-($b)) / (2 * $a); 
            $resultado.= "x': " . $x . PHP_EOL;
            $resultado.= "x'':" . $x . PHP_EOL;
            $resultado.= "Delta: " . $delta . PHP_EOL;
            return $resultado;
        break;
        case $delta > 0: 
            $resultado = "Delta é maior que 0, portanto há duas raízes diferentes:" . PHP_EOL;
            $x1 = intval( -($b) + sqrt($delta) / 2 * $a);
            $x2 = intval(-($b) - sqrt($delta) / 2 * $a);
            $resultado.= "x':" . $x1 . PHP_EOL;
            $resultado.= "x'':" . $x2 . PHP_EOL;
            $resultado.= "Delta:" . $delta . PHP_EOL;
            return $resultado;
        break;
        case $delta < 0: 
            $resultado = "Delta é menor que 0, portanto não há raízes reais" . PHP_EOL; 
            $resultado.= "Delta: " . $delta . PHP_EOL;
            return $resultado;
        break;
        default:
            throw new Exception('erro inesperado, saia correndo pois o circo está pegando fogo!');
        break;
    }
}

try {
   
    //TESTE 1
    $a1 = 1;
    $b1 = -4;
    $c1 = 5;
    //Delta é menor que 0, portanto não há raízes reais
    //Delta: -4
    echo equacaoDeSegundoGrau($a1, $b1, $c1) . PHP_EOL;
    
    //TESTE 2
    $a3 = 4;
    $b3 = -4;
    $c3 = 1;
    //Delta é igual à 0, portanto as raízes são iguais:
    //x': 4
    //x'': 4
    //Delta: 0
    echo equacaoDeSegundoGrau($a3, $b3, $c3) . PHP_EOL;
    
    //TESTE 3
    //x':5
    //x'':4
    //Delta:1
    $a2 = 1;
    $b2 = -5;
    $c2 = 6;    
    echo equacaoDeSegundoGrau($a2, $b2, $c2);
}
catch (Exception $e) {
    echo $e->msg();
}
?>
```

2. Escreva as classes necessárias para representar um estacionamento. Dica: Seja criativo e demonstre seus conhecimentos de POO.

`Resposta:`




3. Considerando o trecho de um texto extraído de uma página de pesquisa de vôos:
"Melhor preço sem escalas R$ 1.367(1)
Melhor preço com escalas R$ 994 (1)

1 - Incluindo todas as taxas."

Escreva uma expressão regular para localizar o melhor preço com ou sem escalas, depois utilize sua expressão para extrair a string correspondente ao valor escolhido e em seguida converta o resultado em valor decimal (float) de forma que tenhamos apenas "1367.00" ou "994.00" . Dica: Se necessário, utilize o site https://regex101.com/ para testar a sua expressão.

`Resposta:`

https://regex101.com/r/U6Eh4e/1


 