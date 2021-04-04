@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-8 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-red-500 text-lg font-semibold">Popular Movies</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-5 gap-8">
            @foreach ($popularMovies as $movie)
                
            <x-movie-card :movie="$movie" :genres="$genres" />

            @endforeach


        </div>
        {{-- End Popular Movies --}}
        {{-- Start Now Playing --}}
        <div class="now-playing-movies pt-24">
            <h2 class="uppercase tracking-wider text-red-500 text-lg font-semibold">Now Playing</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-5 gap-8">
            @foreach ($nowPlayingMovies as $movie)
            <x-movie-card :movie="$movie" :genres="$genres" />
            @endforeach
        </div>
    </div>


@endsection
