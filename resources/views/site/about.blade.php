<div class="container" id='home'>
    <div class="row">
@if(isset($about))

    <h1>{{ $about->name }}</h1>
    <p>{{ $about->date }}</p>
    <p>{{ $about->phone}}</p>
    {{ Html::image('img/' . $about->img) }}

@endif
    </div>
</div>