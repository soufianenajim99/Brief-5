<?php
require_once('data_provider.php');

class Init_para extends DataProvider {
    public function createdb(){
     $db=$this->connect();
     if($db==null){
         return null;
    }
    $sql= 'CREATE DATABASE IF NOT EXISTS demo_db';
    $stmt = $db->prepare($sql);
    $stmt->execute([]);
    $db=null;
    $stmt=null;
 }

 public function createtables(){
    $db=$this->connect();
    if($db==null){
        return null;
   }
   $sql= 'CREATE TABLE client (
    id INT(11) PRIMARY KEY,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    genre VARCHAR(100),
    date_naissance DATE,
    nationalite VARCHAR(100)
);

CREATE TABLE compte (
    id INT(11) PRIMARY KEY,
    balance FLOAT,
    devise VARCHAR(50),
    rib BIGINT(20),
    id_client INT(11),
    FOREIGN KEY (id_client) REFERENCES client(id)
);

CREATE TABLE transaction (
    id INT(11) PRIMARY KEY,
    montant FLOAT,
    type VARCHAR(50),
    id_compte INT(11),
    FOREIGN KEY (id_compte) REFERENCES compte(id)
);';
   $stmt = $db->prepare($sql);
   $stmt->execute([]);
   $db=null;
   $stmt=null;
}
 }

?>