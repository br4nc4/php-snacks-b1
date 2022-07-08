<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php 
$randomNumbers = rand(5, 50);
$arrayNumbers = [];
$times = 15;

while($times-- > 0) 
{
    while(in_array($randomNumbers, $arrayNumbers))$randomNumbers = rand(5, 50);
    $arrayNumbers[] = $randomNumbers;
    var_dump ($arrayNumbers);
}
?>