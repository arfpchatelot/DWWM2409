<?php

function controleurInscription():void
{
       $objTableDept = new DepartementRepository();

            $tableData = $objTableDept->searchAll();

            require "./views/inscription.php";

}