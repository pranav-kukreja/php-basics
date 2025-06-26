<?php
function counter(){
    static $x=0;
    $x++;
    echo "$x <br>";
}
counter();
counter();
counter();
?>