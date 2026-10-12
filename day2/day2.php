<?php
declare(strict_types = 1);
// عملگر های مقایسه ای

// == , != , === , !== , > , >= , < , <= , <=>

// $x = 1;
// $y = 2;
// var_dump($x == $y); //مساوی
// var_dump($x != $y); //نامساوی
// var_dump($x === $y);  // علاوه بر مقادیر تایپ داده رو هم چک میکنه
// var_dump($x !== $y);  

// var_dump($x <= $y); // کوچکتر مساوی
// var_dump($x >= $y); // بزرگتر مساوی


// var_dump($x <=> $y);  //اسپیس شیپ =>اگر دو مقدار  مساوی باشن خروجی صفر
// اگر سمت چپی بزرگتر باشه  خروجی عدد 1 
// اگر سمت راستی بزرگتر باشه خروجی -1



// --------------------------------------------------------

// عملگر های منطقی

// && , and 
//  بین دو مقدار مقایسه انجام میده ... اگر یکیشون غلط باشه ..جواب آخر غلط خواهد بود

// || , or 
// بین دو مقدار اگر یکیشون درست باشه جواب نهایی درست خواهد بود

// ^ , xor
// مثل or

// !

// $x = false;
// $y = false;

// var_dump($x && $y); 
// var_dump($x || $y);
// var_dump($x ^ $y);
// var_dump(!$x);

// --------------------------------------------------------

// شرط ها 

// $age =10;
// if ( $age >=18) {
//     echo "you can vote";
// } else {
//     echo "you can't vote";
// }


// $x = 5;
// if ($x <3 ){
//     echo "if";
// } elseif($x == 4){
//     echo "elseif";
// } elseif($x == 5){
//     echo "x = 5";
// }
//  else {
//     echo"else";
// }




// falsy values
// false
// 0 (integer)
// 0.0 (float)
// "" (empty string)
// "0"
// null
// array() , [] (empty array)


// var_dump((bool) false);

// if ("0"){
//     echo"truthy value";
// } else {
//     echo "falsy value";
// }


// --------------------------------------------------------
// ternary


// $age =18;
// if ($age <20 ){
//     echo "young";
// }else {
//     echo "old";
// }

// $result = $age < 20 ? "young" : "old";
// echo $result;
// ? => if
// : => else

// $result = $age ?: "age not set";

// $result = $age ?? "age not set";



// --------------------------------------------------------


// switch

// $x = 5;
// switch($x){
//     case 1:
//         echo "x is 1";
//         break;
//     case 2:
//         echo "x is 2";
//         break;
//     case 3:
//         echo "x is 3";
//         break;
//     default:
//         echo "x is $x";
//         break;
// }


// --------------------------------------------------------


// match

// ساده شده switch

// === بررسی میکنه
// $x = 5;

// $match = match ($x) {
//      1 => "x is 1" ,
//      2 => "x is 2" ,
//      3 => "x is 3" ,
//      default => "(d)x is $x"
// };

// echo $match;


// $match = match ($x) {
//     1, 2, 3=> " (f)x is $x" ,
//     4 => "x is 4" ,
//     5 => "x is 5" ,
//     default => "(d)x is $x"
// };

// echo $match;


// --------------------------------------------------------
// حلقه for

// for($i = 1 ; $i <= 15 ; $i+=2) {
//     echo $i . "<br>";
// }


// حلقه تو در تو
// for($i = 1 ; $i <= 5 ; $i++) {
//     echo $i . "<br>";

//     for ($j = 0; $j<=3 ; $j++){
//         echo $i . '-' . $j . "<br>";
//     }
// }


// for($i = 1 ; $i <= 5 ; $i++) {
//     if ( $i == 3){
//         echo "breaking...";
//         break;
//     }
//     echo $i . "<br>";
// }



// for($i = 1 ; $i <= 5 ; $i++) {
//     if ( $i == 4){
//         echo "skiping..." . "<br>";
//         continue;
//     }
//     echo $i . "<br>";
// }


// ?>



<!-- // &lt;?php // for ( $i = 1 ; $i <= 5 ; $i++): ?&gt; -->
<!-- // <p> &lt;?= $i; ?&gt; </p> -->
<!-- // &lt;?php //endfor; ?&gt; -->


<?php

 // -------------------------------------------------------- 


// While 
// do-while


// $i =1;

// while ($i <= 5){
//     echo $i . "<br>";
//     $j =0;
//     while($j<=3){
//         echo $i . '-' . $j . "<br>";
        
//         $j++;
//     }

//     $i++;
// }



// $i =10;
// do {
//     echo $i . "<br>";
//     $i++;
// } while($i<=9);

// --------------------------------------------------------


// foreach


// $numbers = [1 , 5 , 8 , 10];

// echo count($numbers);


// for($i =0 ; $i< count($numbers);$i++){
//     echo $numbers[$i] . "<br>";
// }


// برای آرایه ها
// foreach($numbers as $item){
//     echo $item . "<br>";
// }


// foreach($numbers as $key => $item){
//     echo $key . "->" . $item . "<br>";
// }



// $numbers2 = ['a' => 1 ,'b' => 2 ,'c' => 8 ,'d' => 10 ];

// foreach ($numbers2 as $key => $item){
//     echo $key . '=>' . $item . "<br>";
// }


// --------------------------------------------------------
// Functions

// function sayHello($name , $age = null){
//     echo "hello $name - $age";

// }

// sayHello("ali" , 25);

// sayHello("liam");




// function add($x ,$y){
//     // echo $x + $y;
//     return $x + $y;
// }
// // بعد از ریترن دیگه کدی اجرا نمیشه

// echo add(4,4);

// $result = add(4,4);

// var_dump($result);



// --------------------------------------------------------

// Type Hinting


// function add(string|int $x , int $y)
// {
//     return $x + $y;
// }

// $result = add(5,6);
// echo $result;


//Splat

// function sum($x,$y, ...$numbers)
// {
//     // print_r($numbers);
//     $z=0;
//     foreach($numbers as $number){
//        $z+= $number;

//     }
//     return $x + $y + $z ;
// }

// echo sum(10,10,10,10);


// function sum($x,$y, ...$numbers)
// {
   
//     $z = array_sum($numbers);
//     return $x + $y + $z ;
// }

// echo sum(10,10,10,10);


// function sum2(...$numbers)
// {
//     return array_sum($numbers);
// }

// echo sum2(10,10,10,9);

