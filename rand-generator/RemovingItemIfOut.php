<?php

require "../Database.php";

$items = array(
    array("id" => "1","rarity"=>50),
    array("id" => "2","rarity"=>60),
    array("id" => "3","rarity"=>50),
    array("id" => "4","rarity"=>60),
    array("id" => "5","rarity"=>50),
    array("id" => "6","rarity"=>60),
    array("id" => "7","rarity"=>50),
    array("id" => "8","rarity"=>20),
);
//arvuta kokku kõikide rarity summa
$total_rarity = array_reduce($items, function($carry,$item){
    return $carry + $item['rarity'];
});

//genereeri suvaline number 1st rarity lõppsummani
$spin_result = rand(1,$total_rarity);

//määra auhind genereeritud numbri põhjal
$current_rarity = 0;
foreach ($items as $item){
    $current_rarity += $item['rarity'];
    if ($spin_result <= $current_rarity){
        $won_item = $item;
        break;
    }
}

//prindi l]pptulemus mille mängija sai
echo "Õnnitlused oled võitnud ". $won_item['id']. "!";



