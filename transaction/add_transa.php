<?php
require_once('../app/models/transaction.php');
require_once('../app/models/compte.php');
$newtransaction = new transaction() ; 

$cmp_trans = new compte() ; 

$listcomptes=$cmp_trans->getcomptes() ;
// echo '<pre>';
// print_r($listclients);
// echo '</pre>';
// echo'<br>';

foreach ($listcomptes as $clt ) {
  var_dump($clt->id);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$montant=$_POST['montant'];
$type=$_POST['type'];
$id_cmp=$_POST['id_compte'];


$newtransaction->addtransaction($montant,$type,$id_cmp);
  
header('Location: index.php');
}







?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Ajouter Un transaction</title>
</head>
<body>

<div class="container">
      <nav class="Navbar">
        <div class="logo">
          <img src="../assets/img/Current_Bank_Logo.png" alt="" srcset="" />
        </div>
        <div class="right-nav">
          <a href="index.php">Client</a>
          <a href="">Comptes</a>
          <a href="">Transactions</a>
        </div>
        <div>
          <button class="logr">Login/Register</button>
        </div>
        <div class="toggle-menu">
          <img src="../assets/img/icons8-hamburger-menu-50.png" alt="" srcset="" />
        </div>
      </nav>
    </div>








<div class="relative w-11/12 mx-auto  shadow-md sm:rounded-lg mt-12">


<div class="max-w-md mx-auto bg-white rounded p-8 shadow-md">
    <h2 class="text-2xl font-semibold mb-4">Ajouter Une transaction</h2>

    <form action="" method="POST">

     
      <div class="mb-4">
        <label for="nom" class="block text-gray-700 text-sm font-bold mb-2">Montant:</label>
        <input type="text" id="nom" name="montant" class="w-full p-2 border rounded" required>
      </div>

    
      <div class="mb-4">
        <label for="genre" class="block text-gray-700 text-sm font-bold mb-2">Type De Transaction : </label>
        <select id="genre" name="type" class="w-full p-2 border rounded">
          <option value="credit">credit</option>
          <option value="debit">debit</option>
        </select>
      </div>
    
       <div class="mb-4">
        <label for="genre" class="block text-gray-700 text-sm font-bold mb-2">Id-Compte:</label>
        <select id="genre" name="id_compte" class="w-full p-2 border rounded">

        <?php 
        foreach ($listcomptes as $clt ) {
          echo '<option value="' . $clt->id . '">' . $clt->id . '</option>';
        ?>

          <?php
        }
        ?>
        </select>
      </div>

  
  
      <div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Submit</button>
      </div>

    </form>
  </div>

</div>



<script src="https://cdn.tailwindcss.com"></script>
    <script src="../assets/main.js"></script>
</body>
</html>
