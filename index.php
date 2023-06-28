<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Exercice 1 -->
        <div>
            <?php
                function true() {
                    return true;
                }
                $resultat=true();
                echo $resultat;
            ?>
        </div>

    <!-- Exercice 2 -->
        <div>
            <?php
                function chaine($chaine) {
                    return $chaine;
                }
                $texte = "Exemple de texte";
                $resultat = chaine($texte);
                echo $resultat;
            ?>
        </div>

    <!-- Exercice 3 -->
        <div>
            <?php
                function concatenation($chaine1, $chaine2) {
                    return $chaine1.$chaine2;
                }
                $text1="Test ";
                $text2="de texte";
                $resultat=concatenation($text1, $text2);
                echo $resultat;
            ?>
        </div>

    <!-- Exercice 4 -->
        <div>
            <?php
                function comparaison($nbr1, $nbr2) {
                    if($nbr1 < $nbr2) {
                        return "Le premier nombre est plus petit";
                    } else if($nbr1 > $nbr2) {
                        return "Le premier nombre est plus grand";
                    } else {
                        return "Les deux nombres sont identiques";
                    }
                }
                $premier=20;
                $second=20;
                $resultat=comparaison($premier, $second);
                echo $resultat;
            ?>
        </div>

    <!-- Exercice 5 -->
        <div>
            <?php
                function concat($text, $nbr) {
                    return $text.$nbr;
                }
                $text="Si on aditionne nos bananes, on en a ";
                $nbr=12;
                $resultat=concat($text,$nbr);
                echo $resultat;
            ?>
        </div>

    <!-- Exercice 6 -->
        <div>
            <?php
                function presentation($nom, $prenom, $age) {
                    return "Bonjour ".$prenom." ".$nom.", tu as ".$age." ans";
                }
                $nom="Filou";
                $prenom="George";
                $age=64;
                $resultat=presentation($nom, $prenom, $age);
                echo $resultat;
            ?>
        </div>

    <!-- Exercice 7 -->
        <div>
            <?php
                function identity($age, $gender) {
                    if($age<18&&$gender==="homme") {
                        return "Vous êtes un homme et vous êtes mineur";
                    } else if($age>18&&$gender==="homme") {
                        return "Vous êtes un homme et vous êtes majeur";
                    } else if($age<18&&$gender==="femme") {
                        return "Vous êtes une femme et vous êtes mineure";
                    } else if($age>18&&$gender==="femme") {
                        return "Vous êtes une femme et vous êtes majeure";
                    }
                }
                $age=29;
                $gender="femme";
                $resultat=identity($age, $gender);
                echo $resultat;
            ?>
        </div>

    <!-- Exercice 8 -->
        <div>
            <?php
                function somme($nbr1, $nbr2, $nbr3) {
                    return $nbr1*$nbr2*$nbr3;
                }
                $nbr1=4;
                $nbr2=1;
                $nbr3=3;
                $resultat=somme($nbr1, $nbr2, $nbr3);
                echo $resultat;
            ?>
        </div>
</body>
</html>