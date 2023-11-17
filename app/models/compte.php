<?php

require_once('data_provider.php');

class compte extends DataProvider {
   public function addcompte($balance, $devise,$rib,$id_client){
    $db=$this->connect();
    if($db==null){
        return null;
   }
   $sql= 'INSERT INTO compte (balance,devise,rib,id_client) VALUES(:balance,:devise,:rib,:id_client)';
   $stmt = $db->prepare($sql);
   $stmt->execute([
    ":balance" => $balance,
    ":devise" => $devise,
    ":rib" => $rib,
    ":id_client" => $id_client
   ]);
   $db=null;
   $stmt=null;
}


public function getcomptes(){

    $db=$this->connect();
    if($db==null){
        return null;
   }

   $query = $db->query('SELECT * FROM compte');

   $data_comptes=$query->fetchAll(PDO::FETCH_OBJ);

   $query = null;
   $db=null;
   return $data_comptes;
}

public function getcompteinfo($id){
    $db=$this->connect();
    if($db==null){
        return null;
    }
    
    $query = "SELECT *
    FROM transaction
    WHERE id_compte = :id;";
    $stmt = $db->prepare($query);

    $stmt->execute([
        ":id" => $id,
       ]);
    
    $data=$stmt->fetchall(PDO::FETCH_OBJ);
     if(!$data){
        return "Data not Found 404";
     }
    $query = null;
    $db=null;
    return $data;
}



}







?>