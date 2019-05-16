<?php
$access_token = 'Dy97GGOwvP0GXu9Rfv69qjzk5srIDCRfOV9J1kEJF9F+4PUsxpyko5PPwmqXgwUcH9Ry+SwmpasJFyVZCjOCBOpq0LA0Lgeb+pr0I9J1ics7ixZERyn2gNOOKjXlGCl1teKxgAPGwDatiXdifCUfXQdB04t89/1O/w1cDnyilFU=
';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);curl_close($ch);echo $result;