@extends('layouts.app') 
@section('title', 'Edit Profile') 
@section('content')
<div class="container">
  <h1>Edit Profile</h1>
  <hr>
  {!! Form::open(['action' => 'ProfilesController@update', 'method'=> 'POST', 'files' => true, 'enctype' => "multipart/form-data"]) !!}
  <div class="row">
    <!-- left column -->
    <div class="col-md-3">
      <div class="text-center">
            <img alt="Avatar" id='avatar' class="editable img-responsive" src="{{Auth::User()->img_link}}" style="border-radius: 50%;" onmouseover="onHover();" onmouseout="offHover();" />
        <div class="mt-3">
            {{Form::file('image', ['accept' => 'image/*', 'class' => 'btn btn-success btn-block'])}}
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
          <label class="col-md-3 control-label">Name:</label>
          <div class="col-lg-8">
          {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => Auth::user()->name])}}
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Email:</label>
          <div class="col-lg-8">
              {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => Auth::user()->email])}}
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label " for="sel1">Country:</label>
          <div class="col-lg-8">
              {{Form::select('country', array(
                'Afghanistan' => 'Afghanistan' ,
                'Albania' => 'Albania' ,
                'Algeria' => 'Algeria' ,
                'Andorra' => 'Andorra' ,
                'Angola' => 'Angola' ,
                'Antigua & Deps' => 'Antigua & Deps' ,
                'Argentina' => 'Argentina' ,
                'Armenia' => 'Armenia' ,
                'Australia' => 'Australia' ,
                'Austria' => 'Austria' ,
                'Azerbaijan' => 'Azerbaijan' ,
                'Bahamas' => 'Bahamas' ,
                'Bahrain' => 'Bahrain' ,
                'Bangladesh' => 'Bangladesh' ,
                'Barbados' => 'Barbados' ,
                'Belarus' => 'Belarus' ,
                'Belgium' => 'Belgium' ,
                'Belize' => 'Belize' ,
                'Benin' => 'Benin' ,
                'Bhutan' => 'Bhutan' ,
                'Bolivia' => 'Bolivia' ,
                'Bosnia Herzegovina' => 'Bosnia Herzegovina' ,
                'Botswana' => 'Botswana' ,
                'Brazil' => 'Brazil' ,
                'Brunei' => 'Brunei' ,
                'Bulgaria' => 'Bulgaria' ,
                'Burkina' => 'Burkina' ,
                'Burundi' => 'Burundi' ,
                'Cambodia' => 'Cambodia' ,
                'Cameroon' => 'Cameroon' ,
                'Canada' => 'Canada' ,
                'Cape Verde' => 'Cape Verde' ,
                'Central African Rep' => 'Central African Rep' ,
                'Chad' => 'Chad' ,
                'Chile' => 'Chile' ,
                'China' => 'China' ,
                'Colombia' => 'Colombia' ,
                'Comoros' => 'Comoros' ,
                'Congo' => 'Congo' ,
                'Congo {Democratic Rep}' => 'Congo {Democratic Rep}' ,
                'Costa Rica' => 'Costa Rica' ,
                'Croatia' => 'Croatia' ,
                'Cuba' => 'Cuba' ,
                'Cyprus' => 'Cyprus' ,
                'Czech Republic' => 'Czech Republic' ,
                'Denmark' => 'Denmark' ,
                'Djibouti' => 'Djibouti' ,
                'Dominica' => 'Dominica' ,
                'Dominican Republic' => 'Dominican Republic' ,
                'East Timor' => 'East Timor' ,
                'Ecuador' => 'Ecuador' ,
                'Egypt' => 'Egypt' ,
                'El Salvador' => 'El Salvador' ,
                'Equatorial Guinea' => 'Equatorial Guinea' ,
                'Eritrea' => 'Eritrea' ,
                'Estonia' => 'Estonia' ,
                'Ethiopia' => 'Ethiopia' ,
                'Fiji' => 'Fiji' ,
                'Finland' => 'Finland' ,
                'France' => 'France' ,
                'Gabon' => 'Gabon' ,
                'Gambia' => 'Gambia' ,
                'Georgia' => 'Georgia' ,
                'Germany' => 'Germany' ,
                'Ghana' => 'Ghana' ,
                'Greece' => 'Greece' ,
                'Grenada' => 'Grenada' ,
                'Guatemala' => 'Guatemala' ,
                'Guinea' => 'Guinea' ,
                'Guinea-Bissau' => 'Guinea-Bissau' ,
                'Guyana' => 'Guyana' ,
                'Haiti' => 'Haiti' ,
                'Honduras' => 'Honduras' ,
                'Hungary' => 'Hungary' ,
                'Iceland' => 'Iceland' ,
                'India' => 'India' ,
                'Indonesia' => 'Indonesia' ,
                'Iran' => 'Iran' ,
                'Iraq' => 'Iraq' ,
                'Ireland {Republic}' => 'Ireland {Republic}' ,
                'Israel' => 'Israel' ,
                'Italy' => 'Italy' ,
                'Ivory Coast' => 'Ivory Coast' ,
                'Jamaica' => 'Jamaica' ,
                'Japan' => 'Japan' ,
                'Jordan' => 'Jordan' ,
                'Kazakhstan' => 'Kazakhstan' ,
                'Kenya' => 'Kenya' ,
                'Kiribati' => 'Kiribati' ,
                'Korea North' => 'Korea North' ,
                'Korea South' => 'Korea South' ,
                'Kosovo' => 'Kosovo' ,
                'Kuwait' => 'Kuwait' ,
                'Kyrgyzstan' => 'Kyrgyzstan' ,
                'Laos' => 'Laos' ,
                'Latvia' => 'Latvia' ,
                'Lebanon' => 'Lebanon' ,
                'Lesotho' => 'Lesotho' ,
                'Liberia' => 'Liberia' ,
                'Libya' => 'Libya' ,
                'Liechtenstein' => 'Liechtenstein' ,
                'Lithuania' => 'Lithuania' ,
                'Luxembourg' => 'Luxembourg' ,
                'Macedonia' => 'Macedonia' ,
                'Madagascar' => 'Madagascar' ,
                'Malawi' => 'Malawi' ,
                'Malaysia' => 'Malaysia' ,
                'Maldives' => 'Maldives' ,
                'Mali' => 'Mali' ,
                'Malta' => 'Malta' ,
                'Marshall Islands' => 'Marshall Islands' ,
                'Mauritania' => 'Mauritania' ,
                'Mauritius' => 'Mauritius' ,
                'Mexico' => 'Mexico' ,
                'Micronesia' => 'Micronesia' ,
                'Moldova' => 'Moldova' ,
                'Monaco' => 'Monaco' ,
                'Mongolia' => 'Mongolia' ,
                'Montenegro' => 'Montenegro' ,
                'Morocco' => 'Morocco' ,
                'Mozambique' => 'Mozambique' ,
                'Myanmar, {Burma}' => 'Myanmar, {Burma}' ,
                'Namibia' => 'Namibia' ,
                'Nauru' => 'Nauru' ,
                'Nepal' => 'Nepal' ,
                'Netherlands' => 'Netherlands' ,
                'New Zealand' => 'New Zealand' ,
                'Nicaragua' => 'Nicaragua' ,
                'Niger' => 'Niger' ,
                'Nigeria' => 'Nigeria' ,
                'Norway' => 'Norway' ,
                'Oman' => 'Oman' ,
                'Pakistan' => 'Pakistan' ,
                'Palau' => 'Palau' ,
                'Panama' => 'Panama' ,
                'Papua New Guinea' => 'Papua New Guinea' ,
                'Paraguay' => 'Paraguay' ,
                'Peru' => 'Peru' ,
                'Philippines' => 'Philippines' ,
                'Poland' => 'Poland' ,
                'Portugal' => 'Portugal' ,
                'Qatar' => 'Qatar' ,
                'Romania' => 'Romania' ,
                'Russian Federation' => 'Russian Federation' ,
                'Rwanda' => 'Rwanda' ,
                'St Kitts & Nevis' => 'St Kitts & Nevis' ,
                'St Lucia' => 'St Lucia' ,
                'Saint Vincent & the Grenadines' => 'Saint Vincent & the Grenadines' ,
                'Samoa' => 'Samoa' ,
                'San Marino' => 'San Marino' ,
                'Sao Tome & Principe' => 'Sao Tome & Principe' ,
                'Saudi Arabia' => 'Saudi Arabia' ,
                'Senegal' => 'Senegal' ,
                'Serbia' => 'Serbia' ,
                'Seychelles' => 'Seychelles' ,
                'Sierra Leone' => 'Sierra Leone' ,
                'Singapore' => 'Singapore' ,
                'Slovakia' => 'Slovakia' ,
                'Slovenia' => 'Slovenia' ,
                'Solomon Islands' => 'Solomon Islands' ,
                'Somalia' => 'Somalia' ,
                'South Africa' => 'South Africa' ,
                'South Sudan' => 'South Sudan' ,
                'Spain' => 'Spain' ,
                'Sri Lanka' => 'Sri Lanka' ,
                'Sudan' => 'Sudan' ,
                'Suriname' => 'Suriname' ,
                'Swaziland' => 'Swaziland' ,
                'Sweden' => 'Sweden' ,
                'Switzerland' => 'Switzerland' ,
                'Syria' => 'Syria' ,
                'Taiwan' => 'Taiwan' ,
                'Tajikistan' => 'Tajikistan' ,
                'Tanzania' => 'Tanzania' ,
                'Thailand' => 'Thailand' ,
                'Togo' => 'Togo' ,
                'Tonga' => 'Tonga' ,
                'Trinidad & Tobago' => 'Trinidad & Tobago' ,
                'Tunisia' => 'Tunisia' ,
                'Turkey' => 'Turkey' ,
                'Turkmenistan' => 'Turkmenistan' ,
                'Tuvalu' => 'Tuvalu' ,
                'Uganda' => 'Uganda' ,
                'Ukraine' => 'Ukraine' ,
                'United Arab Emirates' => 'United Arab Emirates' ,
                'United Kingdom' => 'United Kingdom' ,
                'United States' => 'United States' ,
                'Uruguay' => 'Uruguay' ,
                'Uzbekistan' => 'Uzbekistan' ,
                'Vanuatu' => 'Vanuatu' ,
                'Vatican City' => 'Vatican City' ,
                'Venezuela' => 'Venezuela' ,
                'Vietnam' => 'Vietnam' ,
                'Yemen' => 'Yemen' ,
                'Zambia' => 'Zambia' ,
                'Zimbabwe' => 'Zimbabwe' ,
                ),null,['class' => 'form-control', 'placeholder' => Auth::user()->country])}} </div>
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
          <div class="col-md-8">
            {{Form::label('description', 'Description')}} {{Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control'])}}
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