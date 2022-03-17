<?php
    $array = array();
    for ($x = 1; $x <= 20; $x++)
    {
        $ch = curl_init('https://rosreestr.gov.ru/api/online/fir_objects/2:56:30302:'.$x);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        array_push($array, curl_exec($ch));
        curl_close($ch);
    }
    print_r($array);
?>