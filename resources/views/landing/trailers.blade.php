<div class="container mx-auto px-4 mt-16 bg-cover bg-no-repeat"
     style="background-image: linear-gradient(to right, rgba(3,37,65, 0.8) 0%, rgba(3,37,65, 0.8) 100%), url('https://www.themoviedb.org/t/p/w1920_and_h427_multi_faces/lvSxooYCRuF3S2kHWXYTrcOtYco.jpg');">
    <div class="latest-trailers">
        <div class="inline-flex rounded-md shadow-sm pt-[35px] px-[35px]" role="group">
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

        <div class="flex snap-x snap-mandatory mx:auto overflow-x-auto scrollbar-thin scrollbar-thumb-gray-300 py-[20px]">
            @foreach($streamTrailers as $trailer)
                <div class="snap-start shrink-0 grid place-items-center px-[10px]">
                    <div class="relative">
                        <img
                            src="https://www.themoviedb.org/t/p/w355_and_h200_multi_faces/{{ $trailer[0]['backdrops'][0]['file_path'] }}"
                            alt="poster"
                            class="rounded-xl transition ease-in-out duration-150">
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
