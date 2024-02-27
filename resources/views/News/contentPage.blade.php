<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Aggregator | content</title>
    <link rel="icon" href="favicon.ico">
    <link href="{{ asset('resources/css/style.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/resources/css/button.css">
</head>
<body
    x-data="{ page: 'blog-single', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'b eh': darkMode === true}">
<!-- ===== Navbar Start ===== -->
<x-navbar.home-navbar/>
<!-- ===== Navbar End ===== -->

<main>
    <!-- ===== Blog Single Start ===== -->
    <section class="gj qp gr hj rp hr">
        <div class="bb ze ki xn 2xl:ud-px-0">
            <div class="tc sf yo zf kq">
                <div class="ro">
                    <div class="animate_top rounded-md shadow-solid-13 bg-transparent p-7.5 md:p-10">
                        <img src="{{ $data[1]->image }}" alt="Blog"/>

                        <h2 class="ek vj 2xl:ud-text-title-lg kk wm nb gb">{{ $data[1]->title }}</h2>

                        <ul class="tc uf cg 2xl:ud-gap-15 fb">
                            <li><span class="rc kk wm">Author: </span> Devid Cleriya</li>
                            <li><span class="rc kk wm">Published On: </span>{{ $data[1]->created_at->format('d M Y') }}
                            </li>
                            <li><span class="rc kk wm">Category: </span>{{ $data[1]->category->name }}</li>
                        </ul>

                        <p class="ob">
                            {{ $data[1]->description }}
                        </p>
                        <h2 class="ek vj 2xl:ud-text-title-lg kk wm nb qb">The Comments</h2>
                        <section class="bg-transparent py-8 lg:py-16 antialiased">
                            <div class="max-w-2xl px-4">
                                <div class="flex justify-between items-center mb-6">
                                    <h2 class="ek vj xl:ud-text-title-lg kk wm nb qb">Discussion (20)</h2>
                                </div>
                                <form class="mb-6">
                                    <div
                                        class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                                        <label for="comment" class="sr-only">Your comment</label>
                                        <textarea id="comment" rows="6"
                                                  class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                                                  placeholder="Write a comment..." required></textarea>
                                    </div>
                                    <button type="submit" class="post-comments">
                                        post comment
                                    </button>
                                </form>
                                <article class="p-6 text-base bg-white  rounded-lg dark:bg-gray-900">
                                    <footer class="flex justify-between items-center mb-2">
                                        <div class="flex items-center">
                                            <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold">
                                                <img
                                                    class="mr-2 w-6 h-6 rounded-full"
                                                    src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                                    alt="Michael Gough">Michael Gough</p>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                <time pubdate datetime="2022-02-08"
                                                      title="February 8th, 2022">Feb. 8, 2022
                                                </time>
                                            </p>
                                        </div>
                                        <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                                type="button">
                                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                 fill="currentColor" viewBox="0 0 16 3">
                                                <path
                                                    d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                            </svg>
                                            <span class="sr-only">Comment settings</span>
                                        </button>
                                        <!-- Dropdown menu -->
                                        <div id="dropdownComment1"
                                             class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                aria-labelledby="dropdownMenuIconHorizontalButton">
                                                <li>
                                                    <a href="#"
                                                       class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                       class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                       class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </footer>
                                    <p class="text-gray-500 dark:text-gray-400">Very straight-to-point article. Really
                                        worth time reading. Thank you! But tools are just the
                                        instruments for the UX designers. The knowledge of the design tools are as
                                        important as the
                                        creation of the design strategy.</p>
                                    <div class="flex items-center mt-4 space-x-4">
                                        <button type="button"
                                                class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                                            <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                                            </svg>
                                            Reply
                                        </button>
                                    </div>
                                </article>
                                <article class="p-6 text-base bg-white mt-4 rounded-lg dark:bg-gray-900">
                                    <footer class="flex justify-between items-center mb-2">
                                        <div class="flex items-center">
                                            <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold">
                                                <img
                                                    class="mr-2 w-6 h-6 rounded-full"
                                                    src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                                    alt="Michael Gough">Michael Gough</p>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                <time pubdate datetime="2022-02-08"
                                                      title="February 8th, 2022">Feb. 8, 2022
                                                </time>
                                            </p>
                                        </div>
                                        <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                                type="button">
                                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                 fill="currentColor" viewBox="0 0 16 3">
                                                <path
                                                    d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                            </svg>
                                            <span class="sr-only">Comment settings</span>
                                        </button>
                                        <!-- Dropdown menu -->
                                        <div id="dropdownComment1"
                                             class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                aria-labelledby="dropdownMenuIconHorizontalButton">
                                                <li>
                                                    <a href="#"
                                                       class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                       class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                       class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </footer>
                                    <p class="text-gray-500 dark:text-gray-400">Very straight-to-point article. Really
                                        worth time reading. Thank you! But tools are just the
                                        instruments for the UX designers. The knowledge of the design tools are as
                                        important as the
                                        creation of the design strategy.</p>
                                    <div class="flex items-center mt-4 space-x-4">
                                        <button type="button"
                                                class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                                            <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                                            </svg>
                                            Reply
                                        </button>
                                    </div>
                                </article>
                            </div>
                        </section>

                    </div>
                </div>

                <div class="jn/2 so">
                    <div class="animate_top fb">
                        <form action="#">
                            <div class="i">
                                <input
                                    type="text"
                                    placeholder="Search Here..."
                                    class="vd sm _g ch pm vk xm rg gm dm/40 dn/40 li mi"
                                />

                                <button class="h r q _h">
                                    <svg
                                        class="th ul ml il"
                                        width="21"
                                        height="21"
                                        viewBox="0 0 21 21"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M16.031 14.617L20.314 18.899L18.899 20.314L14.617 16.031C13.0237 17.3082 11.042 18.0029 9 18C4.032 18 0 13.968 0 9C0 4.032 4.032 0 9 0C13.968 0 18 4.032 18 9C18.0029 11.042 17.3082 13.0237 16.031 14.617ZM14.025 13.875C15.2941 12.5699 16.0029 10.8204 16 9C16 5.132 12.867 2 9 2C5.132 2 2 5.132 2 9C2 12.867 5.132 16 9 16C10.8204 16.0029 12.5699 15.2941 13.875 14.025L14.025 13.875Z"
                                        />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="animate_top fb">
                        <h4 class="tj kk wm qb">Categories</h4>

                        <ul>
                            @foreach($data[0] as $category)
                                <li class="ql vb du-ease-in-out il xl">
                                    <a>{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="animate_top">
                        <h4 class="tj kk wm qb">Related Posts</h4>

                        @foreach($data[2] as $lastPosts)
                            <div>
                                <div class="tc mt-2 fg 2xl:ud-gap-6">
                                    <img src="{{ $lastPosts->image }}" class="w-20 h-10" alt="Blog"/>
                                    <h5 class="font-bold">
                                        <a href="{{ route('show.content', ['id' => $lastPosts->id]) }}"> {{ substr($lastPosts->title, 0,  45) }}
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== Blog Single End ===== -->

    <!-- ===== CTA Start ===== -->
    <section class="i pg gh ji">
        <!-- Bg Shape -->
        <img class="h p q" src="/resources/images/shape-16.svg" alt="Bg Shape"/>

        <div class="bb ye i z-10 ki xn dr">
            <div class="tc uf sn tn un gg">
                <div class="animate_left to/2">
                    <h2 class="fk vj zp pr lk ac">
                        Join with 5000+ Startups Growing with Base.
                    </h2>
                    <p class="lk">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis nibh lorem. Duis sed odio
                        lorem. In a efficitur leo. Ut venenatis rhoncus.
                    </p>
                </div>
                <div class="animate_right bf">
                    <a href="#" class="vc ek kk hh rg ol il cm gi hi">
                        Get Started Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CTA End ===== -->
</main>
<!-- ===== Footer Start ===== -->
<footer>
    <div class="bb ze ki xn 2xl:ud-px-0">
        <!-- Footer Top -->
        <div class="ji gp">
            <div class="tc uf ap gg fp">
                <div class="animate_top zd/2 to/4">
                    <a href="index.html">
                        <img src="/resources/images/logo-light.svg" alt="Logo" class="om"/>
                        <img src="/resources/images/logo-dark.svg" alt="Logo" class="xc nm"/>
                    </a>

                    <p class="lc fb">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                    <ul class="tc wf cg">
                        <li>
                            <a href="#">
                                <svg class="vh ul cl il" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_48_1499)">
                                        <path
                                            d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47 14 5.5 16 5.5H17.5V2.14C17.174 2.097 15.943 2 14.643 2C11.928 2 10 3.657 10 6.7V9.5H7V13.5H10V22H14V13.5Z"
                                            fill=""/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_48_1499">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg class="vh ul cl il" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_48_1502)">
                                        <path
                                            d="M22.162 5.65593C21.3985 5.99362 20.589 6.2154 19.76 6.31393C20.6337 5.79136 21.2877 4.96894 21.6 3.99993C20.78 4.48793 19.881 4.82993 18.944 5.01493C18.3146 4.34151 17.4803 3.89489 16.5709 3.74451C15.6615 3.59413 14.7279 3.74842 13.9153 4.18338C13.1026 4.61834 12.4564 5.30961 12.0771 6.14972C11.6978 6.98983 11.6067 7.93171 11.818 8.82893C10.1551 8.74558 8.52832 8.31345 7.04328 7.56059C5.55823 6.80773 4.24812 5.75098 3.19799 4.45893C2.82628 5.09738 2.63095 5.82315 2.63199 6.56193C2.63199 8.01193 3.36999 9.29293 4.49199 10.0429C3.828 10.022 3.17862 9.84271 2.59799 9.51993V9.57193C2.59819 10.5376 2.93236 11.4735 3.54384 12.221C4.15532 12.9684 5.00647 13.4814 5.95299 13.6729C5.33661 13.84 4.6903 13.8646 4.06299 13.7449C4.32986 14.5762 4.85 15.3031 5.55058 15.824C6.25117 16.345 7.09712 16.6337 7.96999 16.6499C7.10247 17.3313 6.10917 17.8349 5.04687 18.1321C3.98458 18.4293 2.87412 18.5142 1.77899 18.3819C3.69069 19.6114 5.91609 20.2641 8.18899 20.2619C15.882 20.2619 20.089 13.8889 20.089 8.36193C20.089 8.18193 20.084 7.99993 20.076 7.82193C20.8949 7.2301 21.6016 6.49695 22.163 5.65693L22.162 5.65593Z"
                                            fill=""
                                        />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_48_1502">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg class="vh ul cl il" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_48_1505)">
                                        <path
                                            d="M6.94 5.00002C6.93974 5.53046 6.72877 6.03906 6.35351 6.41394C5.97825 6.78883 5.46944 6.99929 4.939 6.99902C4.40857 6.99876 3.89997 6.78779 3.52508 6.41253C3.1502 6.03727 2.93974 5.52846 2.94 4.99802C2.94027 4.46759 3.15124 3.95899 3.5265 3.5841C3.90176 3.20922 4.41057 2.99876 4.941 2.99902C5.47144 2.99929 5.98004 3.21026 6.35492 3.58552C6.72981 3.96078 6.94027 4.46959 6.94 5.00002ZM7 8.48002H3V21H7V8.48002ZM13.32 8.48002H9.34V21H13.28V14.43C13.28 10.77 18.05 10.43 18.05 14.43V21H22V13.07C22 6.90002 14.94 7.13002 13.28 10.16L13.32 8.48002Z"
                                            fill=""
                                        />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_48_1505">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg class="vh ul cl il" width="24" height="24" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_48_1508)">
                                        <path
                                            d="M7.443 5.3501C8.082 5.3501 8.673 5.4001 9.213 5.5481C9.70301 5.63814 10.1708 5.82293 10.59 6.0921C10.984 6.3391 11.279 6.6861 11.475 7.1311C11.672 7.5761 11.77 8.1211 11.77 8.7141C11.77 9.4071 11.623 10.0001 11.279 10.4451C10.984 10.8911 10.492 11.2861 9.902 11.5831C10.738 11.8311 11.377 12.2761 11.77 12.8691C12.164 13.4631 12.41 14.2051 12.41 15.0461C12.41 15.7391 12.262 16.3321 12.016 16.8271C11.77 17.3221 11.377 17.7671 10.934 18.0641C10.4528 18.3825 9.92084 18.6165 9.361 18.7561C8.771 18.9051 8.181 19.0041 7.591 19.0041H1V5.3501H7.443ZM7.049 10.8901C7.59 10.8901 8.033 10.7421 8.377 10.4951C8.721 10.2481 8.869 9.8021 8.869 9.2581C8.869 8.9611 8.819 8.6641 8.721 8.4671C8.623 8.2691 8.475 8.1201 8.279 7.9721C8.082 7.8731 7.885 7.7741 7.639 7.7251C7.393 7.6751 7.148 7.6751 6.852 7.6751H4V10.8911H7.05L7.049 10.8901ZM7.197 16.7281C7.492 16.7281 7.787 16.6781 8.033 16.6291C8.28138 16.5819 8.51628 16.4805 8.721 16.3321C8.92139 16.1873 9.08903 16.002 9.213 15.7881C9.311 15.5411 9.41 15.2441 9.41 14.8981C9.41 14.2051 9.213 13.7101 8.82 13.3641C8.426 13.0671 7.885 12.9191 7.246 12.9191H4V16.7291H7.197V16.7281ZM16.689 16.6781C17.082 17.0741 17.672 17.2721 18.459 17.2721C19 17.2721 19.492 17.1241 19.885 16.8771C20.279 16.5801 20.525 16.2831 20.623 15.9861H23.033C22.639 17.1731 22.049 18.0141 21.263 18.5581C20.475 19.0531 19.541 19.3501 18.41 19.3501C17.6864 19.3523 16.9688 19.2179 16.295 18.9541C15.6887 18.7266 15.148 18.3529 14.721 17.8661C14.2643 17.4107 13.9267 16.8498 13.738 16.2331C13.492 15.5901 13.393 14.8981 13.393 14.1061C13.393 13.3641 13.492 12.6721 13.738 12.0281C13.9745 11.4082 14.3245 10.8378 14.77 10.3461C15.213 9.9011 15.754 9.5061 16.344 9.2581C17.0007 8.99416 17.7022 8.85969 18.41 8.8621C19.246 8.8621 19.984 9.0111 20.623 9.3571C21.263 9.7031 21.754 10.0991 22.148 10.6931C22.5499 11.2636 22.8494 11.8998 23.033 12.5731C23.131 13.2651 23.18 13.9581 23.131 14.7491H16C16 15.5411 16.295 16.2831 16.689 16.6791V16.6781ZM19.787 11.4841C19.443 11.1381 18.902 10.9401 18.262 10.9401C17.82 10.9401 17.475 11.0391 17.18 11.1871C16.885 11.3361 16.689 11.5341 16.492 11.7321C16.311 11.9234 16.1912 12.1643 16.148 12.4241C16.098 12.6721 16.049 12.8691 16.049 13.0671H20.475C20.377 12.3251 20.131 11.8311 19.787 11.4841V11.4841ZM15.459 6.2901H20.967V7.6261H15.46V6.2901H15.459Z"
                                        />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_48_1508">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="vd ro tc sf rn un gg vn">
                    <div class="animate_top">
                        <h4 class="kk wm tj ec">Quick Links</h4>

                        <ul>
                            <li><a href="#" class="sc xl vb">Home</a></li>
                            <li><a href="#" class="sc xl vb">Product</a></li>
                            <li>
                                <a href="#" class="sc xl vb">
                                    Careers
                                    <span class="sc ek uj lk nh rg zi _i nc">Hiring</span>
                                </a>
                            </li>
                            <li><a href="#" class="sc xl vb">Pricing</a></li>
                        </ul>
                    </div>

                    <div class="animate_top">
                        <h4 class="kk wm tj ec">Services</h4>

                        <ul>
                            <li><a href="#" class="sc xl vb">Web Development</a></li>
                            <li><a href="#" class="sc xl vb">Graphics Design</a></li>
                            <li><a href="#" class="sc xl vb">Digital Marketing</a></li>
                            <li><a href="#" class="sc xl vb">Ui/Ux Design</a></li>
                        </ul>
                    </div>

                    <div class="animate_top">
                        <h4 class="kk wm tj ec">Support</h4>

                        <ul>
                            <li><a href="#" class="sc xl vb">Company</a></li>
                            <li><a href="#" class="sc xl vb">Press media</a></li>
                            <li><a href="#" class="sc xl vb">Our Blog</a></li>
                            <li><a href="#" class="sc xl vb">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="animate_top">
                        <h4 class="kk wm tj ec">Newsletter</h4>
                        <p class="ac qe">Subscribe to receive future updates</p>

                        <form action="https://formbold.com/s/unique_form_id" method="POST">
                            <div class="i">
                                <input
                                    type="text"
                                    placeholder="Email address"
                                    class="vd sm _g ch pm vk xm rg gm dm dn gi mi"
                                />

                                <button class="h q fi">
                                    <svg class="th vm ul" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_48_1487)">
                                            <path
                                                d="M3.1175 1.17318L18.5025 9.63484C18.5678 9.67081 18.6223 9.72365 18.6602 9.78786C18.6982 9.85206 18.7182 9.92527 18.7182 9.99984C18.7182 10.0744 18.6982 10.1476 18.6602 10.2118C18.6223 10.276 18.5678 10.3289 18.5025 10.3648L3.1175 18.8265C3.05406 18.8614 2.98262 18.8792 2.91023 18.8781C2.83783 18.8769 2.76698 18.857 2.70465 18.8201C2.64232 18.7833 2.59066 18.7308 2.55478 18.6679C2.51889 18.6051 2.50001 18.5339 2.5 18.4615V1.53818C2.50001 1.46577 2.51889 1.39462 2.55478 1.33174C2.59066 1.26885 2.64232 1.2164 2.70465 1.17956C2.76698 1.14272 2.83783 1.12275 2.91023 1.12163C2.98262 1.12051 3.05406 1.13828 3.1175 1.17318ZM4.16667 10.8332V16.3473L15.7083 9.99984L4.16667 3.65234V9.16651H8.33333V10.8332H4.16667Z"
                                                fill=""
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_48_1487">
                                                <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top -->

        <!-- Footer Bottom -->
        <div class="bh ch pm tc uf sf yo wf xf ap cg fp bj">
            <div class="animate_top">
                <ul class="tc wf gg">
                    <li><a href="#" class="xl">English</a></li>
                    <li><a href="#" class="xl">Privacy Policy</a></li>
                    <li><a href="#" class="xl">Support</a></li>
                </ul>
            </div>

            <div class="animate_top">
                <p>&copy; 2025 Base. All rights reserved</p>
            </div>
        </div>
        <!-- Footer Bottom -->
    </div>
</footer>

<!-- ===== Footer End ===== -->

<!-- ====== Back To Top Start ===== -->
<button
    class="xc wf xf ie ld vg sr gh tr g sa ta _a"
    @click="window.scrollTo({top: 0, behavior: 'smooth'})"
    @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false"
    :class="{ 'uc' : scrollTop }"
>
    <svg class="svgIcon" viewBox="0 0 384 512">
        <path
            d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"
        ></path>
    </svg>
</button>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<!-- ====== Back To Top End ===== -->
<script defer src="/resources/js/bundle.js"></script>
</body>
</html>
