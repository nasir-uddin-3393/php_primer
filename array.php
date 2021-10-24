<?php
    $title = "Arrays";
    include 'includes/header.php'
?>
    <h1>Arrays</h1>
    <?php
       $num = 3;
       $numbers = array(1,2,3,4,5,6,7,8,9,11,23,34,56,67,87,998,23,3,45,66,7);
       echo $numbers[5];
       echo "<p>$numbers[9]</p>";
       $size = count($numbers);
       echo "<p>Array Size is: $size</p>";
       
       for($count = 0; $count < $size; $count++){
           echo"<p>$numbers[$count]</p>";
       }
    ?>
<?php
require 'includes/footer.php'
?>