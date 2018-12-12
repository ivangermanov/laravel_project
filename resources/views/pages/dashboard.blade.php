@extends('layouts.app')
@section('title', 'Dashboard') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('breeds.create') }}" class="btn btn-primary btn-lg btn-block"><i class="fa fa-plus fa-lg" aria-hidden="true"></i></a>
                    <h3 class="pt-4"> Your Breeds </h3>
                    @if (count($breeds)>0)
                        <table class="table table-striped">
                            <h5>Title</h5>
                            @foreach ($breeds as $breed)
                                <tr>
                                    <td>{{$breed->breed}}</td>
                                    <td><a href="/breeds/{{$breed->id}}/edit" class="btn btn-primary btn-block"><i class="fa fa-cog"></i><span class="ml-1">Edit</span></a></td>
                                    <td>
                                        {!!Form::open(['action' => ['BreedsController@destroy', $breed->id, 'method'=>'POST']])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::button('<i class="fa fa-trash"></i> Delete', ['class' => 'btn btn-danger btn-block', 'type'=>'submit'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no breeds!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
