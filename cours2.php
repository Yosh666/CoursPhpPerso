<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test 2 la suite du retour !</title>
</head>
<body>
    <p>
        ici on attaque les fonctions! <br/>
            <?php
                $phrase= 'bonjour les gens j\' ai mal a ma dent c\'est l\'horreur';
                $longueur= strlen($phrase);
                echo 'la phrase comporte '.$longueur.' caractères : <br/>'.$phrase.'<br/>';
            ?>
            <?php
                $variable='bim bam boum';
                echo $variable.'<br/>';
                $variable= str_replace('b','p',$variable);
                echo $variable.'<br/>';
            ?>
            <?php
                $variable= str_shuffle ($variable);
                echo $variable.'<br/>';
            ?>
            <?php
                $variable= 'j\'ai mal aux dents!';
                $variable= strtoupper($variable);
                echo($variable).'<br/>';
            ?>
    </p>
    <p>
        on va parler heure et date: <br/>
            <?php
                $annee= date('Y');
                $mois= date('m');
                $jour= date('j');
                $heure= date('H');
                $minute= date('i');
                echo 'on est le: '.$jour. ' '.$mois.' '.$annee. ' et il est: '.$heure. 'h '.$minute. 'minutes...<br/>';
            ?>
        Allez on passe enfin a la création de fonction <br/>
            <?php
                function Direbonjour($nom){
                    echo 'Bonjour '.$nom. '<br/>';
                }
                Direbonjour ('marie');
                $nom='Valentin';
                Direbonjour ($nom);
                $nom= array('Marie','Samuel','Jean','Eureka');
                Direbonjour($nom[2]);//Joindre tableaux et fonctions ^^ et ça je l'ai fait toute seule comme une grande!
                    foreach ($nom as $element){
                        Direbonjour ($element);
                    }
            ?>
        Calcul du volume d'un cône: <br/>
        La formule de base est :rayon² x hauteur x pi x 1/3. <br/>
            <?php
                function Calculducone ($rayon, $hauteur){
                    $volume= $rayon*$rayon*$hauteur*3.14*(1/3); //calcul du volume
                    return $volume;// enregistre le résultat sinon l'écho en dehors de la fonction ne marchera pas
                }
            ?>
            <?php
                $volume= Calculducone (3, 1);
                echo ' il a un volume de: '.$volume. '<br/>';
                /* si on veut ecrire le $volume et le $rayon en concaténation il faut faire return $rayon et return $hauteur
                sinon la fonction ne conserve pas les variables et ça affiche un message d'erreur*/
            ?>
    </p>
                

</body>
</html>