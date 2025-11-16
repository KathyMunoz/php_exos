<?
/*
//Exercice 1 
//-Créer une variable de type int avec pour valeur 5,
$mavariabletypeint = 5;

//-Afficher le contenu de la variable (utilisation de la fonction php echo),
echo $mavariabletypeint;

//-Afficher son type (utilisation de la fonction php gettype),
echo '<br>'.gettype($mavariabletypeint);

//-Créer une variable de type String avec pour valeur votre prénom,
$mavariabletypestring = "prénom";

//-Afficher le contenu de la variable (utilisation de la fonction php echo),
echo '<br>'.$mavariabletypestring;

//-Créer une variable de type booléen avec pour valeur false,
$mavariabledetypeboolean = false;

//-Afficher son type (utilisation de la fonction php gettype).
echo '<br>'.gettype($mavariabledetypeboolean);
*/

echo'<p> Exercice 2  </p>';
//Créer une variable $sasha, qui contient "pikachu",
$sasha = "pikachu";
//Créer une variable $pierre, qui contient "onyx",
$pierre = "onyx";
//Faites en sorte que $sasha et $pierre s'échange leur pokémon

$new = $sasha;
$sasha = $pierre;
$pierre = $new;

echo'<p>Résultat de la variable $sasha = '.$sasha.'</p>';
echo'<p>Résultat de la variable $pierre = '.$pierre.'</p>';


echo'<p> Exercice 3  </p>';
//-Créer 3 variables $a, $b et $c qui ont pour valeur $a =5, $b =3 et $c = $a+$b,
$a = 5;
$b = 3;
$c = $a+$b;
//-Afficher la valeur de chaque variable (utilisez la fonction echo).,
echo '<br>'.$a;
echo '<br>'.$b;
echo '<br>'.$c;
//-passer la valeur de $a à 2,

$a = 2;
//-Afficher la valeur de $a,
echo '<br>'.$a;
//-passer la valeur de $c à $b - $a,
$c = $b-$a;

//-Afficher la valeur de chaque variable (utilisez la fonction echo).
echo'<br>'.$a;
echo'<br>'.$b;
echo'<br>'.$c;


echo'<p> Exercice 4  </p>';
//-Ecrire un programme qui prend le prix HT d’un article, le nombre d’articles et le taux de TVA, et qui fournit le prix total TTC correspondant.
$prixHT = 100;
$nombreArticles = 5;
$tauxTVA = 20;
$prixTTC = $prixHT * (1 + $tauxTVA/100) * $nombreArticles;
//-Afficher le prix HT, le nbr d’articles et le taux de TVA (utilisez la fonction echo),
echo'<br>'.$prixHT;
echo'<br>'.$nombreArticles;
echo'<br>'.$tauxTVA;

//-Afficher le résultat (utilisez la fonction echo).
echo'<br>'.$prixTTC;
//NOTE : le prix TTC = prixHT * (1 + tauxTVA)



echo'<p> Exercice 5  </p>';
//-Créer 1 variable $a qui a pour valeur « bon »,
$a="bon";
//-Créer 1 variable $b qui a pour valeur « jour »,
$b = "jour";
//-Créer 1 variable $c qui a pour valeur 10,
$c = 10;
//-Concaténer $a, $b et $c +1,
$a.$b.$c+1;
//-Afficher le résultat de la concaténation.
echo'<br>'.$a.$b.$c+1;

echo'<p> Exercice 6  </p>';
//-Créer une variable $a qui a pour valeur bonjour,

$a = "bonjour ";
//-Afficher un paragraphe (balise html) et à l’intérieur les mots suivants :l’adrar,
echo '<p>l\'adrar</p>';
//-Ajouter la variable $a avant la phase dans le paragraphe,
echo'<p>'.$a.'l\'adrar</p>';
//-Cela doit donner :
//<p>bonjour l’adrar</p>

echo'<p> Exercice 7  </p>';
//-Créer une fonction qui soustrait à $a la variable $b (2 paramètres en entrée),
$a = 4;
$b = 2;
/*function soustrait($paramA, $paramB) {
    echo '<p>'.$paramA.' - '.$paramB.'</p>';
    
}
soustrait($a,$b);*/

//-la fonction doit renvoyer le résultat de la soustraction $a-$b (return).
function soustrait($paramA, $paramB) {
    return $paramA-$paramB; 
}
$resultat = soustrait($a,$b);
echo "<p>$a - $b = $resultat</p>";


echo'<p> Exercice 8  </p>';
//Créer une fonction qui prend en entrée un nombre à virgule (float),,
function arrondi($chiffre) {
    return round($chiffre);
}

echo arrondi(1.64736473);
//la fonction doit renvoyer l’arrondi (return) du nombre en entrée.
echo'<p> Exercice 9  </p>';
//Créer une fonction qui prend en entrée 3 valeurs et renvoie la somme des 3 valeurs.

function somme($chiffre1, $chiffre2, $chiffre3) {
    return $chiffre1 + $chiffre2 + $chiffre3;
}
echo somme(1, 2, 3);

echo'<p> Exercice 10  </p>';
//-Créer une fonction qui teste si un nombre est positif ou négatif (echo dans la page web).
function test($nombre) {
    if ($nombre >= 0) {
        echo'<p>Le nombre est positif</p>';
    } else {
        echo'<p>Le nombre est négatif</p>';
    } 
}

