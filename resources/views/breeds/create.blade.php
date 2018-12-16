@extends('layouts.app') 
@section('title', 'Create Breed') 
@section('content')
<h1 class="mt-3 text-center">Create Breed</h1>
{!! Form::open(['action' => 'BreedsController@store', 'method' => 'POST', 'files' => true]) !!}
<div class="form-group">
    {{Form::label('breed', 'Breed Name')}} {{Form::text('breed', '', ['class' => 'form-control'])}}
</div>
<div class="form-group">
        {{Form::label('image', 'Image')}}
        {{Form::file('image', ['accept' => 'image/*', 'class' => 'btn btn-success btn-block'])}}
</div>

<div class="form-group">
    {{Form::label('body', 'History')}} {{Form::textarea('history', '', ['id' => 'article-ckeditor', 'class' => 'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('stats', 'Body Stats')}}
    <div class="row">
        <div class="col col-6">
            {{Form::label('height', 'Height in m (ex. 0.55)')}} {{Form::number('height', '', ['id' => 'height', 'class' => 'form-control',
            'min' => '0', 'max' => '2', 'step' => '.01', 'id' => 'height'])}}
        </div>
        <div class="col col-6">
            {{Form::label('weight', 'Weight in kg (ex. 22)')}} {{Form::number('weight', '', ['id' => 'weight', 'class' => 'form-control',
            'min' => '0', 'max' => '150'])}}
        </div>
    </div>
    <div class="row pt-4">
        @for ($i = 0; $i
        <=5 ; $i++) <div class="col col-2">
            Trait {{$i + 1}} {{Form::text('trait'.($i+1), '', ['class' => 'form-control trait', 'onkeypress' => 'return (event.charCode > 64 && 
            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)'])}}
    </div>
    @endfor
</div>
</div>
{!! Form::submit('Submit', ['class' => 'btn btn-primary btn-block mb-3']) !!} {!! Form::close() !!}
<script>
    $( "#height" ).blur(function() {
    this.value = parseFloat(this.value).toFixed(2);
});

</script>
<script>
    $(function () {
    $("#height").keydown(function () {
      // Save old value.
      if (!$(this).val() || (parseInt($(this).val()) <= 2 && parseInt($(this).val()) >= 0))
      $(this).data("old", $(this).val());
    });
    $("#height").keyup(function () {
      // Check correct, else revert back to old value.
      if (!$(this).val() || (parseInt($(this).val()) <= 2 && parseInt($(this).val()) >= 0))
        ;
      else
        $(this).val($(this).data("old"));
    });
    $("#weight").keydown(function () {
      // Save old value.
      if (!$(this).val() || (parseInt($(this).val()) <= 150 && parseInt($(this).val()) >= 0))
      $(this).data("old", $(this).val());
    });
    $("#weight").keyup(function () {
      // Check correct, else revert back to old value.
      if (!$(this).val() || (parseInt($(this).val()) <= 150 && parseInt($(this).val()) >= 0))
        ;
      else
        $(this).val($(this).data("old"));
    });
    $("#height").keydown(function () {
      // Save old value.
      if (!$(this).val() || (parseInt($(this).val()) <= 11 && parseInt($(this).val()) >= 0))
      $(this).data("old", $(this).val());
    });
    $("#height").keyup(function () {
      // Check correct, else revert back to old value.
      if (!$(this).val() || (parseInt($(this).val()) <= 11 && parseInt($(this).val()) >= 0))
        ;
      else
        $(this).val($(this).data("old"));
    });
  });

</script>
@endsection