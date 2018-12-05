@extends('layouts.app') 
@section('title', 'Profile') 
@section('content')
<div id="user-profile-2" class="user-profile">
  <div class="tabbable">  
    <div class="tab-content no-border padding-24">
      <div id="home" class="tab-pane in active">
        <div class="row">
          <div class="col-xs-12 col-sm-3 center">
            <span class="profile-picture">
              <img class="editable img-responsive" alt=" Avatar" id="avatar2" src='{{Storage::url('public/images/miscellaneous/profiledog.jpg')}}' width="230px">
            </span>
            <div class="space space-4"></div>
            <div class="pt-2">
              <a href="{{url('profile/edit')}}" class="btn btn-sm btn-block btn-success">
                <i class="ace-icon fa fa-cog bigger-120"></i>
                <span class="bigger-110">Edit profile</span>
              </a>

              <a href="#" class="btn btn-sm btn-block btn-primary">
                <i class="ace-icon fa fa-trash bigger-110"></i>
                <span class="bigger-110">Delete profile</span>
              </a>
            </div>
          </div>
          <!-- /.col -->

          <div class="col-xs-12 col-sm-9">
            <h4 class="blue">
              <span class="middle">{{Auth::user()->name}}</span>
            </h4>

            <div class="profile-user-info">
              <div class="profile-info-row">
                <div class="profile-info-name"> E-mail </div>

                <div class="profile-info-value">
                  <span>{{Auth::user()->email}}</span>
                </div>
              </div>
              @if (isset(Auth::user()->location))
                <div class="profile-info-row">
                  <div class="profile-info-name"> Country </div>

                  <div class="profile-info-value">
                    <i class="fa fa-map-marker light-orange bigger-110"></i>
                    <span>{{Auth::user()->country}}</span>
                  </div>
                </div>
              @endif

              @if (isset(Auth::user()->breed))
              <div class="profile-info-row">
                <div class="profile-info-name"> Breed </div>

                <div class="profile-info-value">
                  <span>{{Auth::user()->breed}}</span>
                </div>
              </div>
              @endif


              @if (isset(Auth::user()->dob))
              <div class="profile-info-row">
                <div class="profile-info-name"> Date of birth </div>

                <div class="profile-info-value">
                  <span>{{Auth::user()->dob}}</span>
                </div>
              </div>
              @endif

              @if (isset(Auth::user()->created_at))
                <div class="profile-info-row">
                  <div class="profile-info-name"> Joined </div>

                  <div class="profile-info-value">
                  <span>{{Auth::user()->created_at}}</span>
                  </div>
                </div>
              @endif

              <div class="profile-info-row">
                <div class="profile-info-name"> Last Online </div>

                <div class="profile-info-value">
                  <span>*date*</span>
                </div>
              </div>

              <div class="profile-info-row">
                <div class="profile-info-name">
                  <i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
                </div>

                <div class="profile-info-value">
                  <a href="#">Facebook</a>
                </div>
              </div>

              <div class="profile-info-row">
                <div class="profile-info-name">
                  <i class="middle ace-icon fa fa-instagram bigger-150 red"></i>
                </div>

                <div class="profile-info-value">
                  <a href="#" class="red">Instagram</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

        <div class="space-20"></div>

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
                  <p>
                    My job is mostly lorem ipsuming and dolor sit ameting as long as consectetur adipiscing elit.
                  </p>
                  <p>
                    Sometimes quisque commodo massa gets in the way and sed ipsum porttitor facilisis.
                  </p>
                  <p>
                    The best thing about my job is that vestibulum id ligula porta felis euismod and nullam quis risus eget urna mollis ornare.
                  </p>
                  <p>
                    Thanks for visiting my profile.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /#home -->

      
    </div>
  </div>
@endsection