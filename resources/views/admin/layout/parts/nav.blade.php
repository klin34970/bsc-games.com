<nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-no-wrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
    <div class="md:flex-col md:items-stretch md:min-h-full md:flex-no-wrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                type="button" onclick="App.toggleNavbar('|collapse-sidebar')">
            <i class="fas fa-bars"></i>
        </button>
        <a class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0" href="{{ URL::route('admin.dashboard') }}">
            {{ env('APP_NAME') }}
        </a>
        <ul class="md:hidden items-center flex flex-wrap list-none">
            <li class="inline-block relative">
                <a class="text-gray-600 block py-1 px-3" href="#pablo" onclick="App.openDropdown(event,'notification-dropdown')"><i class="fas fa-bell"></i></a>
                <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                     id="notification-dropdown">
                    <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Action 2</a>
                </div>
            </li>
            <li class="inline-block relative">
                <a class="text-gray-600 block" href="#pablo" onclick="App.openDropdown(event,'user-responsive-dropdown')">
                    <div class="items-center flex">
                      <span class="w-12 h-12 text-sm text-white bg-gray-300 inline-flex items-center justify-center rounded-full">
                          <img alt="..." class="w-full rounded-full align-middle border-none shadow-lg" src="{{ env('UI_AVATAR') . auth()->user()->name }}"/>
                      </span>
                    </div>
                </a>
                <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                     id="user-responsive-dropdown">
                    <a href="#pablo"
                       class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Action 3</a>
                </div>
            </li>
        </ul>
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden" id="|collapse-sidebar">
            <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-gray-300">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0" href="{{ URL::route('admin.dashboard') }}">
                            {{ env('APP_NAME') }}
                        </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                        <button type="button" class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" onclick="App.toggleNavbar('|collapse-sidebar')">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
            <form class="mt-6 mb-4 md:hidden">
                <div class="mb-3 pt-0">
                    <input type="text" placeholder="Search" class="px-3 py-2 h-12 border border-solid border-gray-600 placeholder-gray-400 text-gray-700 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal"/>
                </div>
            </form>
            <hr class="my-4 md:min-w-full"/>
            <h6 class="md:min-w-full text-gray-600 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                Admin
            </h6>
            <!-- Navigation -->

            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                    <a href="{{ URL::route('admin.dashboard') }}" class="text-xs uppercase py-3 font-bold block text-pink-500 hover:text-pink-600">
                        <i class="fas fa-tv mr-2 text-sm opacity-75"></i>
                        Dashboard
                    </a>
                </li>
            </ul>

            <hr class="my-4 md:min-w-full"/>
            <h6 class="md:min-w-full text-gray-600 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                {{ env('APP_NAME') }}
            </h6>
            <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
                <li class="items-center">
                    <a href="{{ URL::route('admin.forms.index') }}" class="text-gray-800 hover:text-gray-600 text-xs uppercase py-3 font-bold block">
                        <i class="fab fa-wpforms text-gray-400 mr-2 text-sm"></i>
                        Forms
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>