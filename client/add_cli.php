<?php
require_once('../app/models/client.php');
$newClient = new client() ; 



if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$nationalite=$_POST['nationalite'];
$genre=$_POST['genre'];
$dateNaissance=$_POST['dateNaissance'];



$newClient->addclient($nom,$prenom,$genre,$dateNaissance,$nationalite) ;
  
header('Location: index.php');
}







?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Ajouter Un Client</title>
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
    <h2 class="text-2xl font-semibold mb-4">Ajouter Un Client</h2>

    <form action="" method="POST">

      <!-- Nom -->
      <div class="mb-4">
        <label for="nom" class="block text-gray-700 text-sm font-bold mb-2">Nom:</label>
        <input type="text" id="nom" name="nom" class="w-full p-2 border rounded" required>
      </div>

      <!-- Prenom -->
      <div class="mb-4">
        <label for="prenom" class="block text-gray-700 text-sm font-bold mb-2">Prenom:</label>
        <input type="text" id="prenom" name="prenom" class="w-full p-2 border rounded">
      </div>

      <!-- Nationalite -->
      <div class="mb-4">
        <label for="nationalite" class="block text-gray-700 text-sm font-bold mb-2">Nationalite:</label>
        <input type="text" id="nationalite" name="nationalite" class="w-full p-2 border rounded">
      </div>

      <!-- Genre -->
      <div class="mb-4">
        <label for="genre" class="block text-gray-700 text-sm font-bold mb-2">Genre:</label>
        <select id="genre" name="genre" class="w-full p-2 border rounded">
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>

      <!-- Date de Naissance -->
      <div class="mb-4">
        <label for="dateNaissance" class="block text-gray-700 text-sm font-bold mb-2">Date de Naissance:</label>
        <input type="date" id="dateNaissance" name="dateNaissance" class="w-full p-2 border rounded">
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
