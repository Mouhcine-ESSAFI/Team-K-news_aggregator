

<main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
    <div class="space-y-2 text-center">
        <h2 class="text-3xl font-bold">All Rss</h2>
        <p class="font-serif text-sm dark:text-gray-400">Here you can add and see all rss.</p>
    </div>
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex  flex-col justify-between lg:flex-row">
            <x-forms.rss-form :categories="$categories"/>

            <x-tables.rss-table/>
        </div>
    </div>
</main>
