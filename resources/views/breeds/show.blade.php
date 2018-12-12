@extends('layouts.app') 
@section('title', $breed->breed) 
@section('content')
<div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{$breed->breed}}</h1>

        <!-- Author -->
        <p class="lead">
            by
            <a href="#">{{$breed->user->name}}</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on {{$breed->created_at}}</p>

        @if (!empty($breed->updated_at))
        <p>Last updated on {{$breed->updated_at}}</p>
        @endif
        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{$breed->img_link}}" alt="Picture of {{$breed->breed}}">

        <hr>

        <!-- Post Content -->
        <p class="lead">{!!$breed->history!!}</p>

        <blockquote class="blockquote">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer class="blockquote-footer">Someone famous in
                <cite title="Source Title">Source Title</cite>
            </footer>
        </blockquote>
        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <!-- Single Comment -->
        <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                felis in faucibus.
            </div>
        </div>

        <!-- Comment with nested comments -->
        <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                felis in faucibus.

                <div class="media mt-4">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                    <div class="media-body">
                        <h5 class="mt-0">Commenter Name</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                        vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                        congue felis in faucibus.
                    </div>
                </div>

                <div class="media mt-4">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                    <div class="media-body">
                        <h5 class="mt-0">Commenter Name</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                        vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                        congue felis in faucibus.
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
                </div>
            </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
            <h5 class="card-header">Traits/Temperament</h5>
            <div class="card-body">
                <div class="row">
                    @for ($i = 0; $i < count($traits); $i++) 
                    @if ($i % 3===0 ) 
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                            @endif
                            <li>
                                <h5 class="text-primary text-center">{{$traits[$i]}}</h5>
                            </li>
                    @if ($i % 3 === 2 || $i === count($traits) - 1)
                        </ul>
                    </div>
                    @endif @endfor
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card my-1">
                    <h5 class="card-header">Height</h5>
                    <div class="card-body">
                        <h5 class="text-primary text-center">{{$breed->height}}m</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card my-1">
                    <h5 class="card-header">Weight</h5>
                    <div class="card-body">
                        <h5 class="text-primary text-center">{{$breed->weight}}kg</h5>
                    </div>
                </div>
            </div>
        </div>
        @if (!Auth::guest())
            @if (Auth::id() === $breed->user_id)
                <div>
                    <a href="/breeds/{{$breed->id}}/edit" class="btn btn-primary btn-block mb-2 mt-3"><i class="fa fa-cog"></i><span class="ml-1">Edit</span></a>
                    {!!Form::open(['action' => ['BreedsController@destroy', $breed->id, 'method'=>'POST']])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::button('<i class="fa fa-trash"></i> Delete', ['class' => 'btn btn-danger btn-block', 'type'=>'submit'])}}
                    {!!Form::close()!!}
                </div>
            @endif
        @endif
    </div>
</div>

</div>

</div>
<!-- /.row -->
@endsection