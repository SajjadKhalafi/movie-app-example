<div class="container mx-auto px-4 pt-16">
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
</div>
