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
</div>
