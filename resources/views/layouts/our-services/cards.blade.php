{{-- Cars Collection 1 --}}
<div class="mt-4 md:mt-8 md:flex md:justify-between">
    <div id="card-icon" class="p-4 rounded-2xl h-80 relative z-20" x-data="{hover: false}" x-on:mouseover="hover = true" x-on:mouseover.away="hover = false" :class="hover ? 'shadow-2xl bg-white' : 'shadow bg-gray-100'">
        <div class="transition duration-200 ease-in-out w-20 h-20 flex items-center justify-center rounded-3xl shadow-inner" :class="hover ? 'text-gray-100 bg-blue-500 border-2 border-blue-500' : 'text-gray-500 bg-gray-200 border-2 border-gray-300'">
            <ion-icon name="pencil" class="text-4xl"></ion-icon>
        </div>
        <h3 class="transition duration-200 ease-in-out capitalize mt-4 text-sm w-48" :class="hover ? 'text-blue-500' : 'text-gray-800' ">Conception Graphique</h3>
        <p class="transition duration-200 ease-in-out tracking-wider leading-loose w-48 text-xs" :class="hover ? 'text-black' : 'text-gray-700'">Conception moderne, Design novateur, conception graphique, Charte graphique, Logo, Packaging ...</p>
        <div class="flex items-center justify-end absolute bottom-0 right-0 z-30 md:-mr-4">
            <ion-icon name="arrow-forward-circle" class="text-3xl text-blue-500" x-show.transition.duration.200ms="hover"></ion-icon>
        </div>
    </div>


    <div id="card-icon" class="mt-4 md:mt-0 p-4 rounded-2xl h-80 relative z-20" x-data="{hover: false}" x-on:mouseover="hover = true" x-on:mouseover.away="hover = false" :class="hover ? 'shadow-2xl bg-white' : 'shadow bg-gray-100'">
        <div class="transition duration-200 ease-in-out w-20 h-20 flex items-center justify-center rounded-3xl shadow-inner" :class="hover ? 'text-gray-100 bg-blue-500 border-2 border-blue-500' : 'text-gray-500 bg-gray-200 border-2 border-gray-300'">
            <ion-icon name="code-working" class="text-4xl"></ion-icon>
        </div>
        <h3 class="capitalize mt-4 text-sm w-48 transition duration-200 ease-in-out" :class="hover ? 'text-blue-500' : 'text-gray-800' ">Céation des applications web</h3>
        <p class="transition duration-200 ease-in-out tracking-wider leading-loose w-48 text-xs" :class="hover ? 'text-black' : 'text-gray-700'">Conception et développement site Internet, Site e-commerce, Développement application, Rédaction & Traduction de contenu ...</p>
        <div class="flex items-center justify-end absolute bottom-0 right-0 z-30 md:-mr-4">
            <ion-icon name="arrow-forward-circle" class="text-3xl text-blue-500" x-show.transition.duration.200ms="hover"></ion-icon>
        </div>
    </div>


    <div id="card-icon" class="mt-4 md:mt-0 p-4 rounded-2xl h-80 relative z-20" x-data="{hover: false}" x-on:mouseover="hover = true" x-on:mouseover.away="hover = false" :class="hover ? 'shadow-2xl bg-white' : 'shadow bg-gray-100'">

        <div class="transition duration-200 ease-in-out w-20 h-20 flex items-center justify-center rounded-3xl shadow-inner" :class="hover ? 'text-gray-100 bg-blue-500 border-2 border-blue-500' : 'text-gray-500 bg-gray-200 border-2 border-gray-300'">
            <ion-icon name="megaphone" class="text-4xl"></ion-icon>
        </div>

        <h3 class="transition duration-200 ease-in-out capitalize mt-4 text-sm w-48" :class="hover ? 'text-blue-500' : 'text-gray-800' ">marketing digital</h3>

        <p class="tracking-wider leading-loose w-48 text-xs" :class="hover ? 'text-black' : 'text-gray-700'">Faire connaitre vos services, développer votre communication en ligne, acquérir de nouveaux clients ....</p>

        <div class="flex items-center justify-end absolute bottom-0 right-0 z-30 md:-mr-4">
            <ion-icon name="arrow-forward-circle" class="text-3xl text-blue-500" x-show.transition.duration.200ms="hover"></ion-icon>
        </div>
    </div>


    <div id="card-icon" class="mt-4 md:mt-0 p-4 rounded-2xl h-80 relative z-20" x-data="{hover: false}" x-on:mouseover="hover = true" x-on:mouseover.away="hover = false" :class="hover ? 'shadow-2xl bg-white' : 'shadow bg-gray-100'">

        <div class="transition duration-200 ease-in-out w-20 h-20 flex items-center justify-center rounded-3xl shadow-inner" :class="hover ? 'text-gray-100 bg-blue-500 border-2 border-blue-500' : 'text-gray-500 bg-gray-200 border-2 border-gray-300'">
            <ion-icon name="build" class="text-4xl"></ion-icon>
        </div>

        <h3 class="transition duration-200 ease-in-out capitalize mt-4 text-sm w-48" :class="hover ? 'text-blue-500' : 'text-gray-800' ">Réparation pc, desktop et mobile</h3>

        <p class="transition duration-200 ease-in-out tracking-wider leading-loose w-48 text-xs" :class="hover ? 'text-black' : 'text-gray-700'">Nous effectuons la réparation de toutes les marques d’ordinateurs: Acer, Asus, Compaq, Dell, HP, Lenovo, MSI, Samsung, Sony, Toshiba...</p>

        <div class="flex items-center justify-end absolute bottom-0 right-0 z-30 md:-mr-4">
            <ion-icon name="arrow-forward-circle" class="text-3xl text-blue-500" x-show.transition.duration.200ms="hover"></ion-icon>
        </div>
    </div>

