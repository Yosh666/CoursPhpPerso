<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <meta charset="utf-8" />
    </head>
    <body>
    <!--
           <h2>Page de test</h2>
        
        <p>
            Cette page contient du code HTML avec des balises PHP.<br />
            <?php 
            echo "ceci est du texte en php et Castle of Glass ça tabasse ^^"
            ?>
            Voici quelques petits tests :
        </p>
        
        <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>
        
        <?php
        /* Encore du PHP
        Toujours du PHP */
        echo "ceci est  \"uniquement\" (merci antéslash) du <strong>texte</strong>";
        ?>
        <p>
        On va commencer a faire quelques petites choses en php :<br>
        Aujourd'hui nous sommes le: (la suite en php) <br>
        <?php echo date('d/m/Y h:i:s'); ?>
        <br> fin du php
        </p>
     fin des premiers exo donc mise en commentaire--> 
        <?php
            $age_du_visiteur= 17;
            $nom_du_visiteur= "Mateo Colibri";
            $poids= 78.5;
            $je_suis_un_boulet= true;
            $je_vais_pas_y_arriver= false;
            $pas_de_valeur= NULL;
            
                echo "le visiteur a $age_du_visiteur ans";
        ?>
        <br> <!-- on ne peut pas mettre de balises html dans du php?-->
        <?php
                
                echo 'on va plutôt utiliser la concaténation pour ' .$nom_du_visiteur. ' ça sera plus simple il faut juste penser à mettre des points et des quotes au lieu de double quote';
            /*pensez aux espaces avant la fin et le début des quotes*/

        ?> 
        <p> Maintenant on va faire un peu de math!<br>
        <?php
            $nombre= 16;
            $resultat= $nombre+6;
            echo $resultat;
        ?>
        </p>
        <p>on passe au comparatif et conditions <br>
        <?php
            /* alors ne pas oublier c == pr égal et != pour différent
            >= a mettre dans le bon sens*/
            if ($poids <= 80){
                echo 'Bravo '.$nom_du_visiteur. ' vous avez fait du sport c\'est cool';
            }
            else{
                echo 'cacahuètes';
            }
        ?> 
        <br> 
        <p> là je tape du booléen en version courte donc à voir dans le code quoi<br>
        <?php
            $cagnotte= true; 
            if (!$cagnotte){ /*le fait d'avoir mis ! devant fait que je cherche le faux sinon j'aurais juste écrit la variable pr = true*/
                echo 'ici je cherche une réponse fausse '.$nom_du_visiteur. ' n\'a pas assez d\'argent!';
            }
            elseif ($cagnotte){/* donc la on cherche la valeur true*/
                echo 'azy c\'est bon tu es riche pour '.$age_du_visiteur.' ans';
            }
            else{
                echo 'Combien tu as d\'argent exactement?';
            }
        /*pensez aussi aux symboles :
        && pour and
        || pour or (altgr6)*/
        ?>
        <br> 
        Maintenaznt on va tenter le switch qui ne marche qu'en cas c'égalité!
        <?php
            $note=12;
            switch ($note){
                case 0:
                    echo 'Recommence tu t\'es foiré sauvagement';
                break;

                case 5 :
                    echo 'bof';
                break;
                case 12: //uniquement l'égalité pratique mais pas ouf du coup
                    echo 'ok';
                break;/*le break permet de sortir des cas sinon il va tous les essayer et ça va boucler*/
                default:
                    echo 'ceci est le cas par défaut et dans la non égalité quand il trouve pas la donnée';

            }
        ?>
        </p>
        <p>
            ok on passe au boucle temporelle c'est pas mal aussi <br>
        <?php
            $nombre_de_ligne = 1;
            while ($nombre_de_ligne<=5){
                echo 'ceci est la ligne numéro:'.$nombre_de_ligne.'<br/>';// j'ai trouvé comment passer à la ligne!!
                $nombre_de_ligne++;//incrémentation pr ajouter un a la variable
            }
        ?> 
            on passe au for: <br>
        <?php
            for ($nombre_de_ligne=1;$nombre_de_ligne<= 5; $nombre_de_ligne++){
                echo 'ceci est la ligne numéro '.$nombre_de_ligne. '<br/>';
            }
        ?>
        </p>
        <p>
            alors on passe aux tableaux ça va être un peu bourratif hein <br/>
        <?php
            $prenom= array('François','Michaël','Denise','Jeanne','John','Brigitte');//1ère façon de rentrer des données
        ?>
        <?php
            $prenom[0]='Françoise';
            $prenom[1]='Micheline'; //deuxiéme façon si on ne met pas de chiffre ça se mets dans l'ordre d'entrée;
                $lenght= count ($prenom);
                for($i=0; $i<$lenght;$i++ ){
                    echo $prenom[$i] .'<br/>';
                }
                foreach($prenom as $element){// façon de mettre chak ligne du tableau dans une variable de manière temporaire
                    echo $element.'<br/>';
                }
                
        ?>
            Ca c'était les tableaux numérotés simple maintenant on passe au tableaux associatifs <br/>
        <?php
            $coordonnees= array(
                'nom'=> 'Boulet',
                'prenom'=>'Michel',
                'ville'=>'Marseille',
                'age'=>'32',
            );
            $coordonnees ['nom']= 'Michu';//deuxiéme façon de rentrer des données
                echo $coordonnees ['ville'].'<br/>';

            foreach($coordonnees as $element){
                echo $element.'<br/>';
            }
        ?>
            on peut aussi faire <br/>
        <?php
            foreach($coordonnees as $cle=>$element){
                echo $cle .' : '.$element.'<br/>';
            }
        ?>
            ok on s'arréte là pour la première partie. on ira sur la page test2 pour la suite!
        </p>

    </body>
</html>