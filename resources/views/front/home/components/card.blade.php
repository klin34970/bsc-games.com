    <div class='ship flex space-x-2 w-full bg-white shadow-md overflow-hidden mx-auto rounded'>
        <div class="card w-full transition-shadow shadow-xl hover:shadow-xl text-tree-900">
            <div class="w-full card__media">
                <img src="{{ URL::asset('assets/images/decors/800x400_card_background.jpg') }}" class="h-20 w-full object-cover">
            </div>
            <div class="card__media--aside"></div>
            <div class="flex items-center p-4">
                <div class="relative flex flex-col items-center w-full">
                    <div class="porthole h-24 w-24 md rounded-full relative avatar flex items-end justify-end min-w-max absolute -top-16 flex row-start-1 row-end-3 ring-4 ring-tree-900">
                        <img class="h-24 w-24 md rounded-full relative bg-white p-2" src="{{ URL::asset('assets/images/decors/card_logo.png') }}" alt="">
                        <div class="absolute"></div>
                    </div>
                    <div class="flex flex-col space-y-1 justify-center items-center -mt-12 w-full">
                        <span class="text-md whitespace-nowrap font-semibold">BNBomb</span>
                        <p class="text-sm text-gray-500">
                            I can't start my day without a coffee cup
                        </p>
                        <div class="py-4 flex justify-center items-center w-full divide-x divide-gray-400 divide-solid">
                                            <span class="text-center px-2">
                                                <span class="font-bold">Website</span>
                                            </span>
                            <span class="text-center px-2">
                                                <span class="font-bold">Twitter</span>
                                            </span>
                            <span class="text-center px-2">
                                                <span class="font-bold">Telegram</span>
                                            </span>
                        </div>
                        <div class="py-2 flex items-end justify-end w-full">
                            <a href="{{ URL::route('item', ['uuid' => 'sds']) }}" class="saber bg-tree-600 p-2 rounded border-b-8 border-tree-900 text-white hover:bg-tree-900">
                                <span class="mr-2"></span>
                                <div class="relative inline-flex">
                                    <span class="absolute -left-8 -top-8">
                                    <svg version="1.1" height="40" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><path style="fill:#B0D3F0;" d="M512,0c0,0-9.975,135.062-129.766,250.88S185.379,397.241,185.379,397.241l-8.828,8.828l-35.31-52.966c25.688-24.982,113.434-112.11,160.927-178.052c35.399-49.081,60.91-130.03,60.91-130.03l59.674-18.008l17.126-5.208L512,0z"/><path style="fill:#90BAE1;" d="M431.757,25.07c-18.45,166.4-264.033,345.688-264.033,345.688l-3.708,3.178l-20.303-23.923l5.826-4.943c25.688-24.982,105.137-104.077,152.629-170.019c35.399-49.081,60.91-130.03,60.91-130.03l68.414-20.657L431.757,25.07z"/><polygon style="fill:#59474E;" points="114.759,361.931 47.404,440.85 73.181,471.04 167.724,414.897 "/><ellipse style="fill:#F0C419;" cx="36.705" cy="475.648" rx="36.705" ry="36.352"/><circle style="fill:#F29C1F;" cx="36.705" cy="475.648" r="17.655"/><path style="fill:#F0C419;" d="M168.73,430.919l-64.777-76.297c-3.797-3.719-5.772-8.916-5.403-14.218c0.369-5.302,3.044-10.175,7.319-13.333c8.235-3.794,18.002-1.301,23.411,5.976l64.768,76.288c7.133,7.231,7.204,18.83,0.159,26.147C185.854,440.987,174.653,438.981,168.73,430.919z"/><g><path style="fill:#3F5C6C;" d="M337.646,217.626c-3.582-0.004-6.806-2.172-8.161-5.488c-1.355-3.316-0.572-7.122,1.982-9.633c5.703-5.614,11.237-11.476,16.463-17.337c3.235-3.657,8.821-3.998,12.478-0.764c3.657,3.235,3.998,8.821,0.764,12.478c-5.482,6.179-11.299,12.314-17.293,18.211C342.217,216.727,339.977,217.638,337.646,217.626z"/><path style="fill:#3F5C6C;" d="M440.585,25.865c-5.703,48.741-23.483,95.286-51.73,135.415c-1.63,2.449-4.385,3.909-7.327,3.884c-1.757-0.021-3.472-0.541-4.943-1.501c-3.991-2.775-5.014-8.241-2.295-12.27c25.741-37.056,42.348-79.678,48.463-124.381l17.126-5.208C440.467,23.072,440.711,24.473,440.585,25.865z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                    </span>
                                </div>
                                    Play
                                <span class="ml-2"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
