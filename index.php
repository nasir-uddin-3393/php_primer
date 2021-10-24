
<?php
    $title = "Index";
    include 'includes/header.php'
?>

    <!-- HTML comment -->
    <h1>Hello World - PHP Primer</h1>
    <br/>
    <?php 
    echo 'Hello PHP!';
    echo '<br/>';
    echo 'This is the second line.';
    echo '<br/>';
    // php comment
    /* php comment*/
    ?>

    <?php 
       $name = 'Nasir Uddin';
       $age = 21;
       echo $name;
       echo '<h1>My Name Is: '.$name.'</h1>';
       echo '<h1>My Age Is: '.$age.'</h1>';
    ?>
<?php
require 'includes/footer.php'
?>