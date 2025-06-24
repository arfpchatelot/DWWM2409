 
 <fieldset  class="connect" ><legend>connection espace membre Festival</legend> 
 <form method="POST" action="index.php"  >
   <div class="rows"> <label for="login">e-mail</label>
    <input type="email" name="login"    id="login"  placeholder="nom@mail.com" required></div>
    <div class="rows">
    <label for="mdp">Mot de passe</label>
 <input type="password" name="mdp" id="mdp" required></div>

    <input type="submit" value="Je me connecte" id="log">
 </form>  

 <?php 
 
echo $message;

 ?>
 
 </fieldset>


<?




