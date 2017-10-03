<div class="row" id='home' style="padding-top: 50px">
    <div class="container">
        <h1 class="display-5">О себе</h1>
        <hr class="my-4">
        <div class="row">
            @if(isset($about))
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <figure class="figure">
                    <img src="img/{{$about->img}}" class="figure-img img-fluid rounded" alt="{{$about->name}}">
                    <figcaption class="figure-caption">{{ $about->name }}</figcaption>
                </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                <p class="text-justify">{{ $about->about}} </p>
            </div>
            @endif
        </div>
    </div>
</div>