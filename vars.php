<?php
/**
 * php: programando com orientação a objetos
 * DALL'OGLIO Pablo. PHP: programando com orientação a objetos. 4. ed. São Paulo: Novatec, 2019.
 *
 * 1 Introdução ao PHP
 * 1.4 Variáveis (p. 28-37)
 */

$nome = "João";
$sobrenome = 'da Silva';
echo "$sobrenome, $nome"; // com áspas duplas mesclam-se os conteúdos das variáveis com a vírgula e o espaço
echo '<br>';              // para pular para próxima linha da saída
echo '$sobrenome, $nome'; // com apóstrofe NÃO se mesclam os conteúdos das variáveis com a vírgula e o espaço
echo '<br>';

function nl($n = 1)       // para pular n linhas na saída (web display)
{
    for ($i = 1; $i <= $n; $i++){
        echo '<br>';
    }
    return;
}

nl(2); // pula duas linhas na web display
echo "$sobrenome, $nome";
nl(2);
echo "variáveis variantes (variable variables): $$";
nl();
// define o nome da variável
$variavel = 'nome';
// cria variavel identificada pelo conteúdo de $variavel
$$variavel = 'Maria'; // === $nome = 'Maria';
// exibe o conteúdo da variável $nome na tela
echo $nome; // resultado = Maria
nl(2);

echo "& - operador que cria referência entre variáveis: entrelaçamento de dois nomes de variáveis diferentes com o mesmo apontador de endereço de memória";
nl();
$a = 5;
$b = &$a;
$b = 10;
echo "a = $a" . " entrelaçada com " . "b = $b";
nl(2);

echo "Objetos - são sempre copiados por referência";
nl();
$c = new stdClass;  // cria um objeto
$c->nome = 'Maria'; // define um atributo
$d = $c;            // cria uma réplica do objeto
$d->nome = 'Joana'; // define um mesmo atributo com outro valor
print $c->nome;     // resultado = Joana
echo " ";           // espaço
print $d->nome;     // resultado = Joana
nl(2);

/* cria um array do tipo string com 4 posições */
$carros = array('Palio', 'Gol', 'Fiesta', 'Corsa');
echo $carros[1]; // resultado = Gol,pois a primeira posição de um array é indexada com zero
nl(2);

/**
 * 1.4.5 Tipo objeto
 */
print "Um objeto é uma entidade com um determinado comprtamento definido por seus métodos (suas ações) e por suas propriedades (seus dados).";
nl();
print "Para criar um objeto utiliza-se o operador new.";
nl();
print "Neste exemplo cria-se um objeto plano (stdClass).";
nl();

