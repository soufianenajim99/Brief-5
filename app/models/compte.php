<?php

require_once('data_provider.php');

class compte extends DataProvider {
   public function addcompte($balance, $devise, $idTrance,$rib){
    $db=$this->connect();
    if($db==null){
        return null;
   }
   $sql= 'INSERT INTO compte (balance,devise,id-trans,rib) VALUES(:balance,:devise,:id-trans,:rib)';
   $stmt = $db->prepare($sql);
   $stmt->execute([
    ":balance" => $balance,
    ":devise" => $devise,
    ":id-trans" => $idTrance,
    ":rib" => $rib
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

// public function getonecompte($nom){
//     $db=$this->connect();
//     if($db==null){
//         return null;
//     }
    
//     $query = "SELECT * FROM compte WHERE nom = :nom ";
//     $stmt = $db->prepare($query);

//     $stmt->execute([
//         ":nom" => $nom,
//        ]);
    
//     $data=$stmt->fetch(PDO::FETCH_OBJ);
//      if(!$data){
//         return "Data not Found 404";
//      }
//     $query = null;
//     $db=null;
//     return $data;
// }



}







?>