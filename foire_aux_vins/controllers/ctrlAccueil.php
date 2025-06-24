<?php

//require_once "../dao/CandidatRepository.php";


 function controleurAccueil():void
 {
 $monobjCandidatRepository= new CandidatRepository();
    $tabData= $monobjCandidatRepository->searchAll();

    require "./views/accueil.php";

  } 