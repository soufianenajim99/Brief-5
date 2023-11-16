<?php

require_once('../app/models/compte.php');

$compte = new compte() ; 

$listcomptes=$compte->getcomptes() ;

// foreach ($listcomptes as $clt ) {
//     print_r($clt->id);
// echo "<br>";

// }



// echo'test_compte_affiche';

// $name="lornzi";
// $theone=$compte->getonecompte($name);
// echo "<pre>";
// print_r($theone->id) ;
// echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>comptes-Info</title>
</head>
<body>

<div class="container">
      <nav class="Navbar">
        <div class="logo">
          <img src="../assets/img/Current_Bank_Logo.png" alt="" srcset="" />
        </div>
        <div class="right-nav">
          <a href="">client</a>
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
<button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 float-right">
<a href="add_cmt.php" class="font-medium hover:underline ml:25px">Ajouter Un compte</a></button>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Balance De Compte
                </th>
                <th scope="col" class="px-6 py-3">
                    Devise
                </th>
                <th scope="col" class="px-6 py-3">
                   Id-transaction
                </th>
                <th scope="col" class="px-6 py-3">
                   RIB
                </th>
                <th scope="col" class="px-6 py-3">
                   Id-Clients
                </th>
                
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>

        <?php 
        foreach ($listcomptes as $clt ) {
        ?>
       
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?php 
        echo $clt->balance;
        ?>
                </th>
                <td class="px-6 py-4">
                <?php 
        echo $clt->devise;
        ?>
                </td>
                <td class="px-6 py-4">
                <?php 
        echo $clt->id_trans;
        ?>
                </td>
                <td class="px-6 py-4">
                <?php 
        echo $clt->rib;
        ?>
                </td>
                <td class="px-6 py-4">
                <?php 
        echo $clt->id_client;
        ?>
                </td>
               
                <td class="px-6 py-4 text-right">
                    <a href="add_cli.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline ml:25px">Edit</a>
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline p-5">Edit</a>
                </td>
            </tr>

            <?php
        
    }
    ?>

        </tbody>
    </table>
</div>



<script src="https://cdn.tailwindcss.com"></script>
    <script src="../assets/main.js"></script>
</body>
</html>