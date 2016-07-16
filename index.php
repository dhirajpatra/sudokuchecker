<?php
// main array to test with
$problemArr = array(array(4,7, 8, 5, 9, 1, 2, 6, 3),
  array(1, 3, 9, 2, 6, 7, 8, 4, 5),
  array(6, 5, 2, 3, 8, 4, 9, 1, 7),
 array(3, 2, 6, 4, 7, 8, 5, 9, 1),
  array(0, 8, 4, 1, 3, 9, 7, 2, 6),
  array(7, 9, 1, 6, 5, 2, 3, 8, 4),
  array(2, 6, 3, 9, 1, 5, 4, 7, 8),
  array(8, 4, 5, 7, 2, 6, 1, 3, 9),
  array(9, 1, 7, 8, 4, 3, 6, 5, 2));

/**
* process and check the array whether it is correct sudoku or not
*/
function checkSudoku($problem)
{  
    $flag = 0;
    $col = array();
    //echo '<pre>'; print_r($problem); //exit;
    // row wise check
    for($i = 0; $i < count($problem[0]); $i++){

        $result = array();

        //echo '<hr>';
        for($j=0;$j< count($problem[0]); $j++){ 
            //echo $problem[$i][$j].'<br>';
            $col[$j][$i] = $problem[$i][$j]; 

            if(in_array($problem[$i][$j], $result)){
                echo 'Fail row wise at value  '.$problem[$i][$j].'  row '.($i+1).' col '.($j+1);            
               $flag = 1; 
                exit;
            }else{
                $result[] = $problem[$i][$j];
            }
        }

    }
    //echo '<pre>'; print_r($col);
    // col wise check
    for($i = 0; $i < count($col[0]); $i++){

        $result = array();

        //echo '<hr>';
        for($j=0;$j< count($col[0]); $j++){ 

            if(in_array($col[$i][$j], $result)){
                //echo '<br>'; print_r($result);
                echo 'Fail col wise at value  '.$col[$i][$j].'  col '.($i+1).' row '.($j+1);
               $flag = 1; 
                continue;
            }else{
                $result[] = $col[$i][$j];
            }
        }    
    }

    if($flag == 0){
        echo 'Both row wise and col wise Pass';
    }
}

// calling function
checkSudoku($problemArr);
