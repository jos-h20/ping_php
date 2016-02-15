<?php
class PingPongGenerator
{
    function generatePingPongArray($input_number)
    {
        $pingPongArray = array();
        for ($x = 1; $x <= $input_number; $x++) {
            if ($x % 15 == 0) {
                array_push($pingPongArray, "ping pong");
            } elseif ($x % 5 == 0) {
                array_push($pingPongArray, "pong");
            } elseif ($x % 3 == 0) {
                array_push($pingPongArray, "ping");
            } else {
                array_push($pingPongArray, $x);
            }
        }
        return $pingPongArray;
    }



}

 ?>
