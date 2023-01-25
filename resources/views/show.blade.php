@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container flex flex-col md:flex-row mx-auto px-4 py-16 flex">
            <div class="flex-none">
                <img src="img/OperationFortune.jpg" alt="poster" class="w-64 lg:w-96">
            </div>
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">
                    Operation Fortune: Ruse de Guerre (2023)
                </h2>
                <div class="mt-2 flex flex-wrap">
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                            <g data-name="Layer 2">
                                <path
                                    d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                    data-name="star"/>
                            </g>
                        </svg>
                        <span class="ml-1">68%</span>
                        <span class="mx-2">|</span>
                        <span>Jan 12, 2023</span>
                        <span class="mx-2">|</span>
                        <span class="mx-2">Action, Thriller, Comedy</span>
                    </div>
                    <p class="text-gray-300 mt-8">
                        Five Eyes, the international intelligence agency, recruits MI6 agent Orson Fortune to prevent
                        the sale of a deadly new weapons technology that threatens to disrupt the world order.
                    </p>
                    <div class="mt-12">
                        <h4 class="text-white font-semibold">
                            Featured Crew
                        </h4>
                        <div class="flex mt-4">
                            <div class="mr-8">
                                <div>Guy Ritchie</div>
                                <div class="text-sm text-gray-400">Director, Screenplay</div>
                            </div>
                            <div class="mr-8">
                                <div>Ivan Atkinson</div>
                                <div class="text-sm text-gray-400">
                                    Screenplay
                                </div>
                            </div>
                            <div class="mr-8">
                                <div>Marn Davies</div>
                                <div class="text-sm text-gray-400">
                                    Screenplay
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12">
                        <button
                            class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                            <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                            <span class="ml-2">
                                Play Trailer
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> {{-- End Movie Info --}}
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="img/actors/jasonStatham.jpg" alt="jasonStatham"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Jason Statham</a>
                        <div class="text-sm text-gray-400">
                            Orson Fortune
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/actors/aubreyPlaza.jpg" alt="aubreyPlaza"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Aubrey Plaza</a>
                        <div class="text-sm text-gray-400">
                            Sarah Fidel
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/actors/hughGrant.jpg" alt="hughGrant"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Hugh Grant</a>
                        <div class="text-sm text-gray-400">
                            Greg Simmonds
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/actors/joshHartnett.jpg" alt="joshHartnett"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Josh Hartnett</a>
                        <div class="text-sm text-gray-400">
                            Danny Franscesco
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/actors/bugzyMalone.jpg" alt="bugzyMalone"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Bugzy Malone</a>
                        <div class="text-sm text-gray-400">
                            JJ Davies
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="movie-image border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="img/moviesBackdrop/6ZZjNFjTlO9F25467CruIibwuxl.jpg" alt="jasonStatham"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/moviesBackdrop/ckoDfYjHu9BkM30WIo5sWDJe8Cy.jpg" alt="aubreyPlaza"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/moviesBackdrop/tPGNGGcB5nzCM39tCYTQ1luJxtG.jpg" alt="hughGrant"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/moviesBackdrop/vnCG14tDcOIFwe4CKnSdbPXFUqP.jpg" alt="joshHartnett"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/moviesBackdrop/vWhsupMyyjRST1AojFWTdRO4Kt6.jpg" alt="bugzyMalone"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
