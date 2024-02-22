<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Base - Tailwind CSS Startup Template</title>
    <link rel="icon" href="favicon.ico">
    <link href="./resources/css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet"/>

    <!-- Inclure la bibliothèque Slick Carousel -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>

</head>

<body x-data="{ page: 'home', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
      x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
      :class="{'b eh': darkMode === true}">
<!-- ===== Header Start ===== -->

<!-- ===== Footer Start ===== -->
<x-navbar.home-navbar/>
<!-- ===== Footer End ===== -->

<!-- ===== Home Start ===== -->

<main>
    <!-- ===== Hero Start ===== -->
    <section class=" pt-32 i">
        <div
            x-data="{ sectionTitle: `Category 1`}">
            <div class="pl-24">
                <h2 x-text="sectionTitle" class="text-4xl  fk vj pr kk wm on/5 gq/2">
                </h2>
            </div>


        </div>
        <!-- component -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


        <!-- component -->
        <div class="w-5/6 pt-4 mx-auto carousel">
            <div class="max-w-md  shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                <div class="">
                    <div class="">
                        <div class="relative h-62 w-full mb-3">
                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                <button
                                    class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"
                                alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap ">
                                <div class="flex flex-col w-full justify-between min-w-0 ">
                                    <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3">Title</h2>

                                    <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                        Lorem ipsum
                                        is placeholder text commonly used in the graphic Lorem ipsum
                                        is text commonly ...</p>
                                </div>
                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                <button
                                    class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                    <span>View More</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-md shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                <div class="">
                    <div class="">
                        <div class="relative h-62 w-full mb-3">
                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                <button
                                    class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"
                                alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap ">
                                <div class="flex flex-col w-full justify-between min-w-0 ">
                                    <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3">Title</h2>

                                    <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                        Lorem ipsum
                                        is placeholder text commonly used in the graphic Lorem ipsum
                                        is text commonly ...</p>
                                </div>
                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                <button
                                    class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                    <span>View More</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-md shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                <div class="">
                    <div class="">
                        <div class="relative h-62 w-full mb-3">
                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                <button
                                    class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"
                                alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap ">
                                <div class="flex flex-col w-full justify-between min-w-0 ">
                                    <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3">Title</h2>

                                    <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                        Lorem ipsum
                                        is placeholder text commonly used in the graphic Lorem ipsum
                                        is text commonly ...</p>
                                </div>
                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                <button
                                    class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                    <span>View More</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-md shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                <div class="">
                    <div class="">
                        <div class="relative h-62 w-full mb-3">
                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                <button
                                    class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"
                                alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap ">
                                <div class="flex flex-col w-full justify-between min-w-0 ">
                                    <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3">Title</h2>

                                    <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                        Lorem ipsum
                                        is placeholder text commonly used in the graphic Lorem ipsum
                                        is text commonly ...</p>
                                </div>
                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                <button
                                    class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                    <span>View More</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-md shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                <div class="">
                    <div class="">
                        <div class="relative h-62 w-full mb-3">
                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                <button
                                    class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"
                                alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap ">
                                <div class="flex flex-col w-full justify-between min-w-0 ">
                                    <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3">Title</h2>

                                    <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                        Lorem ipsum
                                        is placeholder text commonly used in the graphic Lorem ipsum
                                        is text commonly ...</p>
                                </div>
                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                <button
                                    class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                    <span>View More</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-md shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                <div class="">
                    <div class="">
                        <div class="relative h-62 w-full mb-3">
                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                <button
                                    class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"
                                alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap ">
                                <div class="flex flex-col w-full justify-between min-w-0 ">
                                    <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3">Title</h2>

                                    <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                        Lorem ipsum
                                        is placeholder text commonly used in the graphic Lorem ipsum
                                        is text commonly ...</p>
                                </div>
                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                <button
                                    class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                    <span>View More</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class=" pt-32 i">
        <div
            x-data="{ sectionTitle: `Category 2`}">
            <div class="pl-24">
                <h2 x-text="sectionTitle" class="text-4xl  fk vj pr kk wm on/5 gq/2">
                </h2>
            </div>


        </div>
        <!-- component -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


        <!-- component -->
        <div class="w-5/6 pt-4 mx-auto carousel">
            <div class="max-w-md  shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                <div class="">
                    <div class="">
                        <div class="relative h-62 w-full mb-3">
                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                <button
                                    class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"
                                alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap ">
                                <div class="flex flex-col w-full justify-between min-w-0 ">
                                    <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3">Title</h2>

                                    <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                        Lorem ipsum
                                        is placeholder text commonly used in the graphic Lorem ipsum
                                        is text commonly ...</p>
                                </div>
                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                <button
                                    class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                    <span>View More</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-md shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                <div class="">
                    <div class="">
                        <div class="relative h-62 w-full mb-3">
                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                <button
                                    class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"
                                alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap ">
                                <div class="flex flex-col w-full justify-between min-w-0 ">
                                    <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3">Title</h2>

                                    <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                        Lorem ipsum
                                        is placeholder text commonly used in the graphic Lorem ipsum
                                        is text commonly ...</p>
                                </div>
                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                <button
                                    class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                    <span>View More</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-md shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                <div class="">
                    <div class="">
                        <div class="relative h-62 w-full mb-3">
                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                <button
                                    class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"
                                alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap ">
                                <div class="flex flex-col w-full justify-between min-w-0 ">
                                    <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3">Title</h2>

                                    <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                        Lorem ipsum
                                        is placeholder text commonly used in the graphic Lorem ipsum
                                        is text commonly ...</p>
                                </div>
                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                <button
                                    class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                    <span>View More</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-md shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                <div class="">
                    <div class="">
                        <div class="relative h-62 w-full mb-3">
                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                <button
                                    class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"
                                alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap ">
                                <div class="flex flex-col w-full justify-between min-w-0 ">
                                    <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3">Title</h2>

                                    <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                        Lorem ipsum
                                        is placeholder text commonly used in the graphic Lorem ipsum
                                        is text commonly ...</p>
                                </div>
                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                <button
                                    class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                    <span>View More</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-md shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                <div class="">
                    <div class="">
                        <div class="relative h-62 w-full mb-3">
                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                <button
                                    class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"
                                alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap ">
                                <div class="flex flex-col w-full justify-between min-w-0 ">
                                    <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3">Title</h2>

                                    <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                        Lorem ipsum
                                        is placeholder text commonly used in the graphic Lorem ipsum
                                        is text commonly ...</p>
                                </div>
                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                <button
                                    class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                    <span>View More</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-md shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                <div class="">
                    <div class="">
                        <div class="relative h-62 w-full mb-3">
                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                <button
                                    class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"
                                alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap ">
                                <div class="flex flex-col w-full justify-between min-w-0 ">
                                    <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3">Title</h2>

                                    <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                        Lorem ipsum
                                        is placeholder text commonly used in the graphic Lorem ipsum
                                        is text commonly ...</p>
                                </div>
                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                <button
                                    class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                    <span>View More</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class=" pt-32 i">
        <div
            x-data="{ sectionTitle: `Category 3`}">
            <div class="pl-24">
                <h2 x-text="sectionTitle" class="text-4xl  fk vj pr kk wm on/5 gq/2">
                </h2>
            </div>


        </div>
        <!-- component -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


        <!-- component -->
        <div class="w-5/6 pt-4 mx-auto carousel">
            <div class="max-w-md  shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                <div class="">
                    <div class="">
                        <div class="relative h-62 w-full mb-3">
                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                <button
                                    class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"
                                alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap ">
                                <div class="flex flex-col w-full justify-between min-w-0 ">
                                    <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3">Title</h2>

                                    <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                        Lorem ipsum
                                        is placeholder text commonly used in the graphic Lorem ipsum
                                        is text commonly ...</p>
                                </div>
                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                <button
                                    class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                    <span>View More</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-md shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                <div class="">
                    <div class="">
                        <div class="relative h-62 w-full mb-3">
                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                <button
                                    class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"
                                alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap ">
                                <div class="flex flex-col w-full justify-between min-w-0 ">
                                    <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3">Title</h2>

                                    <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                        Lorem ipsum
                                        is placeholder text commonly used in the graphic Lorem ipsum
                                        is text commonly ...</p>
                                </div>
                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                <button
                                    class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                    <span>View More</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-md shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                <div class="">
                    <div class="">
                        <div class="relative h-62 w-full mb-3">
                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                <button
                                    class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"
                                alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap ">
                                <div class="flex flex-col w-full justify-between min-w-0 ">
                                    <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3">Title</h2>

                                    <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                        Lorem ipsum
                                        is placeholder text commonly used in the graphic Lorem ipsum
                                        is text commonly ...</p>
                                </div>
                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                <button
                                    class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                    <span>View More</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-md shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                <div class="">
                    <div class="">
                        <div class="relative h-62 w-full mb-3">
                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                <button
                                    class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"
                                alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap ">
                                <div class="flex flex-col w-full justify-between min-w-0 ">
                                    <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3">Title</h2>

                                    <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                        Lorem ipsum
                                        is placeholder text commonly used in the graphic Lorem ipsum
                                        is text commonly ...</p>
                                </div>
                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                <button
                                    class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                    <span>View More</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-md shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                <div class="">
                    <div class="">
                        <div class="relative h-62 w-full mb-3">
                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                <button
                                    class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"
                                alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap ">
                                <div class="flex flex-col w-full justify-between min-w-0 ">
                                    <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3">Title</h2>

                                    <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                        Lorem ipsum
                                        is placeholder text commonly used in the graphic Lorem ipsum
                                        is text commonly ...</p>
                                </div>
                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                <button
                                    class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                    <span>View More</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-md shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                <div class="">
                    <div class="">
                        <div class="relative h-62 w-full mb-3">
                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                <button
                                    class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"
                                alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap ">
                                <div class="flex flex-col w-full justify-between min-w-0 ">
                                    <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3">Title</h2>

                                    <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                        Lorem ipsum
                                        is placeholder text commonly used in the graphic Lorem ipsum
                                        is text commonly ...</p>
                                </div>
                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                <button
                                    class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                    <span>View More</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class=" pt-32 i">
        <div
            x-data="{ sectionTitle: `Category 4`}">
            <div class="pl-24">
                <h2 x-text="sectionTitle" class="text-4xl  fk vj pr kk wm on/5 gq/2">
                </h2>
            </div>


        </div>
        <!-- component -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


        <!-- component -->
        <div class="w-5/6 pt-4 mx-auto carousel">
            <div class="max-w-md  shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                <div class="">
                    <div class="">
                        <div class="relative h-62 w-full mb-3">
                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                <button
                                    class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"
                                alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap ">
                                <div class="flex flex-col w-full justify-between min-w-0 ">
                                    <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3">Title</h2>

                                    <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                        Lorem ipsum
                                        is placeholder text commonly used in the graphic Lorem ipsum
                                        is text commonly ...</p>
                                </div>
                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                <button
                                    class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                    <span>View More</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-md shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                <div class="">
                    <div class="">
                        <div class="relative h-62 w-full mb-3">
                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                <button
                                    class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"
                                alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap ">
                                <div class="flex flex-col w-full justify-between min-w-0 ">
                                    <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3">Title</h2>

                                    <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                        Lorem ipsum
                                        is placeholder text commonly used in the graphic Lorem ipsum
                                        is text commonly ...</p>
                                </div>
                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                <button
                                    class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                    <span>View More</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-md shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                <div class="">
                    <div class="">
                        <div class="relative h-62 w-full mb-3">
                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                <button
                                    class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"
                                alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap ">
                                <div class="flex flex-col w-full justify-between min-w-0 ">
                                    <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3">Title</h2>

                                    <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                        Lorem ipsum
                                        is placeholder text commonly used in the graphic Lorem ipsum
                                        is text commonly ...</p>
                                </div>
                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                <button
                                    class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                    <span>View More</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-md shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                <div class="">
                    <div class="">
                        <div class="relative h-62 w-full mb-3">
                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                <button
                                    class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"
                                alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap ">
                                <div class="flex flex-col w-full justify-between min-w-0 ">
                                    <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3">Title</h2>

                                    <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                        Lorem ipsum
                                        is placeholder text commonly used in the graphic Lorem ipsum
                                        is text commonly ...</p>
                                </div>
                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                <button
                                    class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                    <span>View More</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-md shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                <div class="">
                    <div class="">
                        <div class="relative h-62 w-full mb-3">
                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                <button
                                    class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"
                                alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap ">
                                <div class="flex flex-col w-full justify-between min-w-0 ">
                                    <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3">Title</h2>

                                    <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                        Lorem ipsum
                                        is placeholder text commonly used in the graphic Lorem ipsum
                                        is text commonly ...</p>
                                </div>
                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                <button
                                    class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                    <span>View More</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-md shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                <div class="">
                    <div class="">
                        <div class="relative h-62 w-full mb-3">
                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                <button
                                    class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"
                                alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap ">
                                <div class="flex flex-col w-full justify-between min-w-0 ">
                                    <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3">Title</h2>

                                    <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                        Lorem ipsum
                                        is placeholder text commonly used in the graphic Lorem ipsum
                                        is text commonly ...</p>
                                </div>
                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                <button
                                    class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                    <span>View More</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</main>

