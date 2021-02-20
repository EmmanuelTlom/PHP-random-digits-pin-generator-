<?php 

//function to generate pins
//the variable len is going to control how many digits one wants to generate 10,11,12 etc
function randomPins ($len) {
    //init pins variable
    $pins = '';

    //random digits
    $randNumsCol = "123456789";

    //function/method str_split splits strings like the randNumsCol so they become individual digits/array like [1], [2] etc
    $randNums = str_split($randNumsCol);

    //for loop; to loop through the splitted numbers
    for ($i = 0; $i < $len; $i++) {
        $genRandomItem = array_rand($randNums);
        $pins .= "".$randNums[$genRandomItem];
    }

    return $pins;

}

?>

<?php 
//$generatePins = randomPins(12);

//echo $generatePins;

//using for loops to generate at least 200 12 digits pins
for ($i = 0; $i < 200; $i++) {
    $generatePins = randomPins(12);
    echo $generatePins.'<br>'.'<br>';
}

?>