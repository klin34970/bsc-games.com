@extends('front.layout.app')
@section('content')
    <div class="container mx-auto bg-white">
        <div class="flex flex-wrap justify-between pt-12 -mx-6">

            <div class="w-full p-6 flex flex-col flex-grow flex-shrink">
                <div class='ship space-x-2 w-full bg-white mx-auto rounded'>
                    <div class="card w-full transition-shadow shadow-xl hover:shadow-xl text-tree-900">
                        <div class="w-full card__media">
                            <img src="https://cryptonaute.fr/wp-content/uploads/2020/08/ethereum-min-800x400.jpeg" class="h-64 w-full object-cover">
                        </div>
                        <div class="card__media--aside"></div>
                        <div class="flex items-center p-4">
                            <div class="relative flex flex-col items-center w-full">
                                <div class="porthole h-56 w-56 md rounded-full relative avatar flex items-end justify-end min-w-max absolute -top-64 flex row-start-1 row-end-3 ring-4 ring-white">
                                    <img class="h-56 w-56 md rounded-full relative bg-white p-2" src="https://polkadot.network/assets/img/logo-polkadot.svg?v=c3632b171f" alt="">
                                    <div class="absolute"></div>
                                </div>
                                <div class="flex flex-col space-y-1 justify-center items-center -mt-12 w-full">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection