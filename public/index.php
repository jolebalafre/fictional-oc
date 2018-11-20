<?php

include_once(__DIR__ . '/../src/functions.php');

// Données
$data = array();
$data['message'] = 'Hello, World !';

// Affichage vue
display_view('index', $data);
