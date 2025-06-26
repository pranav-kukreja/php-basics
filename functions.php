<!-- pass by refernce to function -->

<?php
$x=100;
function f(&$x){
    echo "$x &nbsp";
    $x++;
}
f($x);
f($x);
f($x);
?>

