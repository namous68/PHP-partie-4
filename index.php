<?php

function retournerTrue() {
    return true;
    
}
echo '<br/>';
echo '<br/>';

function retournerChaine($chaine) {
    return $chaine;
}

$resultat = retournerChaine("Bonjour !");
echo $resultat; 

echo '<br/>';
echo '<br/>';

function concaténation($chaine1,  $chaine2){
    return $chaine1 . $chaine2;
}

$resultat = concaténation("bonjour",  "ahmed");
echo $resultat;

echo '<br/>';
echo '<br/>';
//ex 04
function comparaison($num1, $num2){
    if ($num1 > $num2){
        return "Le premier nombre est plus grand";
    }elseif ($num1 < $num2){
        return "Le premier nombre est plus petit";
    }else
      return "Les deux nombres sont identiques";
}
$resultat =comparaison(5, 8);
echo $resultat;

echo '<br/>';
echo '<br/>';
//ex05
function concat($nombre, $chaine){
  return $nombre . $chaine;
}
$resultat = concat(40, ' ans');
echo $resultat;

echo '<br/>';
echo '<br/>';

//ex06

function message($nom, $prenom, $age){
    $message = "Bonjour " . $nom . " " . $prenom . ", tu as " . $age . " ans.";
    return $message;
}
$resultat = message("namou", "ahmed", "42");
echo $resultat;

echo '<br/>';
echo '<br/>';
//ex07
function ident($age, $genre){
    if ($genre == "Homme") {
        if ($age >= 18) {
            return "Vous êtes un homme et vous êtes majeur";
        } else {
            return "Vous êtes un homme et vous êtes mineur";
        }
    } elseif ($genre == "Femme") {
        if ($age >= 18) {
            return "Vous êtes une femme et vous êtes majeure";
        } else {
            return "Vous êtes une femme et vous êtes mineure";
        }
    } else {
        return "Genre non reconnu";
    }
}

$resultat = ident(12, "Homme");
echo $resultat;

echo '<br/>';
echo '<br/>';
//ex08







?>