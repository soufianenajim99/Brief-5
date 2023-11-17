<?php

require_once('../app/models/client.php');

$clientId=$_GET['client_id'];

$client = new client();

$client->deleteClient($clientId);

header('Location: index.php');
?>

