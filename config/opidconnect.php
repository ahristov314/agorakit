<?php

return [
    'client_id' => 'agorakit',
    'client_secret' => '59686167-5058-461b-8307-f1342ea03654',
    'redirect' => env('APP_URL') . '/auth/callback',
    'auth' => 'https://sso.agoraspeakers.org/auth/realms/master/protocol/openid-connect/auth',
    'token' => 'https://sso.agoraspeakers.org/auth/realms/master/protocol/openid-connect/token',
    'keys' => 'https://sso.agoraspeakers.org/auth/realms/master/protocol/openid-connect/certs',
];