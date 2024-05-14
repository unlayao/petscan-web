<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('./petscan-demo-firebase-adminsdk-yer4q-1b8c7f8fc3.json')
    ->withDatabaseUri('https://petscan-demo-default-rtdb.asia-southeast1.firebasedatabase.app/')
    ->withDefaultStorageBucket('gs://petscan-demo.appspot.com')
    ->withProjectId('petscan-demo');



$database = $factory->createDatabase();
$storage = $factory->createStorage();