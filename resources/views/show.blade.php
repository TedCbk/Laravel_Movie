@extends('layouts.main')

@section('content')

    {{-- Start Movie Info --}}
    <div class="movie-info border-b border-gray-800">

        <div class="conteiner mx-auto px-4 py-16 flex flex-col md:flex-row">

            <div class="flex-none">
                <img src="{{ asset('images/800px-Netflix_2015_N_logo.svg.png') }}" alt="netflix" class="w-64 md:w-96">
            </div>
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">Titre du Film</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <i class="fas fa-star fill-current text-yellow-500"></i>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2020</span>
                    <span class="mx-2">|</span>
                    <span>Action, Thriller, Drama</span>
                </div>
                <p class="text-gray-300 mt-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti delectus et
                    odio quo iusto quis voluptatibus, magnam ratione nemo quisquam neque rem saepe, eligendi nostrum quaerat
                    tempora, magni velit mollitia?</p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Jean-Netflix</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                        </div>
                        <div class="ml-8">
                            <div>Marc Netflix</div>
                            <div class="text-sm text-gray-400">Screenplay</div>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <button class="flex items-center bg-yellow-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-yellow-600 transition ease-in-out duration-150">
                        <i class="far fa-play-circle"></i>
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>
            </div>

        </div>

    </div>
    {{-- End Movie Info --}}
    {{-- Start Cast Part --}}
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="">
                        <img src="{{ asset('images/800px-Netflix_2015_N_logo.svg.png') }}" alt="teds"
                            class="hover:opacity-75 transition rease-n-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray:300">Ted's Movie</a>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>    
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="{{ asset('images/800px-Netflix_2015_N_logo.svg.png') }}" alt="teds"
                            class="hover:opacity-75 transition rease-n-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray:300">Ted's Movie</a>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>    
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="{{ asset('images/800px-Netflix_2015_N_logo.svg.png') }}" alt="teds"
                            class="hover:opacity-75 transition rease-n-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray:300">Ted's Movie</a>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>    
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="{{ asset('images/800px-Netflix_2015_N_logo.svg.png') }}" alt="teds"
                            class="hover:opacity-75 transition rease-n-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray:300">Ted's Movie</a>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>    
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="{{ asset('images/800px-Netflix_2015_N_logo.svg.png') }}" alt="teds"
                            class="hover:opacity-75 transition rease-n-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray:300">Ted's Movie</a>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
    {{-- End Cast Part --}}
    {{-- Images Part Start --}}    
    <div class="movie-images">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="{{ asset('images/800px-Netflix_2015_N_logo.svg.png') }}" alt="netflix" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="{{ asset('images/800px-Netflix_2015_N_logo.svg.png') }}" alt="netflix" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="{{ asset('images/800px-Netflix_2015_N_logo.svg.png') }}" alt="netflix" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="{{ asset('images/800px-Netflix_2015_N_logo.svg.png') }}" alt="netflix" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="{{ asset('images/800px-Netflix_2015_N_logo.svg.png') }}" alt="netflix" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="{{ asset('images/800px-Netflix_2015_N_logo.svg.png') }}" alt="netflix" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    {{-- End Images Part --}}


@endsection
