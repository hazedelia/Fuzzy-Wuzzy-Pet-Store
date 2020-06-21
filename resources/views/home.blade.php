@extends('layouts.app')
@extends('master')

@section('title','Homepage')

<div class="row full-screen"> 
<div class="col-lg-3">

    <h1 class="my-3">Fuzzy Wuzzy</h1>
    <div class="list-group">
      <a href="#" class="list-group-item">Category 1</a>
      <a href="#" class="list-group-item">Category 2</a>
      <a href="#" class="list-group-item">Category 3</a>
    </div>

  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-7">

    <div id="carouselExampleIndicators" class="carousel slide my-4 d-flex justify-content-center" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner " role="listbox">
        <div class="carousel-item active">
          <img style="max-width:90%;" class="d-block img-fluid" src="../../assets/cat_dog.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img style="max-width:90%;" class="d-block img-fluid" src="../../assets/cat.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img style="max-width:90%;" class="d-block img-fluid" src="../../assets/hamster.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

    <div class="row card_block">
        <?php
          foreach($list as $listItem) {
            echo '
            <div class="col-lg-4 col-md-6 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"> ' .$listItem->title.'</a>
                  </h4>
                  <h5>'.$listItem->price.'</h5>
                  <h5>'.$listItem->description.'</h5>
                  <img class="card-img-top" src="data:image/jpg;base64,'.base64_encode($listItem->image).'">
                </div>
              </div>
            </div>
            ';
          }
        ?>
      </div>

    </div>
    <!-- /.row -->

  </div>

