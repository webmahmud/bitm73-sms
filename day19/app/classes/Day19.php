<?php

namespace App\classes;
class Day19
{
    public function makeSeriesNumber($data){
        $startingNumber = $data['starting_number'];
        $endingNumber = $data['ending_number'];

        $res='';
        for($i=$startingNumber; $i<=$endingNumber; $i++){
            $res .= $i." ";
        }
        return $res;

    }
}

