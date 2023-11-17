<?php
require_once('../app/models/compte.php');
$newcompte = new compte() ; 



// if ($_SERVER["REQUEST_METHOD"] == "POST") {
// $balance=$_POST['balance'];
// $devise=$_POST['devise'];
// $transe=$_POST['transe'];
// $rib=$_POST['rib'];
// $clie=$_POST['clie'];


$newcompte->addcompte(45,78,1,4564,15);
  
// header('Location: index.php');
// }







?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Ajouter Un compte</title>
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
    <h2 class="text-2xl font-semibold mb-4">Ajouter Un compte</h2>

    <form action="" method="POST">

      <!-- Nom -->
      <div class="mb-4">
        <label for="nom" class="block text-gray-700 text-sm font-bold mb-2">Balance:</label>
        <input type="text" id="nom" name="balance" class="w-full p-2 border rounded" required>
      </div>

      <!-- Prenom -->
      <div class="mb-4">
        <label for="prenom" class="block text-gray-700 text-sm font-bold mb-2">Devise:</label>
        <input type="text" id="prenom" name="devise" class="w-full p-2 border rounded">
      </div>
      <!-- Prenom -->
      <div class="mb-4">
        <label for="prenom" class="block text-gray-700 text-sm font-bold mb-2">RIB:</label>
        <input type="text" id="prenom" name="rib" class="w-full p-2 border rounded">
      </div>

      <!-- Genre -->
      <div class="mb-4">
        <label for="genre" class="block text-gray-700 text-sm font-bold mb-2">Id-trans:</label>
        <select id="genre" name="transe" class="w-full p-2 border rounded">
        <option value="1">1</option>
          <option value="2">2</option>
        </select>
      </div>

       <!-- Genre -->
       <div class="mb-4">
        <label for="genre" class="block text-gray-700 text-sm font-bold mb-2">Id-clie:</label>
        <select id="genre" name="clie" class="w-full p-2 border rounded">
          <option value="1">1</option>
          <option value="2">2</option>
        </select>
      </div>

  
      <!-- Submit Button -->
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
