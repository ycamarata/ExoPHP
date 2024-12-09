<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo PHP</h1>

    <?php
     echo '<h2>LES VARIABLES</h2>';
    echo '<h2>Exercice 1</h2>';
  echo "<p>Créer une variable nom et l 'initialiser avec la valeur de votre choix. Afficher son contenu</p>"; 

  // Création de la variable $nom
  $nom = "Camarata";
  
  // Afficher la variable $nom
  echo '<p>La valeur de la variable $nom est : ' . $nom . '</p>';

// ---------------------
  echo '<h2>Exercice 2</h2>';
  echo "<p>Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
Afficher leur contenu.</p>";

// Création des 3 variables nom, prénom et âge
$nom = "Camarata";
$prenom = "Yannick";
$age = 31;
//Afficher les 3 variables 
echo '<p>La valeur des variables $nom, $prenom et $age sont : ' . $nom . ' , '. $prenom .' , '. $age .' </p>';

// ---------------------
echo '<h2>Exercice 3</h2>';
echo "<p>Créer une variable km. L'initialiser à 1. Afficher son contenu.
Changer sa valeur par 3. Afficher son contenu.
Changer sa valeur par 125. Afficher son contenu.</p>";

// Création de la variable $km
$km = 1;
// Afficher la variable $km
echo '<p> la valeur de km = '. $km .' </p>';

// Création de la variable $km
$km = 3;
  // Afficher la variable $km
echo '<p> la valeur de km = '. $km .' </p>';

// Création de la variable $km
$km = 125;
  // Afficher la variable $km
echo '<p> la valeur de km = '. $km .' </p>';

// ---------------------
echo '<h2>Exercice 4</h2>';
echo "<p>Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser
avec une valeur de votre choix.
Les afficher.</p>";

// Création des variables
$string = "Blabla";
$int = 2;
$float = 5.75;
$booléan = false;

//Afficher les variables
echo '<p> la valeur de string = '. $string .' </p>';
echo '<p> la valeur de int = '. $int .' </p>';
echo '<p> la valeur de float = '. $float .' </p>';
echo '<p> la valeur de booléan = ' . ($booléan ? 'true' : 'false') . '</p>';

// ---------------------
echo "<h2>Exercice 5</h2>";
echo "<p>Créer une variable de type int. L'initialiser avec rienrien. Afficher sa valeur.
Donner une valeur à cette variable et l'afficher.</p>";

//Création de la variable int
$variableInt = 'null';
//Fonction intval pour convertir la chaîne en chiffre 0=null
$variableInt = intval($variableInt);
//Afficher la valeur après convertion
echo '<p> Valeur de null avec intval : '. $variableInt .'</p>';
//Nouvelle valeur affectée
$variableInt = 93;
//Afficher la nouvelle valeur
echo '<p>Nouvelle valeur : '. $variableInt .' </p>';

// ---------------------
echo "<h2>Exercice 6</h2>";
echo '<p>Créer une variable nom et initialiser avec la valeur de votre choix.
Afficher : "Bonjour" + nom + ", comment vas tu ?".</p>';

//Créer variable nom
$nom = 'Yannick';
//Afficher la phrase
echo '<p> "Bonjour  '.$nom.' , comment vas tu ?" </p>';

// ---------------------
echo "<h2>Exercice 7</h2>";
echo '<p>Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
Afficher : "Bonjour" + nom + prenom + ",tu as" + age + "ans".</p>';
//Créer les 3 variables
$nom = "Camarata";
$prenom = "Yannick";
$age = 31;
//Afficher la phrase
echo '<p> "Bonjour '.$nom.'  '.$prenom.'  ,tu as '.$age.' ans " </p>';

// ---------------------
echo '<h2>Exercice 8</h2>';
echo "<p>Créer 3 variables.
Dans la première mettre le résultat de l'opération 3 + 43 + 4 .
Dans la deuxième mettre le résultat de l'opération 5 * 205 * 20.
Dans la troisième mettre le résultat de l'opération 45 / 545 / 5.
Afficher le contenu des variables.</p>";

