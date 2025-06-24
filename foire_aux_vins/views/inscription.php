<fieldset>
    <legend>Inscription</legend>


    <form method="POST" action="<?=$_SERVER['PHP_SELF']."?page=".$_GET["page"] ;?>">
        <div class="rows"> <label for="firstname">Nom: </label>
            <input type="text" name="firstname" size="50" id="firstname" placeholder="votre nom" required>
        </div>


        <div class="rows"> <label for="lastname">Prenom: </label>
            <input type="text" name="firstname" size="50" id="firstname" placeholder="votre prénom" required>
        </div>


        <div class="rows"> <label for="mail">email: </label>
            <input type="email" name="mail" id="mail" required>
        </div>


        <!-- <div class="rows"> <label for="url">url site: </label>
                    <input type="url" name="url" id="url" required>
                </div>
    <div class="rows">
        <div class="rows"> <label for="color"> couleur</label>
                    <input type="color" name="test" id="test" value="#ff0000" required>
                </div>

  <div class="rows"> <label for="echelle">Durée de rmboursement: </label>
                    <input type="range" min="1" max="25" value="1" id="echelle" required>
                    
                </div>
     <div class="rows"> <label for="tel">Telephone: </label>
                    <input type="tel" id="tel" name="tel"  required > 
                </div>

               <div class="rows"> 
                <label for="inscription">Date d'inscription: </label>
              <input type="date" name="inscription" id="inscription"  required >
                </div>   -->

        <div class="rows">
            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" id="mdp" required>
        </div>

        </div>
        <div class="rows">
            <label for="confirm">Confirmation du Mot de passe</label>
            <input type="password" name="confirm" id="confirm" required>
        </div>




        <select name="dept" id="dept">

            <option value="" selected> Choisissez votre departement</option>

            <?php
          

            for ($i = 0; $i < count($tableData); $i++) {

                echo "<option value='" . $tableData[$i]["id_dep"] . "' >" . $tableData[$i]["name_dep"] . "</option>";
            }

            ?>

        </select>

        <div class="rows">
            <label for="age">age</label>
            <input type="number" min="18" max="110" step="1" id="age" name="age" required>
        </div>
        </div>

        <div class="rows">
            <input type="submit" value="inscription" id="inscription">
        </div>
    </form>





</fieldset>