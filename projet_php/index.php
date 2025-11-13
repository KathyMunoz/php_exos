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
function test(float) {

}
//la fonction doit renvoyer l’arrondi (return) du nombre en entrée.

?>




