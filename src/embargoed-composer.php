<?php

namespace embargoedComposer;

require '../vendor/autoload.php';

use MaxMind\Db\Reader;

class EmbargoedComposer {
    function __construct() {

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        $databaseFile = 'Geoacumen-Country.mmdb';

        $reader = new Reader($databaseFile);

        $country = $reader->get($ip)["country"]["iso_code"];

        $reader->close();


        if ($country == "RU"){
            echo file_get_contents('maintenance.html');
            exit();
        }
    }
 }