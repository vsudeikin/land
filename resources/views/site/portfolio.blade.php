<div class="container"> 
<h1 class="display-5">Портфолио</h1>
<hr class="my-4"> 

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    @foreach($portfolio as $k => $v)
    
    <li data-target="#carouselExampleIndicators" data-slide-to="{{$k}}" @if($k == 0 ) {!!'class="active"'!!} @endif></li>
    
    @endforeach
  </ol>
  <div class="carousel-inner">

    @foreach($portfolio as $k => $v)
    <div class="carousel-item @if($k == 0) {!!'active'!!} @endif ">
      <img class="d-block w-100" src="img/portfolio/{{$v->img}}" alt="{{$v->name}}">
    </div>
    @endforeach

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Назад</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Вперед</span>
  </a>
</div>
</div>

