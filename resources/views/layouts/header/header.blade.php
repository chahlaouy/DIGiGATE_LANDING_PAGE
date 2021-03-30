<header class="wrapper mx-auto w-full h-screen position-relative">
    <img src="{{asset('assets/images/header-lines-digigate-tunisie.png')}}" alt="header-lines-vector-digigate-tunisie" class="absolute top-0 right-0 z-10 w-full h-full bg-cover object-cover bg-center">
    @include('layouts.navbar.navbar')

    {{-- Section header title and image --}}
    <div class="relative z-30 mt-24">
        <div class="max-w-2xl">
            <h2 class="tracking-wider text-sm uppercase font-normal">digigate creativity design thinking</h2>
            <h1 class="text-8xl capitalize tracking-wide">qui somme nous</h1>
            <p class="leading-loose tracking-wide mt-4">
                DIGIGATE est une agence de communication et de marketing digitale.Nous ofrons une gamme des services de creation, planification et lancement
            </p>
            <button class="mt-4 px-5 py-3 rounded-2xl bg-blue-600 text-gray-100 text-sm flex items-center">
                <span class="mr-2">En savoir Plus</span>
                <ion-icon name="arrow-down-circle-outline" class="text-xl"></ion-icon>
            </button>
        </div>

    </div>
    {{-- header image --}}
    <div class="absolute top-32 right-0 z-30">
        <img src="{{asset('assets/images/header-image-vector-digigate-tunisie.png')}}" alt="header-image-vector-digigate-tunisie" class="max-w-2xl">
    </div>

</header>