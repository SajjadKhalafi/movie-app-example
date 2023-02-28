<div class="container mx-auto px-4 mt-16">
<div class="latest-trailers  bg-cover bg-no-repeat" x-data="{ isOpen: true , trailers: {{ $streamTrailers }} }"
     :style="background-image: url( trailers[0][0]['file_path'] )">
    <div class="inline-flex rounded-md shadow-sm pt-[35px] px-[35px]" role="group">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold mr-8">
            Latest Trailers
        </h2>
        <div class="inline-flex rounded-md shadow-sm">
            <x-landing-buttons @click.prevent="isOpen = true , trailers = {{ $streamTrailers }}">
                Streaming
            </x-landing-buttons>

            <x-landing-buttons @click.prevent="isOpen = true , trailers = {{ $tvTrailers }}">
                On TV
            </x-landing-buttons>

            <x-landing-buttons @click.prevent="isOpen = true , trailers = {{ $rentTrailers }}">
                For Rent
            </x-landing-buttons>

            <x-landing-buttons @click.prevent="isOpen = true , trailers = {{ $theaterTrailers }}">
                In Theaters
            </x-landing-buttons>
        </div>
    </div>

    <div
        class="flex snap-x snap-mandatory mx:auto overflow-x-auto scrollbar-thin scrollbar-thumb-gray-300 py-[20px]"
        x-show="isOpen">
        <template x-for="trailer in trailers">
            <div class="snap-start shrink-0 grid place-items-center px-[10px]"
                @mouse>

                <div x-data="{ openTrailer: false}">
                    <a x-bind:href="trailer[0]['linkToPage']"
                       @click.prevent="openTrailer = true"
                       class="relative">
                        <img :src="trailer[0]['file_path']" alt="trailer Poster"
                             class="rounded-xl transition ease-in-out duration-150">
                        <button class="absolute top-[35%] left-[41%]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" class="w-11 h-11">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z"/>
                            </svg>
                        </button>
                    </a>
                    <div
                        style="background-color: rgba(0,0,0,.5)"
                        class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto z-50"
                        x-show.transition.opacity="openTrailer"
                    >
                        <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                            <div class="bg-gray-900 rounded">
                                <div class="flex justify-end">
                                    <button
                                        @click="openTrailer = false"
                                        @keydown.escape.window="openTrailer = false "
                                        @keydown.shift.tab="isOpen = false"
                                        class="text-3xl loading-none hover:bg-gray-300">
                                        &times;
                                    </button>
                                </div>
                                <div class="modal-body px-8 py-8">
                                    <div
                                        class="responsive-container overflow-hidden relative"
                                        style="padding-top: 56.25%"
                                    >
                                        <template x-for="trailerVideo in trailer[0]['video']">
                                            <iframe
                                                class="responsive-iframe absolute top-0 left-0 w-full h-full"
                                                style="border: 0"
                                                x-bind:src="'https://www.youtube.com/embed/' + trailerVideo['key']"
                                                allow="autoplay; encrypted-media"
                                                allowfullscreen>
                                            </iframe>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="px-6 py-4 text-center w-3/4">
                    <a x-bind:href="trailer[0]['linkToPage']" class="font-semibold mb-2">
                        <span x-text="trailer[0]['title']"></span>
                    </a>
                    <p class="text-white text-base font-normal whitespace-normal">
                        <template x-for="video in trailer[0]['video']">
                            <span x-text="video['name']"></span>
                        </template>
                    </p>
                </div>
            </div>

        </template>
    </div>
</div>
</div>
