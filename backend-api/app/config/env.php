<?php

/**
 * Charge les variables d'environement depuis le fichier .env 
 */

$envPath = __DIR__ . '/../../.env';

if (!file_exists($envPath)){
    throw new Exception('.env file not found');
}

$lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach($lines as $line){
    //ignorer les commentaires
    if (str_starts_with(trim($line), '#')){
        continue;
    }

    [$key, $value] = explode('=', $line, 2);

    $key = trim($key);
    $value = trim($value);

    //Supprimer les guillemets eventuels
    $value = trim($value, "\"'");

    $_ENV[$key] = $value;
    putenv("$key=$value");
}