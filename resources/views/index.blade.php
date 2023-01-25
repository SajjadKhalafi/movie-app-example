@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Popular Movies
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="img/pussInBoots.jpg" alt="PussInBoots"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Puss in Boots: The Last Wish</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star"/>
                                </g>
                            </svg>
                            <span class="ml-1">86%</span>
                            <span class="mx-2">|</span>
                            <span>Dec 07, 2022</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Animation, Action, Adventure, Comedy, Family, Fantasy
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/megan.jpg" alt="M3gan"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">M3GAN</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star"/>
                                </g>
                            </svg>
                            <span class="ml-1">72%</span>
                            <span class="mx-2">|</span>
                            <span>Dec 28, 2022</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Science Fiction, Horror, Comedy
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/avatar2022.jpg" alt="Avatar2022"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Avatar: The Way of Water</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star"/>
                                </g>
                            </svg>
                            <span class="ml-1">77%</span>
                            <span class="mx-2">|</span>
                            <span>Dec 16, 2022</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Science Fiction, Adventure, Action
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/devotion.jpg" alt="Devotion"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Devotion</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star"/>
                                </g>
                            </svg>
                            <span class="ml-1">71%</span>
                            <span class="mx-2">|</span>
                            <span>Nov 23, 2022</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            War, History, Drama
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/enforcer.jpg" alt="TheEnforcer"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">The Enforcer</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star"/>
                                </g>
                            </svg>
                            <span class="ml-1">69%</span>
                            <span class="mx-2">|</span>
                            <span>Sep 23, 2022</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Drama
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/violentNight.jpg" alt="ViolentNight"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Violent Night</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star"/>
                                </g>
                            </svg>
                            <span class="ml-1">77%</span>
                            <span class="mx-2">|</span>
                            <span>Nov 30, 2022</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Comedy, Crime, Thriller
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/blackadam.jpg" alt="BlackAdam"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Black Adam</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star"/>
                                </g>
                            </svg>
                            <span class="ml-1">72%</span>
                            <span class="mx-2">|</span>
                            <span>Oct 19, 2022</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Fantasy, Action, Science Fiction
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/avatar2009.jpg" alt="Avatar2009"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Avatar</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star"/>
                                </g>
                            </svg>
                            <span class="ml-1">76%</span>
                            <span class="mx-2">|</span>
                            <span>Dec 17, 2009</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Adventure, Fantasy, Science Fiction
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/troll.jpg" alt="Troll"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Troll</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star"/>
                                </g>
                            </svg>
                            <span class="ml-1">67%</span>
                            <span class="mx-2">|</span>
                            <span>Dec 01, 2022</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Fantasy, Action, Adventure, Thriller
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/blackpanther.jpg" alt="BlackPanther:WakandaForever"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Black Panther: Wakanda Forever</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star"/>
                                </g>
                            </svg>
                            <span class="ml-1">75%</span>
                            <span class="mx-2">|</span>
                            <span>Nov 10, 2022</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Adventure, Science Fiction
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-4 pt-16">
        <div class="now-playing">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Now Playing
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="img/pussInBoots.jpg" alt="PussInBoots"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Puss in Boots: The Last Wish</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star"/>
                                </g>
                            </svg>
                            <span class="ml-1">86%</span>
                            <span class="mx-2">|</span>
                            <span>Dec 16, 2022</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Animation, Action, Adventure, Comedy, Family, Fantasy
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/megan.jpg" alt="M3gan"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">M3GAN</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star"/>
                                </g>
                            </svg>
                            <span class="ml-1">72%</span>
                            <span class="mx-2">|</span>
                            <span>Jan 05, 2023</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Science Fiction, Horror, Comedy
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/terrifier.jpg" alt="terrifier"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Terrifier 2</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star"/>
                                </g>
                            </svg>
                            <span class="ml-1">69%</span>
                            <span class="mx-2">|</span>
                            <span>Jan 19, 2023</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Horror
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/houseParty.jpg" alt="houseParty"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">House Party</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star"/>
                                </g>
                            </svg>
                            <span class="ml-1">72%</span>
                            <span class="mx-2">|</span>
                            <span>Jan 12, 2023</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Comedy
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/Babylon.jpg" alt="Babylon"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Babylon</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star"/>
                                </g>
                            </svg>
                            <span class="ml-1">78%</span>
                            <span class="mx-2">|</span>
                            <span>Jan 19, 2023</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Drama, Comedy
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/ScarletBond.jpg" alt="ScarletBond"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">That Time I Got Reincarnated as a Slime the Movie: Scarlet Bond</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star"/>
                                </g>
                            </svg>
                            <span class="ml-1">79%</span>
                            <span class="mx-2">|</span>
                            <span>Jan 20, 2023</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Animation, Fantasy, Adventure
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/Inisherin.jpg" alt="Inisherin"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">The Banshees of Inisherin</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star"/>
                                </g>
                            </svg>
                            <span class="ml-1">75%</span>
                            <span class="mx-2">|</span>
                            <span>Jan 26, 2023</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Drama, Comedy
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/AManCalledOtto.jpg" alt="AManCalledOtto"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">A Man Called Otto</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star"/>
                                </g>
                            </svg>
                            <span class="ml-1">74%</span>
                            <span class="mx-2">|</span>
                            <span>Jan 13, 2023</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Comedy, Drama
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/Plane.jpg" alt="Plane"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Plane</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <path
                                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                        data-name="star"/>
                                </g>
                            </svg>
                            <span class="ml-1">66%</span>
                            <span class="mx-2">|</span>
                            <span>Jan 13, 2023</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="img/OperationFortune.jpg" alt="OperationFortune:RusedeGuerre"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Operation Fortune: Ruse de Guerre</a>
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
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
