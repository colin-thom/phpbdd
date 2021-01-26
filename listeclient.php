<?php
require_once 'class_client.php';

class ListeClients
{
    public $listeclient=array();
    public function __construct(){
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=thomas_db', 'thomas', 'vx3wcejfb');
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        $req=$bdd->query('SELECT * from customers');
        while ($donnees=$req->fetch()){
            $cli=new Client($donnees['id'], $donnees['first_name'], $donnees['last_name'], $donnees['address'], $donnees['zip'], $donnees['city']);
            array_push($this->listeclient, $cli);
        }
    }
    public function display_listClient(){
        foreach($this->listeclient as $client){
            displayClient($client);
        }
    }
}
