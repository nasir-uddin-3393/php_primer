<?php
    $title = "StringManipulation";
    include 'includes/header.php'
?>
    <h1>PHP String Manipulation</h1>
    <?php
       //Concatenation of strings
       $phrase1 = "student who came late";
       $phrase2 = "in class, stand with Rock.";
       $name = "Nasir Uddin";
       echo $phrase1 . " named Tiffny, " . $phrase2;
       echo "<br/>";
       echo "<hr/>";
       //String Transformation
       echo "Uppercase First Letter: ".ucfirst($name)."<br/>";
       echo "Uppercase First letter of each word: ".ucwords($name)."<br/>";
       echo "Uppercase : ".strtoupper($name)."<br/>";
       echo "Lowercase : ".strtolower("$name")."<br/>";
       echo "<hr/>";
       echo "Repeat string : ".str_repeat("a",20)."<br/>";
       echo "Repeat string - Nested function: ".strtoupper(str_repeat("a",20))."<br/>";
       echo "Get a substring: ".substr($name,3,5)."<br/>";
       echo "Get position of string: ".strpos($name,'U')."<br/>";
       //Returns the position of 'U' in variable name.

       echo 'Find Character "a": '.strchr($name,'a').'<br/>';
       echo 'Find Character "R": '.strchr($name,'R').'<br/>';
       echo 'Find Character "U": '.strchr($name,'U').'<br/>';
       echo 'Find Character "n": '.strchr($name,'n').'<br/>';

       echo 'Find length of string: '.strlen($name)."<br/>";

       echo "Without Trim: "."A"." B C D "."E"."<br/>";
       echo "Trim spaces in both sides: "."A".trim(" B C D ")."E"."<br/>";
       echo "Trim spaces to the left: "."A".ltrim(" B C D ")."E"."<br/>"; 
       echo "Trim spaces to the right: "."A".rtrim(" B C D ")."E"."<br/>"; 
    ?>
<?php
require 'includes/footer.php'
?>