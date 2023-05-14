@php
$test=1;
@endphp;
{{$test}}

{{-- <h1><//?php echo $heading; ?></h1> --}}
<h1>{{$heading}}<h1>

{{-- @if(count($listings)==0)
<p>No listing found</p>
@endif --}}
@unless(count($listings)==0)

@foreach($listings as $listing)
    <h2>
        {{$listing['title']}}
    </h2>
    <p>
        {{$listing['description']}}
    </p>
@endforeach
    
@else
    <p>No listing found</p>
@endunless
