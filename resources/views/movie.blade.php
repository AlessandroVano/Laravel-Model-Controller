@extends('layouts.main')
@section('content')
<div class="container mb-5">
     <h1 class="mb-5 text-center">OUR MOVIES</h1>
   
    <div class="row">       
                @foreach ( $movies as $index => $movie )
                <div class="card col-2 m-1 text-center">
                    <a href="{{ route('detail-movie', ['id' => $index]) }}">
                        <div class="p-2">
                            <h5>{{ $movie->title}}</h5>
                            <h5>{{ $movie->original_title}}</h5>
                            <h5>{{ $movie->nationality}}</h5>
                            <h5>{{ $movie->date}}</h5>
                            <h5>{{ $movie->vote}}</h5>
                        </div>
                    </a>
                </div>
                    
                @endforeach

    </div>

    
</div>
@endsection