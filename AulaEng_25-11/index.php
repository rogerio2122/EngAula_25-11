<!DOCTYPE html>
<html>
<body>
 
<?php
echo "My first PHP script!";
?>
<!--Funçoes não são case sensitive --:

<?php
ECHO "Heloo world<br>";
echo "Hello world<br>";
Echo "Ola mundo<br>";
?>

<!- - Variáveis com letras maiusculas --:

<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?> 

<!- -Sinxtaxe para comentários de linha unica --:

<?php
// This is a single-line comment

# This is also a single-line comment
?>

<!- -Sintaxe para comentários multi-linha

<?php
/*
This is a multiple-lines comment block
that spans over multiple
lines
*/
?>

<!- -Usando comen para deixar de fora partes do código

<?php
// You can also use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5;
echo $x;
?>

<!- -/Crie variáveis diferentes

<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
?>

<!- -Testar escopo global(variáveis fora da função)

<?php
$x = 5; // global scope
 
function myTest1() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest2();

echo "<p>Variable x outside function is: $x</p>";
?>

<!- -Testar escopo localk(váriavel dentro da função)

<?php
function myTest3() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest4();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>

<!- -Use a palavra chave global para acessar uma variável global de dentro de uma função

<?php
$x = 5;
$y = 10;

function myTest5() {
  global $x, $y;
  $y = $x + $y;
} 

myTest6();  // run function
echo $y; // output the new value for variable $y
?>

<!- -Use o array $GLOBAL[] para acessar uma variável global de dentro de uma fnção

<?php
$x = 5;
$y = 10;

function myTest7() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 

myTest8();
echo $y;
?>

<!- -use a palavra chave static para permitir que uma variável local não seja excluída após a execução da função

<?php
function myTest9() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest10();
echo "<br>";
myTest11();
echo "<br>";
myTest12();
?> 

<!- -Exibir strings com o comando echo

<?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?> 

<!- -Exibir string e variáveis com o comando echo

<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

echo "<h2>$txt1</h2>";
echo "<p>Study PHP at $txt2</p>";
?>

<!- -Exibir strings e variáveis com o print

<?php
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
?> 

<!- -Exibir strings e variáveis com o comando print

<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

print "<h2>$txt1</h2>";
print "<p>Study PHP at $txt2</p>";
?>

<!- -Sequência de caracyteres php

<?php 
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>"; 
var_dump($y);
?>

<!- -php inteiro

<?php  
$x = 5985;
var_dump($x);
?>  

<!- -php flutuador

<?php  
$x = 10.365;
var_dump($x);
?>  

<!- -matriz php

<?php  
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>  

<!- -objeto php

<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>

<!- -valor null do php

<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>

<!- -obter o comprimento de uma string - strlen{}

<?php
echo strlen("Hello world!");
?> 

<!- -Conte o numero de palavras em uma string - str_word_count()

<?php
echo str_word_count("Hello world!");
?> 

<!- -Inverter uma string - strrev()

<?php
$x = "Hello World!";
echo strrev($x);
?> 

<!- -Pesquisar um texto específico dentro de uma string - strpos

<?php
echo strpos("Hello world!", "world");
?> 

<!- -Substituir texto dentro de uma string - str_replace()

<?php
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);
?> 

<!- -Verifique se o tipo de uma variável é inteiro

<?php
// Check if the type of a variable is integer   
$x = 5985;
var_dump(is_int($x));

echo "<br>";

// Check again... 
$x = 59.85;
var_dump(is_int($x));
?>  

<!- -Verifique se o tipo de uma variável é float

<?php
// Check if the type of a variable is float 
$x = 10.365;
var_dump(is_float($x));
?>  

<!- -Verifique se um valor numérico é finito ou infinito

<?php
// Check if a numeric value is finite or infinite 
$x = 1.9e411;
var_dump($x);
?>  

<!- -Cáculo inválido retornará um valor NaN

<?php
// Invalid calculation will return a NaN value
$x = acos(8);
var_dump($x);
?>  

<!- -Verifique se uma variável =é numerica

<?php
// Check if the variable is numeric   
$x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));
?>  

<!- -Converte float e string para inteiro

<?php
// Cast float to int 
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
  
echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>  

<!- -Encontro o valor de PI

<?php
echo(pi());
?>

<!- -Encontro o menor e o mairo valor em uma lista de argumentos

<?php
echo(min(0, 150, 30, 20, -8, -200) . "<br>");
echo(max(0, 150, 30, 20, -8, -200));
?>

<!- -Encontro o valor absoluto(positivo) de um numero

<?php
echo(abs(-6.7));
?>

<!- -Encontro raiz quadrada de um numero

<?php
echo(sqrt(64) . "<br>");
echo(sqrt(0) . "<br>");
echo(sqrt(1) . "<br>");
echo(sqrt(9));
?>

<!- -arrendodar um numero de ponto flutuante para o interio mais próxima

<?php
echo(round(0.60) . "<br>");
echo(round(0.50) . "<br>");
echo(round(0.49) . "<br>");
echo(round(-4.40) . "<br>");
echo(round(-4.60));
?>

<!- -Gerar um numero aleatório

<?php
echo(rand());
?>

<!- -Gerar um numero aleatório entre 10 e 100

<?php
echo(rand(10, 100));
?>

<!- -nome constatnte com distinção entre maiusculas e minusculas

<?php
// case-sensitive constant name
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?> 

<!- -Nome constante que não diferencia maiusculas de minusculas

<?php
// case-insensitive constant name
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
?> 

<!- -Crie uma constantes array com definet()

<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?> 

<!- -Use uma constantes dentro de uma função (quando ela é definida fora da função)

<?php
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
}
 
myTest();
?> 


</body>
</html>