<!-- ===== Home End ===== -->


<!-- ===== Footer Start ===== -->
<x-footer.home-footer/>
<!-- ===== Footer End ===== -->

<script>
    //  Pricing Table
    const setup = () => {
        return {
            isNavOpen: false,

            billPlan: 'monthly',

            plans: [
                {
                    name: 'Starter',
                    price: {
                        monthly: 29,
                        annually: 29 * 12 - 199,
                    },
                    features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                },
                {
                    name: 'Growth Plan',
                    price: {
                        monthly: 59,
                        annually: 59 * 12 - 100,
                    },
                    features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                },
                {
                    name: 'Business',
                    price: {
                        monthly: 139,
                        annually: 139 * 12 - 100,
                    },
                    features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                },
            ],
        };
    };
</script>
<script defer src="./resources/js/bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

<!-- Inclure jQuery (requis pour Slick Carousel) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Inclure la bibliothèque Slick Carousel -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<!-- Script d'initialisation du carrousel -->
<script type="text/javascript">
    $(document).ready(function () {
        $('.carousel').slick({
            slidesToShow: 3, // Affiche trois cartes à la fois
            slidesToScroll: 1, // Défile d'une carte à la fois
            autoplay: true, // Désactiver la lecture automatique
            dots: true, // Afficher les indicateurs de pagination
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2 // Si l'écran est inférieur à 1024px, afficher deux cartes à la fois
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1 // Si l'écran est inférieur à 768px, afficher une carte à la fois
                    }
                }
            ]
        });
    });
</script>
</body>
</html>
