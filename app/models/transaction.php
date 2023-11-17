<?php

require_once('data_provider.php');

class transaction extends DataProvider {
   public function addtransaction($montant, $type,$id_compte){
    $db=$this->connect();
    if($db==null){
        return null;
   }
   $sql= 'INSERT INTO transaction (montant,type,id_compte) VALUES(:montant,:type,:id_compte)';
   $stmt = $db->prepare($sql);
   $stmt->execute([
    ":montant" => $montant,
    ":type" => $type,
    ":id_compte" => $id_compte
   ]);
   $db=null;
   $stmt=null;
}


public function gettransactions(){

    $db=$this->connect();
    if($db==null){
        return null;
   }

   $query = $db->query('SELECT * FROM transaction');

   $data_transactions=$query->fetchAll(PDO::FETCH_OBJ);

   $query = null;
   $db=null;
   return $data_transactions;
}

// public function getonetransaction($nom){
//     $db=$this->connect();
//     if($db==null){
//         return null;
//     }
    
//     $query = "SELECT * FROM transaction WHERE nom = :nom ";
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