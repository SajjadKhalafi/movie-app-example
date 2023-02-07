@extends('layouts.main')

@section('content')

    <section
        style="background-image: linear-gradient(to right, rgba(3,37,65, 0.8) 0%, rgba(3,37,65, 0) 100%), url('{{ $bgImage['poster_path'] }}');"
        class="container mx-auto bg-cover">
        <div class="max-w-screen-xl lg:py-16 lg:px-12">
            <div class="w-full mb-[20px]">
                <h2 class="text-[3rem] font-[700] text-white md:text-5xl lg:text-6xl">Welcome.</h2>
                <p class="text-[2rem] font-[600] text-white">Millions of movies, TV shows and people to discover.
                    Explore now.</p>
            </div>


            <form>
                <div class="flex">
                    <div class="relative w-full">
                        <input type="search" id=location-search"
                               class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                               placeholder="Search for a movie, tv show, person......" required>
                        <button type="submit"
                                class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>


        </div>
    </section>

    @include('landing.trending')

    @include('landing.trailers')

    @include('landing.populars')

    @include('landing.free-to-watch')
@endsection
