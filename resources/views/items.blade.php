@extends('cart-session')
@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuzzy Wuzzy</title>
</head>
<body>
<div class="flex-center position-ref full-height">
    <?php 
    echo '<div class="text-white" style="color:#fff";>';
          echo $name ?? '';
    echo '</div>';
    ?>
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
                <h1 class="visas_preces">{{__("Visas preces")}}</h1>
                <?php
                if(count($list)){
                    echo "<div class='item_block row'>";
                    foreach($list as $item){
                        echo "<div class='item-instance'>";
                            echo "<div class='item-img_block'>";
                                echo "<div><img style='width: 300px;' src='data:image/jpg;base64,".base64_encode($item->image)."'/></div>";
                            echo "</div>";
                            echo "<div class='item-descr_block'>";
                                
                                if($lang === 'en' && $item->title_en) echo "<h3>$item->title_en</h3>";
                                else echo "<h3>$item->title</h3>";
                                echo "<br>";
                                if($lang === 'en' && $item->description_en) echo $item->description_en;
                                else echo $item->description;
                                
                                echo " <br> $item->price €";
                                echo "<br> <a href='?add=$item->id' class='btn btn-secondary btn-lg active add-to-cart' role='button'>Pievienot grozam</a> </div>"; 
                        
                        echo "</div>";
                    }
                    echo "</div>";
                }
               
               
                ?>            
            </div>
        </div>
</body>
</html>