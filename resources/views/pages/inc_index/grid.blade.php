<div class="container">
    <h2 class="mt-4">Breeds</h2>
    @if (count($recentBreeds)>0)
        <div class="row">
            @for($i = 0; $i < count($recentBreeds); $i++)
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="{{$recentBreeds[$i]->img_link}}" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">{{$recentBreeds[$i]->breed}}</a>
                        </h4>
                        <p class="card-text">{{mb_strimwidth($recentBreeds[$i]->history, 0, 200, '...')}}</p>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    @else
        <h1>No recentBreeds found</h1>
    @endif
</div>
