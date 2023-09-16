<nav class="bg-sand-400 p-2 mt-0 w-full z-10 pin-t border-sand-800 border-b-8">
    <div class="container mx-auto flex flex-wrap items-center">
        <div class="flex w-full md:w-1/2 justify-center md:justify-start xl:w-1/3 text-tree-300 font-extrabold">
            <a class="text-tree-300 no-underline hover:text-tree-600 hover:no-underline flex items-center" href="/">
                <img height="64" width="64" src="{{ URL::asset('assets/images/decors/logo.png') }}">
                <span class="text-2xl pl-2 uppercase">{{ env('APP_NAME') }}</span>
            </a>
        </div>
        <div class="flex w-full content-center justify-between md:w-1/2 md:justify-end xl:w-1/3 pt-4 md:pt-0">
            <input type="search" class="bg-white shadow rounded border-0 p-2 placeholder-tree-300 w-full focus:ring-transparent focus:outline-none text-tree-900" placeholder="Search...">
            <button class="ml-1 pr-3 pl-3 rounded align-middle bg-tree-600 border-b-8 border-tree-900 text-white hover:bg-tree-900 focus:outline-none">
                <svg class="fill-current pointer-events-none w-4 h-4 inline" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20">
                    <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                </svg>
            </button>
            <div class="block lg:hidden">
                <button id="nav-toggle" class="flex items-center px-3 py-2 rounded ml-1 bg-tree-900 border-0 focus:outline-none">
                    <svg class="fill-current h-6 w-4" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path fill="#f9d37f" d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
                <li class="mr-3">
                    <a class="inline-block text-tree-300 no-underline hover:text-tree-600 hover:text-underline flex items-center px-4 py-2 uppercase font-extrabold" href="#">
                        Hot
                    </a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-tree-300 no-underline hover:text-tree-600 hover:text-underline flex items-center px-4 py-2 uppercase font-extrabold" href="#">
                        Latest
                    </a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-tree-300 no-underline hover:text-tree-600 hover:text-underline flex items-center px-4 py-2 uppercase font-extrabold" href="#">
                        Upcoming
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
