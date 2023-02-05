@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="trending">
            <div class="inline-flex rounded-md shadow-sm" role="group">
                <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold mr-8">
                    Trending
                </h2>
                <div class="inline-flex rounded-md shadow-sm">
                    <a href="?trending=today" aria-current="page" class="px-4 py-2 text-sm font-medium text-blue-700 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Today
                    </a>
                    <a href="?trending=week" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        This Week
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-3 sm:grid-cols-5 md:grid-cols-7 gap-6">
                @if(request('trending') == 'week')
                    @foreach($WeekTrends as $trend)
                        <x-trending-card :trend="$trend" />
                    @endforeach
                @else
                    @foreach($dayTrends as $trend)
                        <x-trending-card :trend="$trend" />
                    @endforeach
                @endif
            </div>
        </div>         end of trending
    </div>

    <div class="container mx-auto px-4 pt-16">
        <div class="latest-trailers">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Latest Trailers
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
{{--                                @foreach($popularActors as $actor)--}}
                <div class="actor mt-8">
                    <a href="#">
                        <img src="avatar.jpg" alt="Profile Image"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#"
                           class="text-lg hover:text-gray-300">Movie Name</a>
                        <div class="text-sm truncate text-gray-400">May 26, 2001</div>
                    </div>
                </div>
{{--                                @endforeach--}}
            </div>
        </div>         end of latest trailer
    </div>

    <div class="container mx-auto px-4 pt-16">
        <div class="popular">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                What's Popular
            </h2>
            <div class="grid grid-cols-3 sm:grid-cols-5 md:grid-cols-7 gap-11">
{{--                                @foreach($popularActors as $actor)--}}
                <div class="actor mt-8">
                    <a href="#">
                        <img src="avatar.jpg" alt="Profile Image"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#"
                           class="text-lg hover:text-gray-300">Movie Name</a>
                        <div class="text-sm truncate text-gray-400">May 26, 2001</div>
                    </div>
                </div>
{{--                                @endforeach--}}
            </div>
        </div>         end of populars
    </div>

    <div class="container mx-auto px-4 pt-16">
        <div class="free">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Free To Watch
            </h2>
            <div class="grid grid-cols-3 sm:grid-cols-5 md:grid-cols-7 gap-11">
{{--                                @foreach($popularActors as $actor)--}}
                <div class="actor mt-8">
                    <a href="#">
                        <img src="avatar.jpg" alt="Profile Image"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#"
                           class="text-lg hover:text-gray-300">Movie Name</a>
                        <div class="text-sm truncate text-gray-400">May 26, 2001</div>
                    </div>
                </div>
{{--                                @endforeach--}}
            </div>
        </div>         end of free to watch
    </div>
@endsection
