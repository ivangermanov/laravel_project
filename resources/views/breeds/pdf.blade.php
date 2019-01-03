<img width="728px" src="{{ltrim(dirname($img_link).'/posts/'.basename($img_link), '/')}}">

<!-- Title -->
<h1>{{$breed}}</h1>

<hr>

<!-- Date/Time -->
<p>Posted on {{$created_at}}</p>
@if (!empty($updated_at))
<p>Updated on {{$updated_at}}</p>
@endif

<hr>

<!-- Post Content -->
<h2>History</h2>
<p>{!!$history!!}</p>

<hr>

<!-- Sidebar Widgets Column -->
<!-- Categories Widget -->
<h2>Traits/Temperament</h2>
<h5>
    @for ($i = 0; $i < count($traits); $i++)
    @if ($i === count($traits) - 1)
        {{$traits[$i]}}
    @else
        {{$traits[$i]}}, 
    @endif
    @endfor 
</h5>
<h5>Height - {{$height}}m</h5>
<h5>Weight - {{$weight}}kg</h5>