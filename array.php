<?php
//index array
//$cars=array("tata","bmw","toyota","nano");
//echo "i like ". $cars[0].",".$cars[1].",".$cars[2].",".$cars[3].""
//associative array
//$age = array("Peter"=>"35","ben"=>"30","joe"=>"43");
//echo "Peter is " .$age ['Peter']." years old.";
//multi-dimensional array
$cars=array(
    array("manju",21,"worker"),
    array("raju",25,"operator"),
    array("ranju",25,"teacher")
);
for ($i=0;$i<3;$i++) {
    for($j=0;$j<3;$j++) {
        echo $cars[$i][$j]." ";
    }
    echo "<br>";
}

?>
