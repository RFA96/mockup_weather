<?php
/**
 * Created by PhpStorm.
 * User: raka_matsukaze
 * Date: 3/20/18
 * Time: 14:00 PM
 */
    include "koneksi.php";

    $date_now = date("Y-m-d");
    $qT = mysql_query("SELECT temperature, jam FROM weather WHERE tanggal = '$date_now'");
    $tServer = array(); $tTime =  array();
    while($resultTemperature = mysql_fetch_array($qT))
    {
        $tServer[] = $resultTemperature['temperature'];
        $tTime[] = $resultTemperature['jam'];
    }

    print json_encode($tServer, JSON_NUMERIC_CHECK);