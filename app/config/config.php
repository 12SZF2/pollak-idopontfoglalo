﻿<?php
    //Database params
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'pollakidopontfoglalas');

    //APPROOT
    define('APPROOT', dirname(dirname(__FILE__)));

    //URLROOT (Dynamic links)
    define('URLROOT', 'http://localhost/pollakidopontfoglalas');
    // define('URLROOT', 'https://pollakbufe.hu');

    //Sitename
    define('SITENAME', 'PollakIdopontFoglalas');

    error_reporting(E_ALL ^ E_DEPRECATED);