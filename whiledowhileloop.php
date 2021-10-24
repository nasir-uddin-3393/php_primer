<?php
    $title = "While";
    include 'includes/header.php'
?>
    <h1> While Loop </h1>
    <?php
     $grade = 0;
     while($grade<10){
         echo"<p>I am Less than 10!</p>";
         $grade++;
     }
     echo"EXIT_LOOP";
    ?>

    <h1>DO-While Loop</h1>
    <?php
      $grade = 0;
      do{
          echo"<p>I am DO While LOOP</P>";
          $grade++;
      }while($grade<10);
      echo"EXIT_LOOP"; 
    ?>
<?php
require 'includes/footer.php'
?>