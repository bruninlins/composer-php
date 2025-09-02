<?php

use GuzzleHttp\Client;

$client = new Client();
$resposta = $client -> request ( method: 'GET', uri: 'https://www.alura.com.br/cursos-online-programacao/php');

$html = $resposta-> getBody();
