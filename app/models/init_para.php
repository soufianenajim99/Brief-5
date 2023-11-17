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

//  public function createdb(){
//     $db=$this->connect();
//     if($db==null){
//         return null;
//    }
//    $sql= 'CREATE DATABASE IF NOT EXISTS demo_db';
//    $stmt = $db->prepare($sql);
//    $stmt->execute([]);
//    $db=null;
//    $stmt=null;
// }
 
 
 
 
 
 }

?>