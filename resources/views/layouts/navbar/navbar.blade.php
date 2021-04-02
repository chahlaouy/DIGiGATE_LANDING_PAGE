<nav class="hidden wrapper mx-auto relative z-50 md:flex justify-between items-center pt-4">
    <h1 class="text-2xl">DIGiGATE</h1>
    <ul class="flex items-center text-blue-800 font-semibold">
        <li class="mr-1">
            
            <a href="{{route('home-page')}}" class="block px-3 py-2 rounded-lg bg-blue-200 text-center">
                <ion-icon name="home-outline" class="text-blue-800 text-2xl"></ion-icon>
                <span class="block">Acceuil</span>
            </a>
        </li>
        <li class="mr-1">
            <a href="#our-service" class="block px-3 py-2 rounded-lg hover:bg-blue-200 text-center">
                <ion-icon name="apps-outline" class="text-blue-800 text-2xl"></ion-icon>
                <span class="block"> Nos Services</span>
            </a>
        </li>
        <li class="mr-1">
            <a href="#nos-reference" class="block px-3 py-2 rounded-lg hover:bg-blue-200 text-center">
                <ion-icon name="bulb-outline" class="text-blue-800 text-2xl"></ion-icon>
                <span class="block">Nos Réferences</span>
            </a>
        </li>
        <li class="mr-1">
            <a href="#price-table" class="block px-3 py-2 rounded-lg hover:bg-blue-200 text-center">
                <ion-icon name="wallet-outline" class="text-blue-800 text-2xl"></ion-icon>
                <span class="block">Nos Tarif</span>
            </a>
        </li>
        <li>
            <a href="{{route('home-page')}}" class="block px-3 py-2 rounded-lg hover:bg-blue-200 text-center">
                <ion-icon name="mail-open-outline" class="text-blue-800 text-2xl"></ion-icon>
                <span class="block">Contact</span>
            </a>
        </li>
    </ul>
</nav>

{{-- mobile nav bar --}}
<nav class="md:hidden wrapper mx-auto relative z-50 flex justify-between pt-4" x-data="{show: false}">
    <h1 class="text-2xl">DIGiGATE</h1>
    <div>
        <button class="bg-blue-500 p-4 text-white" x-on:click="show = !show"><ion-icon name="menu" class="text-2xl"></ion-icon></button>
        <ul class="text-blue-800 font-semibold" x-show.transition.500ms="show">
            <li class="mr-1">
                
                <a href="{{route('home-page')}}" class="block px-3 py-2 rounded-lg bg-blue-200 text-center">
                    <ion-icon name="home-outline" class="text-blue-800 text-2xl"></ion-icon>
                    <span class="block">Acceuil</span>
                </a>
            </li>
            <li class="mr-1">
                <a href="#our-service" class="block px-3 py-2 rounded-lg hover:bg-blue-200 text-center">
                    <ion-icon name="apps-outline" class="text-blue-800 text-2xl"></ion-icon>
                    <span class="block"> Nos Services</span>
                </a>
            </li>
            <li class="mr-1">
                <a href="#nos-reference" class="block px-3 py-2 rounded-lg hover:bg-blue-200 text-center">
                    <ion-icon name="bulb-outline" class="text-blue-800 text-2xl"></ion-icon>
                    <span class="block">Nos Réferences</span>
                </a>
            </li>
            <li class="mr-1">
                <a href="#price-table" class="block px-3 py-2 rounded-lg hover:bg-blue-200 text-center">
                    <ion-icon name="wallet-outline" class="text-blue-800 text-2xl"></ion-icon>
                    <span class="block">Nos Tarif</span>
                </a>
            </li>
            <li>
                <a href="{{route('home-page')}}" class="block px-3 py-2 rounded-lg hover:bg-blue-200 text-center">
                    <ion-icon name="mail-open-outline" class="text-blue-800 text-2xl"></ion-icon>
                    <span class="block">Contact</span>
                </a>
            </li>
        </ul>
    </div>
</nav>