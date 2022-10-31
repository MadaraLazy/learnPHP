<?php //For functions:

function toUpperCaseOfTheFirstLetter($name){
    /**
     * 
     * a b d a l l a h
     * 
     * 0 1 2 3 4 5 6 7
     * 
     */
    
    //to connect 2 String we use '.'
    return strtoupper(substr($name , 0,1))
    .strtolower(substr($name , 1,strlen($name)));

}

function echoLine($theText){
    echo $theText."<br>";
    // return $theText."<br>";
}




?>

<?php //For variables:


$name = "abdallah";






$name = toUpperCaseOfTheFirstLetter("abdallah");
$age = 15;
$educationalLvl = toUpperCaseOfTheFirstLetter("secondary");

$ProgrammingLanguagesULearned = array("css","js","java","gdscript","uhhhh html?");

?>

<?php //For echo time:

echoLine("My name is $name, Im $age years old , My school stage is $educationalLvl, and... yeah.....");

echoLine("I have 19 $ dollar");// Hmmm for test something...


echo("My programming experience is:");
for($i = 0 ; $i < count($ProgrammingLanguagesULearned);$i++){
    echoLine("* ".$ProgrammingLanguagesULearned[i]);
}
?>