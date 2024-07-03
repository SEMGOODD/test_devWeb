<?php
function toto($phrase){
    $phrase = strtolower($phrase);
    $phrase[0] = strtoupper($phrase[0]);
    for ($i=1; $i<strlen($phrase); $i++){
        if ($phrase[$i] == ' ' && $i+1< strlen($phrase)){
            $phrase[$i+1] = strtoupper($phrase[$i+1]);
            }
    }
    echo $phrase;
}
toto("wELCome mUssAB ZneIKA.");
?>