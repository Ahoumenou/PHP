<?php
declare(strict_types=1);
/** L'annotation de typoe est souvent utilisée conjointement avec 
 * la directive "declare(strict_types=1)" pour activer le mode
 * strict de typage.
 */


// echo ('Hello World !');
// print('Hello World ! 🚀');


$user;// déclacration
$user = 'salut!'; // assignation

$firstname = "John"; // guillément double
$lastname = 'Doe'; // guillement simple

echo $firstname . ' ' . $lastname;
echo "<br>";

// HEREDOC && NOWDOC
echo <<< TEXT
       bonjour
      tout 
    le 
  monde
TEXT;

echo "<br>";

$num1 = 3;
$moyenne = 18.5;
var_dump($num1); // int
var_dump($moyenne); // float

echo "<br>";
$isAdmin = true;
$isEven = false;
var_dump($isAdmin); // bool

echo "<br>";
$data = null;
var_dump($data); // null
// var_dump($user);
echo "<br>";
$fruits = array("pomme", "orange", "banane");
$notes = [20, 18, 156]; // array(20, 18, 156)
$arr = [ "hello", 25, true, null]; // array("hello", 25, true, null)

var_dump($fruits); 
echo "<br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";
echo "<br>";

echo "<pre>";
echo "bonjour\n"; // \n : new ligne
echo "le\n";
echo "monde";
echo "</pre>";

class User {};
$u = new User();
// $uu = new User();
var_dump($u);
// var_dump($uu)

$flotNum = 3.14;
$intNum = (int)$floatNum; // on obtient un entier
$x = (int) 3.14;

var_dump($x);

$flotNum = 3.14;
$intNum = intVal($floatNum); // (int)3
$y = floatval(3); // (float)3.0

var_dump($y);

/**déclarez un variable  age: 
 * écrire un logique qui affiche
 * -'Vous êtes mineur si l'âge est inferieur à 18'
 * -'Vous êtes majeur si l'âge est superieur à 18'
 * -'Vous avez 18 ans': le   cas échéant
 */
$age = 4;

if ($age < 18) {
   echo 'Vous êtes mineur';
   # code...
}elseif ($agen > 18) {
    echo 'Vous êtes majeur';
    # code...
}else{
    echo 'Vous avez 18';
}
echo '<br>';
$jour = 5;

switch ($jour) {
    case 0:
        # code...
      echo  'Nous sommesDimanche';
        break;
    case 1:
        # code...
       echo 'Nous sommes Lundi';
        break;
    case 2:
        # code...
       echo 'Nous sommes Mardi';
        break;
    case 3:
        # code...
       echo 'Nous sommes Mercredi';
        break;
    case 4:
        # code...
       echo 'Nous sommes Jeudi';
        break;
    case 5:
        # code...
       echo 'Nous sommes Vendredi';
       break;
    case 6:
        # code...
       echo 'Nous sommes Samedi';
       break;
       default:
       # code...
       echo 'Ce jour n\'existe pas';
        break;
}

echo '<br>';

$a = 0;
while ($a < 10) {
    # code...
    echo $a;
    $a++;
}

echo '<br>';
for ($i=0; $i < 10 ; $i++) { 
    # code...
    echo $i . ' ' ;
}

echo '<br>';

$fruits = array("pomme", "raisin", "banane");
for ($i=0; $i < count($fruits); $i++) { 
    # code...
  echo  $fruits[$i]. ' '; 
}
// echo count($fruits);
echo '<br>';
foreach ($fruits as $key) {
    # code...
    echo $key . "  ";
};
// tableau associatif
/** Un tableau associatif en PHP , est un tableau où les valeurs sont associés 
 * ) des clés plutôt qu'à des indices numériques comme dans les tableaux 
 * indexés . Dans un tableau associatif , chaque élément est identifié par une 
 * clé unique qui permet d'accéder à la valeur correspondante
 */
$notes1 = ["Erfero"=> 20, "Emile"=> 18, "Martin" => 17, "Alid"=> 15];
$notes2 = array( 
    "Emile" => 20, 
    "Erfero"=> 18, 
    "Martin"=> 17, 
    "Alid"  => 15
);
// $notes = [20, 17, 20, 15];

echo '<pre>';
print_r($notes1);
print_r($notes2);
echo '</pre>';


// echo $notes1["Emile"];

foreach ($notes2 as $key => $value) {
    # code...
    echo $key . ' a une note de ' . '<strong>'. $value . '/20' .'</strong>'. '<br>';
}
 // type hinting, strict_types
 //type hinting ou l'annotation de type

 /** Nous avons la capacité d'annoter les paramètres de fonctions
  * (avant les paramètres séparés par des espaces)
  * et les valeurs de retours. cela permet d'améliorer la 
  * lisibilité.
  */
function add(float $x, int $y): float{
    return $x + $y;
}

echo add(12.5, 8);
// paramètres nommées
echo add(y:5, x:3.5);



