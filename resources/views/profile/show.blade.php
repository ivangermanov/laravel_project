@extends('layouts.app') 
@section('title', $user->name) 
@section('content')
<div id="user-profile-2" class="user-profile">
  <div class="tabbable">  
    <div class="tab-content no-border padding-24">
      <div id="home" class="tab-pane in active">
        <div class="row">
          <div class="col-xs-12 col-sm-3 center">
              <img alt="Avatar" id='avatar' class="editable img-responsive" src="{{$user->img_link}}" style="border-radius: 50%;" onmouseover="onHover();" onmouseout="offHover();" />
            <div class="space space-4"></div>
            <div class="pt-2">
            </div>
          </div>
          <!-- /.col -->

          <div class="col-xs-12 col-sm-9">
            <h4 class="blue">
              <span class="middle">{{$user->name}}
                @if ($user->online === 1)
                  </span><i class="fa fa-circle green"></i>
                @else
                </span><i class="fa fa-circle red"></i>
                @endif
            </h4>

            <div class="profile-user-info">
              <div class="profile-info-row">
                <div class="profile-info-name"> E-mail </div>

                <div class="profile-info-value">
                  <span>{{$user->email}}</span>
                </div>
              </div>
              @if (isset($user->country))
                <div class="profile-info-row">
                  <div class="profile-info-name"> Country </div>

                  <div class="profile-info-value">
                    <i class="fa fa-map-marker light-orange bigger-110"></i>
                    <span>{{$user->country}}</span>
                  </div>
                </div>
              @endif

              @if (isset($user->breed))
              <div class="profile-info-row">
                <div class="profile-info-name"> Breed </div>

                <div class="profile-info-value">
                  <span>{{$user->breed}}</span>
                </div>
              </div>
              @endif


              @if (isset($user->dob))
              <div class="profile-info-row">
                <div class="profile-info-name"> Date of birth </div>

                <div class="profile-info-value">
                  <span>{{$user->dob}}</span>
                </div>
              </div>
              @endif

              @if (isset($user->created_at))
                <div class="profile-info-row">
                  <div class="profile-info-name"> Joined </div>

                  <div class="profile-info-value">
                  <span>{{$user->created_at}}</span>
                  </div>
                </div>
              @endif

              @if ($user->online === 0)
                <div class="profile-info-row">
                  <div class="profile-info-name"> Last Online </div>

                  <div class="profile-info-value">
                    <span>{{$user->last_online}}</span>
                  </div>
                </div>   
              @endif

              <div class="profile-info-row">
                <div class="profile-info-name">
                  <i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
                </div>

                <div class="profile-info-value">
                <a href="https://www.facebook.com/{{str_replace(' ', '', $user->name)}}">Facebook</a>
                </div>
              </div>

              <div class="profile-info-row">
                <div class="profile-info-name">
                  <i class="middle ace-icon fa fa-instagram bigger-150 red"></i>
                </div>

                <div class="profile-info-value">
                  <a href="https://www.instagram.com/{{str_replace(' ', '', $user->name)}}" class="red">Instagram</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

        <div class="space-20"></div>

        @if (!empty($user->description))
        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <div class="widget-box transparent">
              <div class="widget-header widget-header-small">
                <h4 class="widget-title smaller">
                  <i class="ace-icon fa fa-check-square-o bigger-110 pt-4"></i> Little About Me
                </h4>
              </div>
              <div class="widget-body">
                <div class="widget-main">
                    {!! $user->description !!}
                </div>
              </div>
            </div>
          </div>
        </div>
        @endif
      </div>      
    </div>
  </div>
<script>
    function onHover()
    {
      $("#avatar").attr('src', '{{substr_replace($user->img_link, '_pixelated_', strpos($user->img_link, '_'), 1)}}');  
    }
  
    function offHover()
    {
        $("#avatar").attr('src', '{{$user->img_link}}');
    }
  
  </script>
@endsection