<main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
    <section class="py-6 sm:py-12 dark:bg-gray-800 dark:text-gray-100">
        <div class="container p-6 mx-auto space-y-8">
            <!-- Modal toggle -->
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block absolute right-4 text-white bg-black hover:bg-gray focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                Add category
            </button>

            <!-- Main modal -->
           <x-popup.popup-modal/>

            <div class="space-y-2 text-center">
                <h2 class="text-3xl font-bold">All Categories</h2>
                <p class="font-serif text-sm dark:text-gray-400">Here you can add and see all categories.</p>
            </div>
            
            <x-cards.category-cards :categories="$categories"/>
        </div>
    </section>
</main>
