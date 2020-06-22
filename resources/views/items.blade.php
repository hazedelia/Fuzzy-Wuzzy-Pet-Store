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
                Fuzzy Wuzzy's Pet Store
                </div>
                <h1>Visas preces</h1>
                <?php
                if(count($items)){
                    
                    echo "<div class='item_block row'>";
                    foreach($items as $item){
                        echo "<div class='item-instance'>";
                            echo "<div class='item-img_block'>";
                                echo "<div><img style='width: 300px;' src='data:image/jpg;base64,".base64_encode($item->image)."'/></div>";
                            echo "</div>";
                            echo "<div class='item-descr_block'>";
                                echo "<div>";
                                echo "<h3>$item->title</h3>";
                                echo "<div>";
                                echo "$item->description</div>";
                                echo "<div>";
                                echo "$item->price €</div>";
                            echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                    echo "</div>";
                }
               
               
                ?>            
            </div>
        </div>
</body>
</html>