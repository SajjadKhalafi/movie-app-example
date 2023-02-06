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

    <div class="container mx-auto px-4 pt-16">
        <div class="trending" x-data="{ isOpen: true, trends: {{ $dayTrends }} }">
            <div class="inline-flex rounded-md shadow-sm" role="group">
                <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold mr-8">
                    Trending
                </h2>
                <div class="inline-flex rounded-md shadow-sm">
                    <a href="#"
                       @click.prevent="isOpen = true , trends = {{ $dayTrends }} "
                       class="px-4 py-2 text-sm font-medium  text-blue-700 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Today
                    </a>
                    <a href="#"
                       @click.prevent="isOpen = true , trends = {{ $weekTrends }} "
                       class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        This Week
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-3 sm:grid-cols-5 md:grid-cols-7 gap-6"
                 x-show="isOpen">
                <template x-for="trend in trends">
                    @include('components.trending-card')
                </template>
            </div>
        </div>
        {{--        end of trending--}}
    </div>

    <div class="container mx-auto px-4 pt-16">
        <div class="latest-trailers">
            <div class="inline-flex rounded-md shadow-sm" role="group">
                <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold mr-8">
                    Latest Trailers
                </h2>
                <div class="inline-flex rounded-md shadow-sm">
                    <x-landing-buttons>
                        Streaming
                    </x-landing-buttons>
                    <x-landing-buttons>
                        On TV
                    </x-landing-buttons>
                    <x-landing-buttons>
                        For Rent
                    </x-landing-buttons>
                    <x-landing-buttons>
                        In Theaters
                    </x-landing-buttons>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                @foreach($streamTrailers as $trailer)
                    <div class="mt-8 rounded overflow-hidden shadow-lg">
                        <div class="relative">
                            <img
                                src="https://www.themoviedb.org/t/p/w355_and_h200_multi_faces/{{ $trailer[0]['backdrops'][0]['file_path'] }}"
                                alt="poster"
                                class="w-full h-auto transition ease-in-out duration-150">
                            <button class="absolute top-[35%] left-[41%]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-11 h-11">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z"/>
                                </svg>
                            </button>
                        </div>
                        <div class="px-6 py-4 text-center">
                            <a href="#" class="font-semibold mb-2">{{ $trailer[0]['title'] }}</a>
                            <h3 class="text-white text-base font-normal">
                                @foreach($trailer[0]['video'] as $video)
                                    {{ $video['name'] }}
                                @endforeach
                            </h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{--        end of latest trailer--}}

    <div class="container mx-auto px-4 pt-16">
        <div class="popular" x-data="{ isOpen: true, trends: {{ $streamMovies }} }">
            <div class="inline-flex rounded-md shadow-sm" role="group">
                <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold mr-8">
                    What's Popular
                </h2>
                <div class="inline-flex rounded-md shadow-sm">
                    <x-landing-buttons @click.prevent="isOpen = true , trends = {{ $streamMovies }} ">
                        Streaming
                    </x-landing-buttons>
                    <x-landing-buttons @click.prevent="isOpen = true , trends = {{ $popularTvs }} ">
                        On TV
                    </x-landing-buttons>
                    <x-landing-buttons @click.prevent="isOpen = true , trends = {{ $rentMovies }} ">
                        For Rent
                    </x-landing-buttons>
                    <x-landing-buttons @click.prevent="isOpen = true , trends = {{ $theaterMovies }} ">
                        In Theaters
                    </x-landing-buttons>
                </div>
            </div>

            <div class="grid grid-cols-3 sm:grid-cols-5 md:grid-cols-7 gap-6"
                 x-show="isOpen">
                <template x-for="trend in trends">
                    @include('components.trending-card')
                </template>
            </div>
        </div>
        {{--            end of populars--}}
    </div>

    <div class="container mx-auto px-4 pt-16">
        <div class="free" x-data="{ isOpen: true, free: {{ $freeMovies }} }">
            <div class="inline-flex rounded-md shadow-sm" role="group">
                <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold mr-8">
                    Free To Watch
                </h2>
                <div class="inline-flex rounded-md shadow-sm">
                    <x-landing-buttons @click.prevent="isOpen = true , free = {{ $freeMovies }} ">
                        Movies
                    </x-landing-buttons>
                    <x-landing-buttons @click.prevent="isOpen = true , free = {{ $freeSeries }} ">
                        TV
                    </x-landing-buttons>
                </div>
            </div>

            <div class="grid grid-cols-3 sm:grid-cols-5 md:grid-cols-7 gap-6"
                 x-show="isOpen">
                <template x-for="trend in free">
                    @include('components.trending-card')
                </template>
            </div>
        </div>
        {{--        end of free to watch--}}
    </div>
@endsection
