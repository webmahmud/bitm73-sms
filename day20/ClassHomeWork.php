<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 1/4/2018
 * Time: 10:30 AM
 */
namespace App\classes;
class ClassHomeWork
{
public function oddEven($data){
    $staringNumber = $data['starting_number'];

    $endingNumber = $data ['ending_number'];
    $choose = $data ['choose'];

//    foreach (range($staringNumber, $endingNumber) as $number) {
//
//        if (0 === $number % 2) {
//          echo $number . 'Even Number <br/>';
//            continue;
//        }elseif (0 !== $number % 2){
//
//            echo $number . 'Odd Number <br/>';
//            continue;
//        }
//
//
//    }

    $res='';
    for ($i=$staringNumber; $i<=$endingNumber; $i++){
        if ($choose == 'Odd') {

            if ($i %2 == 0){

               $res.=$i;
            }
        }elseif ($choose=='Even'){
        if ($i %2 != 0){

            $res.=$i;
            }

        }

    }
    return $res;


}
}