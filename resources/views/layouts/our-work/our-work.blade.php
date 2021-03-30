<section class="relative z-40 wrapper mx-auto mt-24 w-full h-screen">
    <div class="flex justify-end w-full">
        <div class="flex-1">

        </div>
        <div class="flex-1">
            <span class="capitalize tracking-wider">UN CONCENTRÉ DE TECHNOLOGIES AU SERVICE DE VOTRE PERFORMANCE !</span>
            <h2 class="tracking-wide text-7xl">Nos <span class="text-blue-600">References Recentes</span></h2>
            <h3 class="mt-4">Nous serions ravis de vous faire une place au soleil dans nos réalisations de référence !?</h3>
            <p class="tracking-wide leading-loose text-xs text-gray-700 max-w-lg">Votre presence en ligne peut vous offrir un aperçu des client potentiels et de ce qu'ils recherchent et comment répondre a leurs besoins. Et bien, le numérique permet d'afficher des publicités ciblées aux internautes qui recherchent le type de service que vous offrez</p>
            @include('layouts.our-work.cards')
        </div>
    </div>

    {{-- Image Our Work --}}
    <div class="absolute left-0 top-0">
        <img src="{{asset('assets/images/nos-références-image-vector-digigate-tunisie.png')}}" alt="nos-références-image-vector-digigate-tunisie" class="max-w-xl">
    </div>
</section>