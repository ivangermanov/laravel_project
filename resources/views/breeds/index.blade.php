@extends('layouts.app') 
@section('title', 'Breeds') 
@section('content') 
{{-- TODO: Add sorting for breeds (alphabetic, most recent, most popular) --}}
@auth
<div class="row">
    <div class="col col-3 pt-3">
        <a href="{{ route('breeds.create') }}" class="btn btn-primary btn-lg btn-block"><i class="fa fa-plus fa-lg" aria-hidden="true"></i></a>
    </div>
    <div class="col col-6">
        <h1 class="mt-3 text-center">Breeds</h1>
    </div>
</div>
@endauth
@guest
    <h1 class="mt-3 text-center">Breeds</h1>
@endguest
@if (count($breeds) > 0) 
@for ($i = 0; $i < count($breeds); $i++) 
@if ($i % 3===0 ) 
    <div class="row mb-5 mt-3">
@endif
    <div class="col-sm-4 col-md-4">
        <div class="post">
            <div class="post">
                <img src="{{$breeds[$i]->img_link}}" class="img-fluid" />
                <span class="post-title breed-img-overlay"><b>{{$breeds[$i]->breed}}</b>
                </span>
            </div>
            <div class="content">
                <div class="author">
                    By
                    @if (empty($breeds[$i]->user->deleted_at))
                        <a href="/profile/{{$breeds[$i]->user->id}}">
                            <b>{{$breeds[$i]->user->name}}</b>
                        </a>
                    @else
                        <b>{{$breeds[$i]->user->name}}</b>
                    @endif 
                    |
                    <time>{{$breeds[$i]->created_at}}</time>
                </div>
                <div>
                    {{mb_strimwidth(str_replace("&nbsp;", ' ', strip_tags($breeds[$i]->history)), 0, 200, '...')}}
                </div>
                <div>
                    <a href="/breeds/{{$breeds[$i]->id}}" class="btn btn-primary btn-block btn-md">Read more</a>
                </div>
            </div>
        </div>
    </div>
    @if ($i % 3===2 || $i===count($breeds)) 
        </div>
    @endif
     @endfor 
     {{$breeds->links()}}
    </div>
    @else
    <h1>No breeds found</h1>
    @endif
@endsection