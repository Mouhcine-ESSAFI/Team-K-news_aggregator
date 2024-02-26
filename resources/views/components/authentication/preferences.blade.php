<main>
    <!-- ===== SignIn Form Start ===== -->
    <section class="i pg fh rm ki xn vq gj qp gr hj rp hr">
        <div
            class="animate_top bb af i va sg hh sm vk xm yi _n jp hi ao kp">
            <!-- Bg Border -->
            <span class="rc h r s zd/2 od zg gh"></span>
            <span class="rc h r q zd/2 od xg mh"></span>

            <div class="rj">
                <h2 class="ek ck kk wm xb">Preferences</h2>
                <span class="i rc sj hk xj">
              <span class="rc h s z/2 nd oe rh tm"></span>
              <span class="rc h q z/2 nd oe rh tm"></span>
                    Try to select your preferences.
            </span>
            </div>

            <form class="sb" action="{{ route('preferences.add') }}" method="POST">
                @csrf
                <div class="wb">
                    <div class=" flex rounded p-1">
                        <input id="preferences" type="text" name="preferences" placeholder="preferences"
                               class="vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40">
                        <div class="absolute mt-10 rounded-md shadow-lg hidden" id="dropdownContent">

                            <div class="bg-transparent border p-2 border-gray-300 w-full outline-none flex flex-col">
                                @forelse ($categories as $category)
                                    <label><input type="checkbox" name="selected_tags[]" multiple
                                                  value="{{ $category['id'] }}" class="mr-5">{{ $category['name'] }}
                                    </label>
                                @empty
                                    <label><input type="checkbox" name="selected_tags[]" multiple value="" class="mr-5">Aucune
                                        category trouvée</label>
                                @endforelse
                            </div>
                        </div>
                        <div class="mr-10 pt-2">
                            <button type="button" style="margin-left: 10px" onclick="toggleDropdown()">^_^</button>
                        </div>

                    </div>
                </div>


                <button type="submit" class="bg-blue-800 vd rj ek rc rg gh lk ml il _l gi hi">
                    Save
                </button>
            </form>
        </div>
    </section>
    <!-- ===== SignIn Form End ===== -->
</main>


<script>
    function toggleDropdown() {
        var dropdown = document.getElementById('dropdownContent');
        dropdown.classList.toggle('hidden');
    }

</script>