//Créer les variables des opérations
$opération1 = 3 + 43 + 4 ;
$opération2 = 5 * 205 * 20;
$opération3 = 45 / 545 / 5;
//Afficher les résultats
echo '<p>Résultat opération1 = '.$opération1.'</p>';
echo '<p>Résultat opération2 = '.$opération2.'</p>';
echo '<p>Résultat opération3 = '.$opération3.'</p>';

// ---------------------------------------------------------------------------------------
echo "<h2>LES CONDITIONS</h2>";

echo '<h2>Exercice 1</h2>';
echo "<p>Créer une variable age et l'initialiser avec une valeur.
Si l'age est supérieur ou égale à 18, afficher Vous êtes majeur. 
Dans le cas contraire, afficher Vous êtes mineur.</p>";
// Créer la variable
$age = 31; 

// Vérifier l'âge
if ($age >= 18) {
    echo 'Mon âge est : '.$age.'.<br> Vous êtes majeur.';
} else {
    echo 'Mon âge est : '.$age.'.<br> Vous êtes mineur.';
}


//----------------------------------------
echo '<h2>Exercice 2</h2>';
echo "<p>Créer deux variables age et genre. La variable genre peut prendre comme valeur : - Homme - Femme
En fonction de l'âge et du genre afficher la phrase correspondante : -Vous êtes un homme et vous êtes majeur - Vous êtes un
homme et vous êtes mineur- Vous êtes une femme et vous êtes majeur - Vous êtes une femme et vous êtes mineur
Gérer tous les cas.</p>";

// Créer les variables
$ageage = 31; 
$genre = "homme"; 

// Vérifier les conditions
if ($genre == "homme") {
    if ($age >= 18) {
        echo "Vous êtes un homme et vous êtes majeur.";
    } else {
        echo "Vous êtes un homme et vous êtes mineur.";
    }
} else if ($genre == "femme") {
    if ($age >= 18) {
        echo "Vous êtes une femme et vous êtes majeur.";
    } else {
        echo "Vous êtes une femme et vous êtes mineur.";
    }
}

//----------------------------------------
echo '<h2>Exercice 3</h2>';
echo "<p>Traduire ce code avec des if et des else :(maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!'</p>";

// Créer la variable
$maVariable = 'femme'; 
echo 'Ma variable est : '.$maVariable.'.';
// Vérifier la condition
if ($maVariable != 'homme') { // Si mavariable n'est pas un homme alors...
    echo "C'est une développeuse !!!";
} else {
    echo "C'est un développeur !!!";
}

//----------------------------------------
echo '<h2>Exercice 4</h2>';
echo "<p>Traduire ce code avec des if et des else : echo (monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';'</p>";
//Créer la variable
$monAge = 5;
echo 'Mon âge est : '.$monAge.'.';
// Vérifier la conditon
if($monAge >= 18){
  echo ' Tu es majeur';
}else{
  echo " Tu n'es pas majeur" ;
}

//----------------------------------------
echo '<h2>Exercice 5</h2>';
echo "<p>Traduire ce code avec des if et des else : echo (maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';'</p>";
//Créer la variable
$maVariable = false;
echo 'Ma condition est : ';
//Vérifier la condition
if ($maVariable == false) {
  echo "c'est pas bon !!!";
} else {
  echo "c'est ok !!";
}

//----------------------------------------
echo '<h2>Exercice 6</h2>';
echo "<p>Traduire ce code avec des if et des else : echo (maVariable) ? 'c'est ok !!' : 'c'est pas bon !!!'</p>";

//Créer la variable
$maVariable = true;
echo 'Ma condition est : ';
//Vérifier la condition
if ($maVariable == true) {
  echo "c'est ok !!";
} else {
  echo "c'est pas bon !!!";
}

// ---------------------------------------------------------------------------------------
echo "<h2>LES BOUCLES</h2>";


echo '<h2>Exercice 1</h2>';
echo "<p>Créer une variable et l'initialiser à 0.
Tant que cette variable n'atteint pas 10, il faut : - l'afficher - l'incrementer </p>";

//Boucle +1
for ($i= 0; $i <= 10; $i++) {
  echo $i;
}


?>

</body>
</html>