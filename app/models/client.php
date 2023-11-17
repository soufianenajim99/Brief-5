<?php

require_once('data_provider.php');

class client extends DataProvider {
   public function addclient($nom, $prenom, $genre,$date_naissance,$nationalite){
    $db=$this->connect();
    if($db==null){
        return null;
   }
   $sql= 'INSERT INTO client (nom,prenom,genre,date_naissance,nationalite) VALUES(:nom,:prenom,:genre,:date_naissance,:nationalite)';
   $stmt = $db->prepare($sql);
   $stmt->execute([
    ":nom" => $nom,
    ":prenom" => $prenom,
    ":genre" => $genre,
    ":date_naissance"=> $date_naissance,
    ":nationalite"=> $nationalite
   ]);
   $db=null;
   $stmt=null;
}


public function getclients(){

    $db=$this->connect();
    if($db==null){
        return null;
   }

   $query = $db->query('SELECT * FROM client');

   $data_clients=$query->fetchAll(PDO::FETCH_OBJ);

   $query = null;
   $db=null;
   return $data_clients;
}

public function getoneclient($nom){
    $db=$this->connect();
    if($db==null){
        return null;
    }
    
    $query = "SELECT * FROM client WHERE nom = :nom ";
    $stmt = $db->prepare($query);

    $stmt->execute([
        ":nom" => $nom,
       ]);
    
    $data=$stmt->fetch(PDO::FETCH_OBJ);
     if(!$data){
        return "Data not Found 404";
     }
    $query = null;
    $db=null;
    return $data;
}


public function getclientinfo($id){
    $db=$this->connect();
    if($db==null){
        return null;
    }
    
    $query = "SELECT *
    FROM compte
    WHERE id_client = :id;
    ";


    $stmt = $db->prepare($query);

    $stmt->execute([
        ":id" => $id,
       ]);
    
    $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
     if(!$data){
        return "Data not Found 404";
     }
    $query = null;
    $db=null;
    return $data;
}




}







?>