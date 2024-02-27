@extends('layouts.homeLayout')

@section('title')
    Collection
@endsection

@section('content')

    <!-- ===== Home Start ===== -->

    <main>
        {{--    @dd($postsByCategory)--}}
        <!-- ===== Hero Start ===== -->
        @foreach($categories as $category)
            <section class=" pt-32 i">
                <div
                    x-data="{ sectionTitle: `{{ $category->name }}`}">
                    <div class="pl-24">
                        <h2 x-text="sectionTitle" class="text-4xl  fk vj pr kk wm on/5 gq/2">
                        </h2>
                    </div>


                </div>
                <!-- component -->
                <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


                <!-- component -->
                <div class="w-5/6 pt-4 mx-auto carousel">
                    @foreach($postsByCategory[$category->name] as $post)
                        <div class="max-w-md  shadow-md hover:shadow-2xl rounded-xl p-6 mb-4">
                            <div class="">
                                <div class="">
                                    <div class="relative h-62 w-full mb-3">
                                        <div class="absolute flex flex-col top-0 right-0 p-3">
                                            <button
                                                class="transition ease-in duration-300 bg-gray-800  hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                     viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <img
                                            src="{{$post->image}}"
                                            alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                                    </div>
                                    <div class="flex-auto justify-evenly">
                                        <div class="flex flex-wrap ">
                                            <div class="flex flex-col w-full justify-between min-w-0 ">
                                                <h2 class="text-3xl font-bold text-black whitespace-nowrap mr-3 ">
                                                    {{ substr($post->title, 0, 25) }}{{ strlen($post->title) > 25 ? "..." : "" }}
                                                </h2>

                                                <p class="text-lg mr-auto cursor-pointer text-gray-600 ">
                                                    {{ substr($post->description, 0, 150) }}{{ strlen($post->description) > 100 ? "..." : "" }}
                                                </p>
                                            </div>
                                        </div>

                                        <div
                                            class="flex space-x-2 text-sm font-medium justify-start mt-5 justify-center ">
                                            <button
                                                class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-blue-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-blue-600 ">
                                                <span>View More</span>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </section>
        @endforeach
    </main>
    <!-- ===== Home End ===== -->

@endsection
