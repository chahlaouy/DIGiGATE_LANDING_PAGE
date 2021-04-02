<div class="w-full p-8 relative z-30" x-data="{scanlob: true, foot24: false, erhab: false}">
    <div class="bg-gradient-to-br from-blue-300 to-blue-800 w-full h-96 rounded-xl p-8">
        <div class="h-96 w-full rounded-xl flex" style="background: rgba(4, 41, 58, .9);">
            <div class="relative z-40 p-4 h-56 -mt-24 md:-mt-0 -ml-16 mt-8 md:-ml-24 md:mr-12 bg-black bg-opacity-75 rounded-xl" style="background: rgba(3, 31, 44, .93);">
                <ul>
                    <li class="flex text-white items-center p-2 hover:bg-gray-900 cursor-pointer rounded-xl" x-on:click="foot24 = false; scanlob = true; erhab = false">
                        <div class="w-12 h-12 flex items-center justify-center bg-gray-700 rounded-xl mr-2">
                            <ion-icon name="qr-code" class="text-2xl"></ion-icon>
                        </div>
                        <div>
                            <h2 class="font-normal text-sm">Scanlob</h2>
                            <span class="text-xs gray-100">Globleu</span>
                        </div>
                    </li>
                    <li class="flex text-white items-center p-2 hover:bg-gray-900 cursor-pointer rounded-xl" x-on:click="foot24 = true; scanlob = false; erhab = false">
                        <div class="w-12 h-12 flex items-center justify-center bg-gray-700 rounded-xl mr-2">
                            <ion-icon name="football" class="text-2xl"></ion-icon>
                        </div>
                        <div>
                            <h2 class="font-normal text-sm">Foot 24</h2>
                            <span class="text-xs gray-100">Foot24</span>
                        </div>
                    </li>
                    <li class="flex text-white items-center p-2 hover:bg-gray-900 cursor-pointer rounded-xl" x-on:click="foot24 = false; scanlob = false; erhab = true">
                        <div class="w-12 h-12 flex items-center justify-center bg-gray-700 rounded-xl mr-2">
                            <ion-icon name="car-sport" class="text-2xl"></ion-icon>
                        </div>
                        <div>
                            <h2 class="font-normal text-sm">Erhab</h2>
                            <span class="text-xs gray-100">Erhab</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="relative z-30 p-4 w-full bg-opacity-75 h-96 rounded-xl text-white" style="background: rgba(3, 31, 44, .7);">
                {{-- Scanlob --}}
                <div x-show="scanlob">
                    <div class="flex items-center justify-between">
                        <ion-icon name="checkmark-circle" class="text-2xl"></ion-icon>
                        <h1 class="Text-lg">Scanlob</h1>
                        <a target="_blank" href="https://scanlob.com" class="block">
                            <ion-icon name="link" class="text-2xl"></ion-icon>
                        </a>
                    </div>
                    <hr class="border-white my-3">
                    <div>
                        <div class="flex items-center justify-center">
                            <img src="{{asset('assets/images/avatar-scanlob-digigate.jpg')}}" alt="avatar-digigate" class="w-24 h-24 rounded-full shadow-2xl">
                        </div>
                        <p class="tracking-wider leading-loose text-xs text-gray-100 mt-8">
                            Scanlob est créee par la Société GLOBLEU SASU au capital de 1000 euros, ayant son siège 2 Rue Eugène Pottier, 78190, Trappes, immatriculée au RCS de Versailles
                        </p>
                        
                    </div>
                    <div class="absolute z-30 bottom-0 right-0 bg-gray-900 rounded-full">
                        <a target="_blank" href="https://scanlob.com" class="block w-10 h-10 flex items-center justify-center">
                            <ion-icon name="chevron-forward-circle-outline" class="text-2xl"></ion-icon>
                        </a>
                    </div>
                </div>
                {{-- Foot24 --}}
                <div x-show="foot24">
                    <div class="flex items-center justify-between">
                        <ion-icon name="checkmark-circle" class="text-2xl"></ion-icon>
                        <h1 class="Text-lg">Foot 24</h1>
                        <a target="_blank" href="http://wp.foot24.online/" class="block">
                            <ion-icon name="link" class="text-2xl"></ion-icon>
                        </a>
                    </div>
                    <hr class="border-white my-3">
                    <div>
                        <div class="flex items-center justify-center">
                            <img src="{{asset('assets/images/avatar-foot24-digigate.jpg')}}" alt="avatar-digigate" class="w-24 h-24 rounded-full shadow-2xl">
                        </div>
                        <p class="tracking-wider leading-loose text-xs text-gray-100 mt-8 text-right">
                            فوت 24 الموقع الرياضي رقم 1 في تونس
                        </p>
                        
                    </div>
                    <div class="absolute z-30 bottom-0 right-0 bg-gray-900 rounded-full">
                        <a target="_blank" href="http://wp.foot24.online/" class="block w-10 h-10 flex items-center justify-center">
                            <ion-icon name="chevron-forward-circle-outline" class="text-2xl"></ion-icon>
                        </a>
                    </div>
                </div>
                {{-- Erhab --}}
                <div x-show="erhab">
                    <div class="flex items-center justify-between">
                        <ion-icon name="checkmark-circle" class="text-2xl"></ion-icon>
                        <h1 class="Text-lg">Erhab</h1>
                        <a target="_blank" href="https://scanlob.com" class="block">
                            <ion-icon name="link" class="text-2xl"></ion-icon>
                        </a>
                    </div>
                    <hr class="border-white my-3">
                    <div>
                        <div class="flex items-center justify-center">
                            <img src="{{asset('assets/images/avatar-erhab-digigate.jpg')}}" alt="avatar-digigate" class="w-24 h-24 rounded-full shadow-2xl">
                        </div>
                        <p class="tracking-wider leading-loose text-xs text-gray-100 mt-8">
                            Scanlob est créee par la Société GLOBLEU SASU au capital de 1000 euros, ayant son siège 2 Rue Eugène Pottier, 78190, Trappes, immatriculée au RCS de Versailles
                        </p>
                        
                    </div>
                    <div class="absolute z-30 bottom-0 right-0 bg-gray-900 rounded-full">
                        <a target="_blank" href="https://scanlob.com" class="block w-10 h-10 flex items-center justify-center">
                            <ion-icon name="chevron-forward-circle-outline" class="text-2xl"></ion-icon>
                        </a>
                    </div>
                </div>


            </div>
        </div>

    </div>
    {{-- Image Our Work --}}
    <div class="absolute -bottom-12 left-0">

        <img src="{{asset('assets/images/nos-références-image-vector-digigate-tunisie.png')}}" alt="nos-références-image-vector-digigate-tunisie" class="w-40">
    </div>
</div>
