@extends('layouts.app') 
@section('title', 'Homepage') 
@section('content')
  @include('pages.inc_index.header')
  @include('pages.inc_index.grid')


<!-- Features Section -->
<div class="row mt-4">
  <div class="col-lg-6">
    <h2>Become a Member!</h2>
    <h3>The features you get by registering:</h3>
    <ul>
      <li>
        <h5><strong>Your own unique Dog profile page</strong></h5>
      </li>
      <li>
        <h5>Upload photos of your Dog</h5>
      </li>
      <li>
        <h5>Comment on Dog breeds</h5>
      </li>
      <li>
        <h5>Make Dog friends</h5>
      </li>
    </ul>
    <h5>*Note: In order to become a member of our website you need to be in possession of a Dog.</h5>
    <p>Please read these <a href="#">Terms and Conditions</a> ("Terms", "Terms and Conditions") carefully before using the www.barkpedia.com
      website (the "Service") operated by BarkPedia ("us", "we", or "our").</p>
    <p>By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then
      you may not access the Service.</p>

  </div>
  <div class="col-lg-6">
    <img class="img-fluid rounded" src="/storage/images/miscellaneous/registerdog.jpg" alt="Register dog promoter">
  </div>
</div>
<!-- /.row -->

<hr>

<!-- Call to Action Section -->
<a class="btn btn-lg btn-success btn-block mb-3" href="#">Register!</a>

</div>
<!-- /.container -->
@endsection