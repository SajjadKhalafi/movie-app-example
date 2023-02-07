<div class="container mx-auto px-4 pt-16"
     style="
            background-image: url('https://www.themoviedb.org/assets/2/v4/misc/trending-bg-39afc2a5f77e31d469b25c187814c0a2efef225494c038098d62317d923f8415.svg');
            background-position: 50% 200px;
            background-size: 1300px;
            background-repeat: no-repeat;
        ">
    <div class="trending" x-data="{ isOpen: true, trends: {{ $dayTrends }} }">
        <div class="inline-flex rounded-md shadow-sm" role="group">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold mr-8">
                Trending
            </h2>
            <div class="inline-flex rounded-md shadow-sm">
                <x-landing-buttons @click.prevent="isOpen = true , trends = {{ $dayTrends }} ">
                    Today
                </x-landing-buttons>
                <x-landing-buttons @click.prevent="isOpen = true , trends = {{ $weekTrends }} ">
                    This Week
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
