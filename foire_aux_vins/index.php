<?php session_start();

require "./dao/Dbconnect.php";
require  "./dao/CandidatRepository.php";
require "./dao/DepartementRepository.php";
require "./controllers/ctrlAccueil.php";
require "./controllers/ctrlInscription.php";


$message = "";
$monCandidat = new CandidatRepository();

// if (isset($_POST["login"])  && isset($_POST["mdp"])) {
//     $tabresult = $monCandidat->signIn($_POST["login"], $_POST["mdp"]);
//     var_dump($tabresult);


//     if (count($tabresult) == 0) {
//         $message = "erreur identifiant ou mot de passe incorrect";
//     } else {


//         $_SESSION["nom"] = $tabresult["nom"];

//         $_SESSION["prenom"] = $tabresult["prenom"];
//         // $_SESSION["email"] = $tabresult["mail_user"];

//         $_SESSION['age'] = $tabresult["age"];



//         header('Location: ./membre.php');
//     }
// }



?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accueil concours Festival foire au vins</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav>
            menu
        </nav>
    </header>

    <main>

        <section id="theme">

            <?php



            //  echo  "test: ".$monCandidat->CreateCandidat("Blake","François", "blake@gmail.com","test", 25,50 );

            //  echo $monCandidat->updateCandidat("Mortimer", "Philip", "mortimer@gmail.com",39,55,5)."<br/>";




            ?>
            <?php


            if (isset($_GET['page'])) {


                $page = htmlspecialchars($_GET["page"]);
                switch ($page) {
                    case 'accueil':

                        controleurAccueil();
                        break;

                    case 'inscription':

                        controleurInscription();

                        break;
                    default:
                        controleurAccueil();

                        break;
                }
            } else {
                controleurAccueil();
            }















            // $tabData = $monCandidat->searchAll();
            //   var_dump($tabData);
            ?>














            <article id="sous-theme">
                <?php


                //include "./views/inscription.php";

                ?>


            </article>


            <article>

            </article>
            <aside>
                <?php

                include "./views/login.php ";

                ?>
            </aside>
        </section>


    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>

</body>

</html>