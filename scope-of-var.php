<?php

$singer = "dosanjh";
function sing(){
    global $singer;
    echo "call $singer boy <br/>";
}
sing();
echo "call $singer";
?>