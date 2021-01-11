<?php
require_once 'class_client.php';
require_once 'listeclient.php';
include_once 'function.php';

$liste=new ListeClients;
$liste->display_listClient();