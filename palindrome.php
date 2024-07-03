<?php
//Method 1
/*
function palindrome($phrase){
    $phrase = str_replace(' ', '', $phrase);
    $phrase = strtolower($phrase); 
    $reversed = strrev($phrase);
    if ($phrase == $reversed){
        return true;
        } else {
            return false;
            }
}
*/
// Method 2
function palindrome($phrase){
    $phrase = str_replace(" ","",$phrase);
    $phrase = strtolower($phrase);
    for ($i=0; $i<strlen($phrase)/2; $i++){
        if ($phrase[$i] != $phrase[strlen($phrase)-$i-1]){
            return false;
        }
    } 
    return true; 
}
if (palindrome('Radar')){
    echo "Radar is a palindrome!";
} else {
    echo "Radar is not a palindrome";
}
;

?>