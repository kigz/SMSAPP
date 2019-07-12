<?php

defined("DB_HOST") ? null : define("DB_HOST", "localhost");

defined("DB_USER") ? null : define("DB_USER","root");

defined("DB_PASS") ? null : define("DB_PASS", "");

defined("DB_NAME") ? null : define("DB_NAME", "sms");

$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

return $config = [
    'account_id' => 'AC51fb8b3961d930068634decfb8b11a4e',
    'auth_token' => '9a20d189f94401fd82eeb0f9a6d74cf7',
    'phone_number' => '+18186433234'
];