</div>


{{-- Cars Collection 2 --}}
<div class="mt-4 md:mt-8 md:flex md:items-center">
    
    <div id="card-icon" class="p-4 rounded-2xl h-64 relative z-20 md:mr-24" x-data="{hover: false}" x-on:mouseover="hover = true" x-on:mouseover.away="hover = false" :class="hover ? 'shadow-2xl bg-white' : 'shadow bg-gray-100'">

        <div class="transition duration-200 ease-in-out w-20 h-20 flex items-center justify-center rounded-3xl shadow-inner" :class="hover ? 'text-gray-100 bg-blue-500 border-2 border-blue-500' : 'text-gray-500 bg-gray-200 border-2 border-gray-300'">
            <ion-icon name="cube" class="text-4xl"></ion-icon>
        </div>

        <h3 class="transition duration-200 ease-in-out capitalize mt-4 text-sm w-48" :class="hover ? 'text-blue-500' : 'text-gray-800' ">Conception et modélisation 3D</h3>

        <p class="transition duration-200 ease-in-out tracking-wider leading-loose w-48 text-xs" :class="hover ? 'text-black' : 'text-gray-700'">Conception 3d, Visualisation 3D architecture, Architecture d'intérieure, Design produit ...</p>

        <div class="flex items-center justify-end absolute bottom-0 right-0 z-30 md:-mr-4">
            <ion-icon name="arrow-forward-circle" class="text-3xl text-blue-500" x-show.transition.duration.200ms="hover"></ion-icon>
        </div>
    </div>

    <div id="card-icon" class="mt-4 md:mt-0 p-4 rounded-2xl h-64 relative z-20" x-data="{hover: false}" x-on:mouseover="hover = true" x-on:mouseover.away="hover = false" :class="hover ? 'shadow-2xl bg-white' : 'shadow bg-gray-100'">

        <div class="transition duration-200 ease-in-out w-20 h-20 flex items-center justify-center rounded-3xl shadow-inner" :class="hover ? 'text-gray-100 bg-blue-500 border-2 border-blue-500' : 'text-gray-500 bg-gray-200 border-2 border-gray-300'">
            <ion-icon name="camera" class="text-4xl"></ion-icon>
        </div>

        <h3 class="transition duration-200 ease-in-out capitalize mt-4 text-sm w-48" :class="hover ? 'text-blue-500' : 'text-gray-800' ">Photographie & Réalisation Video D'entreprise</h3>

        <p class="transition duration-200 ease-in-out tracking-wider leading-loose w-48 text-xs" :class="hover ? 'text-black' : 'text-gray-700'">Réalisation de vidéo d’entreprise, vidéo d’illustrations, Montage vidéo, Graphic motion ...</p>

        <div class="flex items-center justify-end absolute bottom-0 right-0 z-30 md:-mr-4">
            <ion-icon name="arrow-forward-circle" class="text-3xl text-blue-500" x-show.transition.duration.200ms="hover"></ion-icon>
        </div>
    </div>


    
</div>