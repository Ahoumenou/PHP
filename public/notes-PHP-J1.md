## la commande pour lancer le server php:      
php -S localhost:3000
## la commande pour lancer le server php si le fichier se trouve dans un dossier:
        php -S localhost:3000 -t chemin-du-dossier\


## variables

-declarations
 En php , toutes les variables commencent par un "$"
 Toute déclaration php , se termine toujours par un point-virgule.
 Exemple:
 ```php
 $user  = "John";
 $num = 2
 ```
- naming convention
La convention de nommage des variables est la suivante:
1 - toutes les variables commencent forcement par un dollar
2- Le nom d'une variable doit composé uniquement 
de charactère alpha-nmérique et du tiret de 8 (_)
3- le nom d'une variable  ne doit pas commencer par un chiffre 
## types
En php le type d'une variable lui est assigné quand vous lui donnez une valeur. On utilise la fonction `var_dump()` pour avoir les informations, concernant le type d'une variable.

```php

$user;
var_dump($user);
``` 

### string
réprésente les chaînes de caractère. Se declare avec soit un guillemet double ("") ou un guillemet simple (''). La concatenation de deux chaines de caractères de fait avec un point (.)

```php
$fname = 'John';
$lname = 'Doe';
echo $fname . " " . $lname;
``` 

###  numbers
répresente tous les nombrs , entiers comme à virgules. On en distingue deux séparations: 
- int: désingnant les nombres entiers 
- float: désignant les nombres flottants (nombres décimaux)

```php
$num1 = 3;
$moyenne = 18.5;
var_dump($num1); // int
var_dump($moyenne) // float
``` 

### boolean
représente les valeurs de vérités, soit "true "soit "false"; 

```php
$isAdmin = true;
$isEven = false;
var_dump($isAdmin); // bool
``` 
### null 
représenrte l'absence de valeurs 
```php
$data = null;
var_dump($data); // null
``` 
### array 
représente un tableau.
```php
$fruits = array("pomme", "orange", "banane");
$notes = [20, 18, 156]; // array(20, 18, 156)
$arr = [ "hello", 25, true, null]; // array("hello", 25, true, null)

var_dump($fruits, $notes, $arr); 
``` 

### object 
représente un objet. Pour créer un objeet, il faut créer une classe , puis l'instancier.
```php
class User {};
$u = new User();
var_dump($u); // object(User)#Identifiant_unique (nombre_de_propriétés)

``` 
 ## Type conversion
 pour convertir d'un type à un autre . il suffit de préciser l'opérateur de conversion explicite.
```php
$flotNum = 3.14;
$intNum = (int)$floatNum; // on obtient un entier
$x = (int)3.14

``` 
En plus,nous pouvons utiliser les fonctions php natives telles que *intval()*, *floatval()*, *boolval*, ....
```php
$flotNum = 3.14;
$intNum = intVal($floatNum); // (int)3
$x = (int)3.14
$y = floatval(3); // (float)3.0

``` 
## condidtions
Les conditions en PHP sont identiques au JS, et on y retrouve les mêmes opérateurs 
### if, if ...else, if ...else
### elseif
   
### switch
  ## boucles
### while
### foreach
### do ...while
### fonctions
### simples
### type ...hinting ()