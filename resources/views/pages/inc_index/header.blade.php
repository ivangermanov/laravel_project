<header>
    @if (count($popularBreeds) > 0)
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @for ($i = 0; $i < count($popularBreeds); $i++)
            @if ($i === 0)
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            @else
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}"></li>
            @endif
            @endfor
        </ol>
        <div class="carousel-inner" role="listbox">
            @for ($i = 0; $i < count($popularBreeds); $i++)
            @if ($i === 0)
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{$popularBreeds[$i]->img_link}}">
                    <div class="card card-sm carousel-caption bg-dark">
                        <h3>{{$popularBreeds[$i]->breed}}</h3>
                        <p>{!!mb_strimwidth($popularBreeds[$i]->history, 0, 150, '...')!!}</p>
                    </div>
                </div>
            @else
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{$popularBreeds[$i]->img_link}}">
                    <div class="card card-sm carousel-caption bg-dark">
                        <h3>{{$popularBreeds[$i]->breed}}</h3>
                        <p>{{mb_strimwidth($popularBreeds[$i]->history, 0, 200, '...')}}</p>
                    </div>
                </div>
            @endif
            @endfor
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
    @else 
    <h1>No popular breeds found</h1>
    @endif
</header>