@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-tv">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                On TV Shows
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($tvShows as $tvshow)
                    <x-tv-card :tvshow="$tvshow" class="tv" />
                @endforeach
            </div>
        </div>

        <div class="page-load-status my-8">
            <div class="flex justify-center">
                <div class="infinite-scroll-request spinner my-8 text-4xl">&nbsp;</div>
            </div>
            <p class="infinite-scroll-last">End of Content</p>
            <p class="infinite-scroll-error">Error</p>
        </div>

    </div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
    <script>
        let elem = document.querySelector('.grid');
        let infScroll = new InfiniteScroll(elem, {
            // options
            path: '/tv-top-rated/page/@{{#}}',
            append: '.tv',
            history: false,
            status: '.page-load-status',
        });
    </script>
@endsection
