 <table class='table table-bordered table-striped '  >
        <?PHP         
           
            for ($i = 0; $i < count($tabData); $i++) {

             echo "<tr>";

            foreach ($tabData[$i] as $key => $value) {
               echo "<td>" . $value . "</td>";
            }

            echo"</tr>";
        }
      
        
            
         
            ?>

   </table>



