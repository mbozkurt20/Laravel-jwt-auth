<?php

namespace Map;

function distance($lat1, $lat2, $long1, $long2){

    $apikey = 'AIzaSyBGueqy4-beAkRGbDHMigSA_CxxrDLm76s';
    $url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=".$lat1.",".$long1."&destinations=".$lat2.",".$long2."&mode=driving&language=pl-PL&key=".$apikey;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $response = curl_exec($ch);
    curl_close($ch);

    $response_a = json_decode($response, true);
    $dist = $response_a['rows'][0]['elements'][0]['distance']['value'];
    $distInfo = $response_a['rows'][0]['elements'][0]['distance']['text'];
    $time = $response_a['rows'][0]['elements'][0]['duration']['value'];
    $timeInfo = $response_a['rows'][0]['elements'][0]['duration']['text'];
    $origin = $response_a['origin_addresses'][0]; // başlangıç Noktası
    $destination = $response_a['destination_addresses'][0]; // varış Noktası

    return ['distance' => $dist, 'time' => $time,'distanceInfo' => $distInfo,'timeInfo' => $timeInfo,'origin' => $origin, 'destination' => $destination ];
}
