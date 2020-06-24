<?php 
    session_start();
    #cart.php - A simple shopping cart with add to cart, and remove links

    //Reset
    if ( isset($_GET['reset']) )
        {
            if ($_GET["reset"] == 'true')
                {
                    unset($_SESSION["amount"]); //The amount from each product
                    unset($_SESSION["total"]); //The total cost
                    unset($_SESSION["quantity"]); //The total cost
                    unset($_SESSION["cart"]); //Which item has been chosen
                    unset($_SESSION["products"]);
                    // $_SESSION["counter"] = 0;
                }
        }

    //Delete
    if ( isset($_GET["delete"]) )
        {
            $i = $_GET["delete"];
            unset($_SESSION["cart"][$i]);
            unset($_SESSION["quantity"][$i]);
            unset($_SESSION["amount"][$i]);
            unset($_SESSION["products"][$i]);
            // $_SESSION["counter"] = 0;
        }
?>

@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Pieslēgties</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Reģistrēties</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
              
                <h1>Grozs</h1>
                <?php
                    if ( isset($_SESSION["cart"]) ) {
                ?>
                <table>
                <tr>
                <th>Prece</th>
                <th>Cena</th>
                <th>Skaits</th>
                </tr>
                <?php
                    $total = 0;
                    foreach ( $_SESSION["cart"] as $index ) {
                ?>
                <tr>
                <td><?php echo( $_SESSION["products"][$index] ); ?></td>
                <td><?php echo( $_SESSION["amount"][$index] ); ?></td>
                <td><?php echo( $_SESSION["quantity"][$index] ); ?></td>
                <td><a href="?delete=<?php echo($index); ?>">Izdzēst preci</a></td>
                </tr>
                <?php
                    $total = $total + $_SESSION["amount"][$index];
                    }
                    $_SESSION["total"] = $total;
                ?>
                <tr>
                <td colspan="7">Summa : <?php echo($total); ?></td>
                </tr>
                </table>
                <?php
                }
                ?>
                <h2><a href="?reset=true">Iztukšot grozu</a></h2>
                </div>
              
            
            </div>
        </div>
</body>
</html>