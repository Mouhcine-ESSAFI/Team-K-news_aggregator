<div class="font-sans text-gray-900 antialiased bg-gray-100">
    <div class="h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#f8f4f3]">


        <div class="w-1/2 my-6 px-6 py-12 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('preferences.add') }}">
                @csrf

                <div class="py-20">
                    <center>
                        <span class="text-2xl font-semibold">Preferences</span>
                    </center>
                </div>


                <div class="">
                    <label class="block font-medium text-sm text-gray-700" for="preferences" value="preferences" >
                    <div class=" flex rounded border-2 p-1">
                        <input id="preferences" type="text" name="preferences" placeholder="preferences" style="border: none"  class = 'w-full px-4 py-2.5 text-sm '>
                        <div class="absolute mt-10 bg-white rounded-md shadow-lg hidden"  id="dropdownContent">

                            <div class="bg-gray-100 border p-2 border-gray-300 w-full outline-none flex flex-col">
                                @forelse ($categories as $category)
                                <label><input type="checkbox" name="selected_tags[]" multiple value="{{ $category['id'] }}" class="mr-5">{{ $category['name'] }}</label>
                                @empty
                                <label><input type="checkbox" name="selected_tags[]" multiple value="" class="mr-5">Aucune category trouvée</label>
                            @endforelse
                            </div>
                        </div>
                        <div class="mr-10 pt-2">
                            <button type="button" onclick="toggleDropdown()">^_^</button>
                        </div>

                    </div>
                </div>

                <div class="flex items-center justify-end mt-4 pb-4">

                    <button type="submit" class ='py-2 bg-blue-300 border border-transparent rounded-md font-semibold text-xs w-full text-center uppercase tracking-widest hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'>
                       Save
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function toggleDropdown()
    {
          var dropdown = document.getElementById('dropdownContent');
          dropdown.classList.toggle('hidden');
    }

  </script>
