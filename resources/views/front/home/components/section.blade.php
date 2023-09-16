<section class="py-2 mt-8 border-b-2 border-tree-900">
    <div class="uppercase bg-leaf-400 p-2 text-white border-leaf-800 border-b-4 rounded-t ml-2 w-40 text-center">
        <div class="relative">
            <span class="absolute -left-8 -top-8">{!! $icon !!}</span>
        </div>
        {{ $title }}
    </div>
    <div class="w-full py-2">
        <div class="grid xl:grid-cols-4 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-4 px-2">
            @each('front.home.components.card', $cards, 'card')
        </div>
    </div>
    <div class="w-full py-2">
        <a class="flex items-end justify-end text-tree-600 font-extrabold mr-6 hover:text-tree-900" href="">Show more</a>
    </div>
</section>