<?php
// NARCISSISTIC NUMBER


function narcissistic($number){
    $array   = str_split($number);
    $lenght = count($array);
    $sum = 0;

    for($i=0;$i<$lenght;$i++){
        $sum += pow($array[$i],$lenght);
    }
    if($sum == $number){
        echo "True";
    }else{
        echo "False";
    }
}
narcissistic(153);
echo '<br>';
narcissistic(111);


// PARITY OUTLIER
function parityOutlier($number){
	$array_number = explode(',',$number);
    $odd_number = array();
    $even_number = array();
    //print_r($array_number);
    //die();
    foreach($array_number as $value){
    	$odd = $value % 2;
        if($odd == 0){
        	$even_number[] =  $value;
        }else{
        	$odd_number[] =  $value;
        }
    }
    
    if(count($even_number) == 1){
    	foreach($even_number as $value){
        	echo $value;
        }
    }else if(count($odd_number) == 1){
    	foreach($odd_number as $value){
              echo $value;
          }
    }else{
    	echo "False";
    }
    
}

parityOutlier('2,4,0,100,4,11,26,02,36');
echo '<br>';
parityOutlier('160, 3, 1719, 19, 11, 13, -21');
echo '<br>';
parityOutlier('11,13,15,19,9,13,-21');


//NEEDLE IN THE HAYSTACK
function findNeedle($array, $quest){
    $i = 0;
    foreach ($array as $value) {
        if ($value == $quest) return $i;
        $i++;
    }
}
echo findNeedle(['red', 'blue', 'yellow', 'black', 'grey'], 'blue');


// THE BLUE OCEAN REVERSE
// function blueOcean(array $data1, array $data2){
	
//     foreach ($data2 as $value) {
//         // if (($key = array_search($del_val, $messages)) !== false) {
//         // unset($messages[$key]);
//         // }
//         unset($data1[$value]);
//     }  
//     print_r($data1);
  
//   }
  
//   blueOcean([1, 2, 3, 4, 6, 10], [1]);

// Belum selesai, waktu tidak cukup, terimakasih



?> 