echo '<p>' .test(2). '</p>';
echo test(-1);


echo'<p> Exercice 11  </p>';

//-Créer une fonction qui prend en entrée 3 valeurs et retourne le nombre le plus grand (echo dans la page web).

function plusGrandvaleur ($x, $y, $z){
    return max ($x, $y, $z);
} 
echo '<p>' .plusGrandvaleur(2, 8, 1). '</p>';

echo'<p> Exercice 12  </p>';

function plusPetitvaleur ($num1, $num2, $num3){
    return min ($num1, $num2, $num3);
} 
echo '<p>' .plusPetitvaleur(2, 8, 1). '</p>';

echo'<p> Exercice 13  </p>';
/*-Créer une fonction qui prend en entrée 1 valeur (l’âge d’un enfant). Ensuite, elle informe de sa catégorie (echo dans
la page web) :
x "Poussin" de 6 à 7 ans
x "Pupille" de 8 à 9 ans
x "Minime" de 10 à 11 ans
x "Cadet" après 12 ans*/

function category ($valeur) {
    if ($valeur >= 6 && $valeur <= 7) {
        echo '<p>"Poussin"</p>';
    } else if ($valeur >= 8 && $valeur <= 9) {
        echo '<p>"Pupille"</p>';
    } else if($valeur >= 10 && $valeur <= 11) {
        echo '<p>"Minime"</p>';
    } else if($valeur >= 12) {
        echo '<p>"Cadet"</p>';
    } else{
        echo '<p> "Hors catégorie" </p>';
    }
}

echo '<p>' .category(6). '</p>';
echo '<p>' .category(8). '</p>';
echo '<p>' .category(10). '</p>';
echo '<p>' .category(14). '</p>';
echo '<p>' .category(5). '</p>';

echo'<p> Exercice 14  </p>';

//Refaire l’exercice 13 en utilisant le switch case.

function categorySwitch ($valeur) {
    Switch($valeur) {
        case 6 :
            //si je mets un break là, ça va s'arrter là
        case 7 :
           echo '<p>"Poussin"</p>';
           break;
        case 8 :
        case 9 :
            echo '<p>"Pupille"</p>';
            break;
        case 10 :
        case 11 :
            echo '<p>"Minime"</p>';
            break;
        case 12 :     
            echo '<p>"Cadet"</p>';
            break;
        default :
            echo '<p> "Hors catégorie" </p>';
            break;

    }
}

echo '<p>' .category(6). '</p>';
echo '<p>' .category(8). '</p>';
echo '<p>' .category(10). '</p>';
echo '<p>' .category(14). '</p>';
echo '<p>' .category(5). '</p>';

echo'<p> Exercice 15  </p>';
//Créer une fonction qui affiche la valeur la plus grande du tableau.
function displayGrand ($tab) {
    $max = $tab[0];
     for ( $i = 0 ; $i < count($tab) ; $i++ ) {
        if ($max < $tab[$i]) {
            $max = $tab[$i];//on met à jour $max pour qu'il prenne cette nouvelle valeur plus grande
        }
    }
    return $max;
}
echo displayGrand(([1,19,2,3,4]));

echo'<p> Exercice 16  </p>';
//Créer une fonction qui affiche la moyenne du tableau.
function moyenne ($tab) {
        $moyenne = 0; //on initialise
        for ($i=0 ; $i < count($tab) ; $i++) {
            $moyenne += $tab[$i];//on reincremente moyenne de tab et on l'asigne à moyenne
        }
        return $moyenne / count($tab);
}
echo moyenne([1, 2, 3]);

echo'<p> Exercice 17  </p>';
//Créer une fonction qui affiche la valeur la plus petite du tableau.
function displayPetit ($tab) {
    $min = $tab[0];
     for ( $i = 0 ; $i < count($tab) ; $i++ ) {
        if ($min > $tab[$i]) {
            $min = $tab[$i];//on met à jour $max pour qu'il prenne cette nouvelle valeur plus grande
        }
    }
    return $min;
}
echo displayPetit(([1,19,2,3,4]));

echo'<p> Exercice 18  </p>';
//Créer un script qui affiche les nombres de 1 -> 5 (méthode echo). Version FOR et version WHILE
echo'<p> Version FOR  </p>';
for ($i=1 ; $i<6 ; $i++) {
    echo '<p> '.$i. '</p>';
} 
echo'<p> Version WHILE  </p>';
$i=0;
while ($i<5) {
    $i++;
    echo '<p> '.$i. '</p>';
}

echo'<p> Exercice 19  </p>';
/*Ecrire une fonction qui prend un nombre en paramètre (variable $nbr), et qui ensuite affiche les dix nombres
suivants. Par exemple, si la valeur de nbr équivaut à : 17, la fonction affichera les nombres de 18 à 27 (méthode
echo). Version FOR et version WHILE */
echo'<p> Version FOR  </p>';
function suite ($nbr) {
    for ($i=1; $i<=10; $i++) {
        echo '<p>'.($nbr + $i).'</p>';
    }
}
suite(10);

echo'<p> Version WHILE  </p>';
function suiteBis ($nbr){
    $i = 0;
    while($i<=10) {
        $i++;
        echo '<p>'.($nbr+ $i).'</p>';
    }
}
suiteBis(20);






?>




