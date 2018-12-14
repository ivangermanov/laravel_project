@extends('layouts.app') 
@section('title', 'About') 
@section('content')
<div class="row">
    <div class="col-lg-4">
      <rd-widget>
        <rd-widget-header icon="fa-tasks" title="Servers">
          <h4>
          <a class="pr-5">Breed</a>
          <a class="pl-5">Created/Updated at</a>
          </h4>
        </rd-widget-header>
        <rd-widget-body classes="medium no-padding">
          <div class="table-responsive">
            <table class="table table-striped">
              <tbody>
                @if (count($breeds)>0)
                  @for ($i = 0; $i < count($breeds); $i++)
                    @if (!$breeds[$i]->reviewed)
                      <tr><td><a href="/breeds/{{$breeds[$i]->id}}">{{$breeds[$i]->breed}}</a></td><td>
                      @if (empty($breeds[$i]->updated_at))
                        {{$breeds[$i]->created_at}}
                      @else
                        {{$breeds[$i]->updated_at}}
                      @endif
                        
                      </td></tr>
                    @endif
                  @endfor
                @else
                  <tr><td>No created breeds to review</td></tr>
                @endif
                {{$breeds->links()}}
              </tbody>
            </table>
          </div>      
        </rd-widget-body>
      </rd-widget>
    </div>
    <div class="col-lg-4">
      <rd-widget>
        <rd-widget-header icon="fa-tasks" title="Servers">
          <h4>
          <a class="pr-5">Users</a>
          <a class="pl-4">Created at</a>
          <a class="pl-5">Online</a>
          </h4>
        </rd-widget-header>
        <rd-widget-body classes="medium no-padding">
          <div class="table-responsive">
            <table class="table table-striped">
              <tbody>
                @if (count($users)>0)
                  @for ($i = 0; $i < count($users); $i++)
                    @if (!$users[$i]->reviewed)
                      <tr><td><a href="/profile/{{$users[$i]->id}}">{{$users[$i]->name}}</a></td><td>{{$users[$i]->created_at}}</td><td>@if($users[$i]->online === 0)<i class="fa fa-remove red"></i>@else<i><i class="fa fa-check green"></i>@endif</td></tr>
                    @endif
                  @endfor
                @else
                  <tr><td>No created breeds to review</td></tr>
                @endif
                {{$users->links()}}
              </tbody>
            </table>
          </div>      
        </rd-widget-body>
      </rd-widget>
    </div>
    <div class="col-lg-4">
      <rd-widget>
        <rd-widget-header icon="fa-tasks" title="Servers">
          <h4>
          <a>Statistics</a>
          </h4>
        </rd-widget-header>
        <rd-widget-body classes="medium no-padding">
          <div class="table-responsive">
            <table class="table">
              <tbody>
              <tr><td>Total number of breeds</td><td>{{$totalBreeds}}</td></tr>
              <tr><td>Total number of users</td><td>{{$totalUsers}}</td></tr>
              <tr><td>Average visits per post</td><td>{{number_format($avgVisits,2)}}</td></tr>
              <tr><td>Average posts per user</td><td>{{number_format($avgPosts,2)}}</td></tr>
              <tr><td>a</td><td></td></tr>
            </table>
          </div>      
        </rd-widget-body>
      </rd-widget>
    </div>
  </div>
@endsection