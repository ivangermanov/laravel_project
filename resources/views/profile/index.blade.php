@extends('layouts.app') 
@section('title', 'Profile') 
@section('content')
<div id="user-profile-2" class="user-profile">
  <div class="tabbable">
    <div class="tab-content no-border padding-24">
      <div id="home" class="tab-pane in active">
        <div class="row">
          <div class="col-xs-12 col-sm-3 center">
              <img alt="Avatar" id='avatar' class="editable img-responsive" src="{{Auth::User()->img_link}}" style="border-radius: 50%;" onmouseover="onHover();" onmouseout="offHover();" />
            <div class="space space-4"></div>
            <div class="pt-2">
              <a href="{{url('profile/edit')}}" class="btn btn-sm btn-block btn-success">
                <i class="ace-icon fa fa-cog bigger-120"></i>
                  <span class="bigger-110">Edit profile</span>
              </a>
              <div class="pt-1">
                {!! Form::open(['action' => 'ProfilesController@destroy', 'method' => 'POST']) !!} {{Form::hidden('_method', 'DELETE')}}
                {{Form::button('
                <i class="ace-icon fa fa-trash bigger-110"> </i> Delete ', ['class'=>'btn btn-sm btn-block btn-danger', 'type'=>
                'submit'])}} {!! Form::close() !!}
                <script>
                  $(".delete").on("submit", function(){
                      return confirm("Are you sure?");
                  });
                </script>
              </div>
            </div>
          </div>
          <!-- /.col -->

          <div class="col-xs-12 col-sm-9">
            <h4 class="blue">
              <span class="middle">{{Auth::user()->name}} </span><i class="fa fa-circle green"></i>
            </h4>

            <div class="profile-user-info">
              <div class="profile-info-row">
                <div class="profile-info-name"> E-mail </div>
                <div class="profile-info-value">
                  <span>{{Auth::user()->email}}</span>
                </div>
              </div>
              @if (isset(Auth::user()->country))
              <div class="profile-info-row">
                <div class="profile-info-name"> Country </div>

                <div class="profile-info-value">
                  <i class="fa fa-map-marker light-orange bigger-110"></i>
                  <span>{{Auth::user()->country}}</span>
                </div>
              </div>
              @endif @if (isset(Auth::user()->breed))
              <div class="profile-info-row">
                <div class="profile-info-name"> Breed </div>

                <div class="profile-info-value">
                  <span>{{Auth::user()->breed}}</span>
                </div>
              </div>
              @endif @if (isset(Auth::user()->dob))
              <div class="profile-info-row">
                <div class="profile-info-name"> Date of birth </div>

                <div class="profile-info-value">
                  <span>{{Auth::user()->dob}}</span>
                </div>
              </div>
              @endif @if (isset(Auth::user()->created_at))
              <div class="profile-info-row">
                <div class="profile-info-name"> Joined </div>

                <div class="profile-info-value">
                  <span>{{Auth::user()->created_at}}</span>
                </div>
              </div>
              @endif @if (Auth::user()->online === 0)
              <div class="profile-info-row">
                <div class="profile-info-name"> Last Online </div>

                <div class="profile-info-value">
                  <span>{{Auth::user()->last_online}}</span>
                </div>
              </div>
              @endif

              <div class="profile-info-row">
                <div class="profile-info-name">
                  <i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
                </div>

                <div class="profile-info-value">
                  <a href="https://www.facebook.com/{{str_replace(' ', '', Auth::user()->name)}}">Facebook</a>
                </div>
              </div>

              <div class="profile-info-row">
                <div class="profile-info-name">
                  <i class="middle ace-icon fa fa-instagram bigger-150 red"></i>
                </div>

                <div class="profile-info-value">
                  <a href="https://www.instagram.com/{{str_replace(' ', '', Auth::user()->name)}}" class="red">Instagram</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="space-20"></div>

      @if (!empty(Auth::user()->description))
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
                {!! Auth::user()->description !!}
              </div>
            </div>
          </div>
        </div>
      </div>
      @endif
    </div>
    <!-- /#home -->
  </div>
</div>
<script>
  function onHover()
  {
    $("#avatar").attr('src', '{{substr_replace(Auth::User()->img_link, '_pixelated_', strpos(Auth::User()->img_link, '_'), 1)}}');  
  }

  function offHover()
  {
    $("#avatar").attr('src', '{{Auth::User()->img_link}}');
  }

</script>
@endsection