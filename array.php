<?php
// $num1 = [1,2,3,4,5,6];
//  $num1[1] = 3;
// unset($num1[2]);


// $colors = array('red','black', 'blue', 'yellow');
// print_r ($colors );
// echo $colors[2] . "\n";
// $colors[1] = 'white';
// print_r ($colors );
// var_dump($colors);
// echo "\n";
// foreach ($colors as $x){
//     echo "\n $x". "\n";
// }

// echo $colors[1] . "\n";
// echo $colors[0] . "\n";
// echo $colors[3] . "\n";

// array_push($colors, "pink");
// print_r($colors);
// var_dump ($colors);

// $phone = array('brand' => 'vivo', 'model' => 'yc9' , 'price' => 234);
// print_r($phone);
// var_dump($phone);
// echo $phone['brand'];
// $phone ["price"] = 4234 ;
// var_dump ($phone);
// foreach ($phone as $q => $w){
//     echo "$q : $w";
// }


$userRequest = ['username','password'];
$token = ['token'];
$marge = array_merge($userRequest,$token);
// print_r($marge);
$numbers = [1,2,3,4,5,6,7,8,9];
$numbersPlusTwo = array_map(function ($n){
    return $n + 2;
},$numbers);
print_r ($numbersPlusTwo);