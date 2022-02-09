<div class="titulo">String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também"); //Ele apresenta o tipo da string e também o tamanho dela, inclundo acentos e pontuações
echo '<br>';

// concatenação
echo "Nós também" . ' somos.', '<br>';
echo("Nós também" . ' somos.'), '<br>';
echo '<br>', "Também aceito" . " vírgulas", '<br>';


echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" " . "\\";

print("<br>Também existe a função print");
print"<br>Também existe a função print";

//Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra maiúscula');
echo '<br>' . ucwords('só a primeira letra de todas as palavras maiúscula');
echo '<br>' . strlen('Quantos caracteres tem nessa string?');
// echo '<br>' . mb_strlen("Eu também", "utf-8");
echo '<br>' . substr('Só uma parte mesmo', 7, 6);
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso');