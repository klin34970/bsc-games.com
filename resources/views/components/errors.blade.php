@props(['errors'])

@if ($errors->any())
    <div class="top-error-alert flex bg-tree-600 p-2 border-b-8 border-tree-900">
        <div class="flex justify-between w-full">
            <div class="text-white">
                <span class="text-xs">{{ implode(',', $errors->all()) }}</span>
            </div>
            <div class="text-sm text-gray-500">
                <svg class="cursor-pointer" onclick="document.querySelector('.top-error-alert').remove()" height="22" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve"><path style="fill:#A66342;" d="M13.18,498.82L13.18,498.82c17.574,17.574,46.066,17.574,63.64,0l110.309-110.309l-63.64-63.64L13.18,435.18C-4.393,452.754-4.393,481.246,13.18,498.82z"/><path style="fill:#995B3D;" d="M155.309,356.691L13.18,498.82c17.574,17.574,46.066,17.574,63.64,0l110.309-110.309L155.309,356.691z"/><rect x="44.545" y="374.457" transform="matrix(0.7071 0.7071 -0.7071 0.7071 324.9489 60.417)" style="fill:#FF9F19;" width="89.999" height="95.999"/><path style="fill:#DAE2F2;" d="M112.882,335.478l63.64,63.64l9.122-9.122l157.828-85.702c114.111-62.128,157.814-161.275,168.197-286.58c0.083-1,1.899-7.304-3.912-13.115c-5.303-5.303-14.212-6.576-20.789-0.849l-42.639,37.548L134.732,314.902L112.882,335.478z"/><path style="fill:#B8BFCC;" d="M112.882,335.478l24.819,24.819l142.13-77.216c89.943-49.215,152.405-140.597,164.497-241.783L134.732,314.902L112.882,335.478z"/><path style="fill:#FFDE33;" d="M187.128,473.364c-14.637,14.637-37.972,26.092-57.275,26.304c-14.426,0-28.851-4.243-41.366-12.516l22.061-22.061c16.759,7.849,41.578,0.848,55.366-12.94c17.607-17.607,17.607-46.032,0-63.64l-63.64-63.64c-5.94-5.94-5.939-15.274,0-21.213c5.94-5.94,15.273-5.94,21.213,0l63.64,63.64c14.637,14.637,22.063,33.941,22.063,53.033C209.19,439.422,201.766,458.727,187.128,473.364z"/><rect x="82.965" y="390.358" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 -129.9263 822.8988)" style="fill:#F28618;" width="45" height="95.999"/><path style="fill:#FFBC33;" d="M187.128,473.364c-14.637,14.637-37.972,26.092-57.275,26.304c-14.426,0-28.851-4.243-41.366-12.516l22.061-22.061c16.759,7.849,41.578,0.848,55.366-12.94c17.607-17.607,17.607-46.032,0-63.64l-21.213-21.213l21.213-21.213l21.213,21.213c14.637,14.637,22.063,33.941,22.063,53.033C209.19,439.422,201.766,458.727,187.128,473.364z"/><path style="fill:#A66342;" d="M498.82,498.82L498.82,498.82c-17.574,17.574-46.066,17.574-63.64,0L324.872,388.511l63.64-63.64L498.82,435.18C516.394,452.754,516.394,481.246,498.82,498.82z"/><path style="fill:#E6EEFF;" d="M399.118,335.478l-63.64,63.64l-9.122-9.122l-157.828-85.702C54.505,242.214,10.766,143.187,0.323,18.001c-0.206-2.475-1.539-7.974,3.888-13.402C9.515-0.704,18.424-1.977,25,3.75l44.889,39.835l307.379,271.318L399.118,335.478z"/><path style="fill:#C4CAD9;" d="M377.268,314.902L69.889,43.584c12.092,101.186,72.338,190.282,162.28,239.497l142.13,77.216l24.819-24.819L377.268,314.902z"/><path style="fill:#995B3D;" d="M498.82,498.82c17.574-17.574,17.574-46.066,0-63.64L388.512,324.872l-31.82,31.82L498.82,498.82z"/><path style="fill:#FFDE33;" d="M388.512,303.659l-63.64,63.64c0,0-0.019,0.038-0.035,0.053c-29.189,29.246-29.178,76.779,0.058,106.016c14.619,14.619,38.064,26.171,57.269,26.172c14.433-0.001,28.856-4.137,41.343-12.392l-22.092-22.092c-16.714,7.925-41.515,0.912-55.324-12.898c-17.534-17.549-17.535-46.1,0.001-63.649c0.003-0.003,0.003-0.005,0.003-0.005l63.631-63.631c5.857-5.857,5.857-15.356,0-21.213C403.866,297.8,394.369,297.801,388.512,303.659z"/><path style="fill:#FFBC33;" d="M388.512,303.659l-42.426,42.426l21.213,21.213l42.426-42.426c5.857-5.857,5.857-15.356,0-21.213C403.866,297.8,394.369,297.801,388.512,303.659z"/><rect x="377.439" y="374.451" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 1019.8652 422.4587)" style="fill:#FF9F19;" width="89.999" height="95.999"/><rect x="415.871" y="358.541" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -159.0715 429.048)" style="fill:#F28618;" width="45" height="95.999"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            </div>
        </div>
    </div>
@endif