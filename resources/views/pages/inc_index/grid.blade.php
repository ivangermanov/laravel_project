<div class="container">
    <h2 class="mt-4">Recently added breeds</h2>
    @if (count($recentBreeds)>0)
        <div class="row">
            @for($i = 0; $i < count($recentBreeds); $i++)
                @if($i % 3 == 0)
                <div class="row mb-5 mt-3">
                @endif
                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <a href="/breeds/{{$recentBreeds[$i]->id}}"><img class="card-img-top" src="{{$recentBreeds[$i]->img_link}}" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="/breeds/{{$recentBreeds[$i]->id}}">{{$recentBreeds[$i]->breed}}</a>
                                </h4>
                                <p class="card-text">{!!mb_strimwidth($recentBreeds[$i]->history, 0, 200, '...')!!}</p>
                            </div>
                        </div>
                    </div>
                @if($i % 3 == 2)
                </div>
                @endif
            @endfor
        </div>
    @else
        <h1>No recent breeds found</h1>
    @endif
</div>
