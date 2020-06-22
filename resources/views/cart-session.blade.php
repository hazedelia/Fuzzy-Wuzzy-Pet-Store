<?php
    session_start();

    //Add
    if ( isset($_GET["add"]) )
    {
        $i = $_GET["add"];
        $keyItem;
        foreach($list as $key){
        if ($key->id == $i){
            $keyItem = $key;
        }
        }
        if (isset($keyItem))
        {
            $_SESSION["cart"][$i] = $i;
            $_SESSION["products"][$i] = $keyItem->title;
            if (isset($_SESSION["quantity"][$i]))
                {
                    $_SESSION["quantity"][$i] = $_SESSION["quantity"][$i] + 1;
                }
            else
                {
                    $_SESSION["quantity"][$i] = 1;
                }
            if (isset($_SESSION["amount"][$i]))
                {
                    $_SESSION["amount"][$i] = $_SESSION["amount"][$i] + $keyItem->price;
                }
            else
                {
                    $_SESSION["amount"][$i] = $keyItem->price;;
                }
        }
    }
?>