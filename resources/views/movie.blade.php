@extends('layouts.main')
@section('content')
<div class="container mb-5">
   {{--  <h1 class="mb-5">Our Film</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid deleniti odit modi voluptatem temporibus hic ad nemo quae quas provident. Voluptatem veritatis incidunt deserunt architecto est eos aliquid error omnis.</p> --}}
    <div class="row">       
                @foreach ( $movies as $movie )
                <div class="card col-2 mr-5">
                    <h5>{{ $movie->title}}</h5>
                    <h5>{{ $movie->original_title}}</h5>
                    <h5>{{ $movie->nationality}}</h5>
                    <h5>{{ $movie->date}}</h5>
                    <h5>{{ $movie->vote}}</h5>
                </div>
                    
                @endforeach

    </div>

    
</div>
@endsection