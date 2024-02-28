<header class="g s r vd ya cj" :class="{ 'hh sm _k dj bl ll' : stickyMenu }"
        @scroll.window="stickyMenu = (window.pageYOffset > 20) ? true : false">
    <div class="bb ze ki xn 2xl:ud-px-0 oo wf yf i">
        <div class="vd to/4 tc wf yf">
            <a href="/">
                <img class="om" src="/resources/images/logo-light.svg" alt="Logo Light"/>
                <img class="xc nm" src="/resources/images/logo-dark.svg" alt="Logo Dark"/>
            </a>

            <!-- Hamburger Toggle BTN -->
            <button class="po rc" @click="navigationOpen = !navigationOpen">
          <span class="rc i pf re pd">
            <span class="du-block h q vd yc">
              <span class="rc i r s eh um tg te rd eb ml jl dl" :class="{ 'ue el': !navigationOpen }"></span>
              <span class="rc i r s eh um tg te rd eb ml jl fl" :class="{ 'ue qr': !navigationOpen }"></span>
              <span class="rc i r s eh um tg te rd eb ml jl gl" :class="{ 'ue hl': !navigationOpen }"></span>
            </span>
            <span class="du-block h q vd yc lf">
              <span class="rc eh um tg ml jl el h na r ve yc" :class="{ 'sd dl': !navigationOpen }"></span>
              <span class="rc eh um tg ml jl qr h s pa vd rd" :class="{ 'sd rr': !navigationOpen }"></span>
            </span>
          </span>
            </button>
            <!-- Hamburger Toggle BTN -->
        </div>

        <div class="vd wo/4 sd qo f ho oo wf yf" :class="{ 'd hh rm sr td ud qg ug jc yh': navigationOpen }">
            <nav>
                <ul class="tc _o sf yo cg ep">
                    <li><a href="/" class="text-gray-900"
                           :class="{'ts': darkMode === true }">Home</a></li>
                    <li><a href="/trends" :class="{'ts': darkMode === true}" class="text-gray-900">Trends</a></li>
                    <li><a href="/#features" :class="{'ts': darkMode === true}" class="text-gray-900">Features</a></li>
                    <li><a href="/favorites" :class="{'ts': darkMode === true}" class="text-gray-900">Favorites</a></li>
                    <li><a href="/collection" :class="{'ts': darkMode === true}" class="text-gray-900">Collection</a></li>
                    <li><a href="/#support" :class="{'ts': darkMode === true}" class="text-gray-900">Support</a></li>

                </ul>
            </nav>

            <div class="tc wf ig pb no">
                <div class="pc h io pa ra" :class="navigationOpen ? '!-ud-visible' : 'd'">
                    <label class="rc ab i">
                        <input type="checkbox" :value="darkMode" @change="darkMode = !darkMode" class="pf vd yc uk h r za ab"/>
                        <!-- Icon Sun -->
                        <svg :class="{ 'wn' : page === 'home', 'xh' : page === 'home' && stickyMenu }" class="th om" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- ... (your sun icon path) ... -->
                        </svg>
                        <!-- Icon Sun -->
                        <img class="xc nm" src="/resources/images/icon-moon.svg" alt="Moon"/>
                    </label>
                </div>

                @auth
                    <a href="/profil" class="beautiful-button">
                    Profile
                    </a>

{{--                    <form href="{{ route('profil') }}"  method="POST" class="beautiful-button">--}}
{{--                        <button type="submit" >Profile</button>--}}

{{--                    </form>--}}
                    <form action="{{ route('logout') }}" method="POST" class="SignUp-button" >
                        @csrf
                        <button type="submit" >Logout</button>
                    </form>
                @else
                    <a href="/login" class="beautiful-button">
                        Sign In
                    </a>
                    <a href="/register" class="SignUp-button">
                        Sign Up
                    </a>
                @endauth
            </div>

        </div>
    </div>
</header>
