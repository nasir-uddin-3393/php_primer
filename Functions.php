<?php
    $title = "Functions";
    include 'includes/header.php'
?>
    <h1>Functions</h1>
    <?php
      function writemessage(){
          echo"You are really a nice person, Have a nice time! <br/>";
      }
      writemessage();
      echo"<hr/>";
      writemessage();

      function addfunction($num1,$num2){
         $sum = $num1+$num2;
         echo"The sum of $num1 and $num2 is: $sum<br/>";
      }
      function changenum(&$num){
          $num = $num + 10;
      }
      $num = 500;
      addfunction(10,20);
      addfunction(10,$num);
      addfunction("10","50");

      changenum($num);
      echo $num."<br/>";
    ?>
<?php
require 'includes/footer.php'
?>