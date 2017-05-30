
   <?php

   if(empty($_POST["nom"])){
       echo "<p>Fiche non renseignee</p>";
   } else {
       echo "<h1>" . $_POST["nom"] ." ". $_POST["prenom"]. "</h1>";
echo "<p>j\'ai";
echo $_POST["age"];
echo "age et je vie en region";
echo $_POST["region"];
echo ", j\'aime les";
echo $_POST["preference"];

   }

?>