@extends('layouts.app') 
@section('title', 'Edit Profile') 
@section('content')
<div class="container">
  <h1>Edit Profile</h1>
  <hr>
  {!! Form::open(['action' => 'ProfilesController@update', 'method'=> 'POST']) !!}
  <div class="row">
    <!-- left column -->
    <div class="col-md-3">
      <div class="text-center">
          <span class="profile-picture">
            <img class="editable img-responsive profile-picture" alt=" Avatar" id="avatar2" src='{{Storage::url('public/images/miscellaneous/profiledog.jpg')}}' >
          </span>
        <div class="btn btn-primary mt-3">
          Upload a different photo<input type="file" class="form-control" hidden>
        </div>
      </div>
    </div>

    <!-- edit form column -->
    <div class="col-md-9 personal-info">
      <div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a>
        <i class="fa fa-coffee"></i> All changes made to the account are immediate and not permanent
      </div>
      <h3>Personal info</h3>

      <form class="form-horizontal" role="form">
        <div class="form-group">
          <label class="col-lg-3 control-label">Name:</label>
          <div class="col-lg-8">
          {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => Auth::user()->name])}}
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <div class="col-lg-8">
              {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => Auth::user()->email])}}
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Country:</label>
          <div class="col-lg-8">
              {{Form::text('country', '', ['class' => 'form-control', 'placeholder' => Auth::user()->country])}}          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Breed:</label>
          <div class="col-md-8">
              {{Form::text('breed', '', ['class' => 'form-control', 'placeholder' => Auth::user()->breed])}}
          </div>
        </div>
        <div class="form-group">
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
          <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
          <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css"
          />
          <label class="col-md-3 control-label">Birthday:</label>
          <div class="col-md-8">
            {{Form::text('date','',['class' => 'form-control datepicker', 'readonly'=>'readonly', 'style' => 'background:white;', 'value' => Auth::user()->dob])}}
            <script>
              jQuery(document).ready(function($) {
                      $('.datepicker').datepicker({
                        changeMonth: true,
                        changeYear: true,
                        yearRange: '1950:2019'
                      });
                  });
            </script>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Password:</label>
          <div class="col-md-8">
            {{Form::password('password', ['class' => 'form-control'])}}
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Confirm password:</label>
          <div class="col-md-8">
            {{Form::password('conf-pass', ['class' => 'form-control'])}}
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            {{Form::submit('Submit changes', ['class' => 'btn btn-primary'])}}
            <span></span>
            <a href="{{url('/profile')}}"><button type="button" class="btn btn-default" >Cancel</button></a>
          </div>
        </div>
      </form>
    </div>
  </div>
  {!! Form::close() !!}
</div>
<hr>
@endsection