@extends('layouts.app') 
@section('title', 'Edit Profile') 
@section('content')
<div class="container">
  <h1>Edit Profile</h1>
  <hr>
  <div class="row">
    <!-- left column -->
    <div class="col-md-3">
      <div class="text-center">
        <img src="{{Storage::url('public/images/miscellaneous/profiledog.jpg')}} " width="230px" class="avatar img-square" alt="avatar">
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
            <input class="form-control" type="text" value="*name*">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text" value="*e-mail*">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Country:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text" value="*country*">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Breed:</label>
          <div class="col-md-8">
            <input class="form-control" type="text" value="*breed*">
          </div>
        </div>
        <div class="form-group">
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
          <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
          <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css"
          />
          <label class="col-md-3 control-label">Birthday:</label>
          <div class="col-md-8">
            <input class="form-control datepicker" readonly="readonly" style="background:white;">
            <script>
              jQuery(document).ready(function($) {
                      $('.datepicker').datepicker({
                        changeMonth: true,
                        changeYear: true
                      });
                  });
            </script>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Website:</label>
          <div class="col-md-8">
            <input class="form-control" type="text" value="*website*">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Facebook link:</label>
          <div class="col-md-8">
            <input class="form-control" type="text" value="*link*">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Instagram link:</label>
          <div class="col-md-8">
            <input class="form-control" type="text" value="*link*">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Password:</label>
          <div class="col-md-8">
            <input class="form-control" type="password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Confirm password:</label>
          <div class="col-md-8">
            <input class="form-control" type="password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input type="button" class="btn btn-primary" value="Save Changes">
            <span></span>
            <a href="{{url('/profile')}}"><button type="button" class="btn btn-default" >Cancel</button></a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<hr>
@endsection