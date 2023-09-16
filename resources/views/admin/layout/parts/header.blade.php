<nav class="w-full z-10 bg-white md:flex-row md:flex-no-wrap md:justify-start flex items-center p-4">
    <div class="w-full mx-autp items-center flex justify-between md:flex-no-wrap flex-wrap md:px-10 px-4">
        <a class="text-gray-700 text-sm uppercase hidden lg:inline-block font-semibold" href="./index.html">@yield('title')</a>
        <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
            <a class="text-gray-600 block" href="#pablo" onclick="App.openDropdown(event,'user-dropdown')">
                <div class="items-center flex">
              <span class="w-12 h-12 text-sm text-white bg-gray-300 inline-flex items-center justify-center rounded-full">
                  <img alt="..." class="w-full rounded-full align-middle border-none shadow-lg" src="{{ env('UI_AVATAR') . auth()->user()->name }}"/></span>
                </div>
            </a>
            <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="user-dropdown">
                <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Action</a>
            </div>
        </ul>
    </div>
</nav>
