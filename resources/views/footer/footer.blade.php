<footer x-data="{show: false}">
    <!-- messenger -->
    <div class="cursor-pointer py-2 px-4 fixed bottom-0 mb-8 right-0 z-50">
        <div id="messenger-box" class="w-96 h-48 bg-white shadow rounded-lg
            flex-col" x-show.transition.100ms="show">
            <div class="bg-gray-100 px-4 py-2 flex rounded-t-lg py-4">
                <div class="flex items-end pr-2">
                    <div class="w-8 h-8 bg-indigo-500 rounded-full flex justify-center items-center">
                        <img src="{{asset('assets/images/logo-digigate-white.png')}}"
                            class="w-6" alt="logo digigate">
                    </div>
                </div>

                <div class="px-2">
                    <h2 class="text-xs text-gray-600">DIGiGATE Company</h2>
                    <div class="bg-gray-200 text-sm px-4 py-2 rounded-lg">
                        Bonjour! comment pouvons-nous vous aider aujourd'hui ?
                    </div>
                </div>
                <div class="flex items-start pl-2" x-on:click="show = !show">
                    <div class="flex items-center justify-center w-8 h-8 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <title>ic_close_18px</title>
                            <g class="nc-icon-wrapper" fill="#111111">
                                <path
                                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="px-4 py-2 flex justify-center items-center">
                <div class="flex-col">
                    <div class="flex justify-center items-center">
                        <button class="py-2 px-4 bg-blue-500 rounded-lg text-white">
                            <a target="_blank" href="https://www.facebook.com/digigate.tn/">
                                Connectez-vous á Messenger
                            </a>
                        </button>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="text-xs text-gray-500">
                            Discutez avec DIGiGATE sur Messenger
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="w-full flex justify-end mt-2" x-on:click="show = !show">
            <div id="messenger-btn"
                class="w-16 h-16 rounded-full bg-blue-500 flex justify-center items-center hover:shadow-lg hover:cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-12 h-12">
                    <path
                        d="M256 0C114.624 0 0 106.112 0 237.024c0 74.592 37.216 141.12 95.392 184.576V512l87.168-47.84c23.264 6.432 47.904 9.92 73.44 9.92 141.376 0 256-106.112 256-237.024C512 106.112 397.376 0 256 0z"
                        class="fill-current text-white" />
                    <path class="fill-current text-blue-500"
                        d="M281.44 319.2l-65.184-69.536-127.2 69.536L228.96 170.656l66.784 69.536 125.632-69.536z" />
                </svg>
            </div>
        </div>
    </div>
    <div
        class="bg-indigo-100 mt-40 mx-12 lg:mx-56 -mb-8 lg:-mb-16 py-4 lg:py-16 text-gray-100 font-bold px-8 lg:px-24 relative z-40 shadow-2xl rounded-xl">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-sm lg:text-4xl text-purple-500">Prêt à commencer ?!</h2>
                <h2 class="text-sm lg:text-4xl text-blue-500"> Parle-nous aujourd'hui</h2>
            </div>
            <button class="text-xs bg-indigo-600 text-white rounded-lg px-4 py-2 w-24 lg:w-48">Get Started</button>
        </div>
    </div>
    <div class="bg-indigo-600 text-gray-200 p-8 md:px-24 xl:px-48 relative z-30">

        <div class="grid md:grid-cols-2 lg:grid-cols-4 mt-16">

            <div>
                <h2 class="text-lg py-4">Compagny</h2>
                <ul class="pl-4 text-sm">
                    <li>
                        <a href="#">A propos</a>
                    </li>
                    <li>
                        <a href="#">Premuim</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Get coupon</a>
                    </li>
                </ul>
            </div>

            <div>
                <h2 class="text-lg py-4">Aide et Soutien</h2>
                <ul class="pl-4 text-sm">
                    <li>
                        <a href="#">Nous Contacter</a>
                    </li>
                    <li>
                        <a href="#">Premuim Soutien</a>
                    </li>
                    <li>
                        <a href="#">Développement personnalisé</a>
                    </li>
                    <li>
                        <a href="#">Sponsorships</a>
                    </li>
                </ul>
            </div>


            <div>
                <h2 class="text-lg py-4">Légal</h2>
                <ul class="pl-4 text-sm">
                    <li>
                        <a href="/">Termes et Conditions</a>
                    </li>
                    <li>
                        <a href="/">Politique de Confidentialité</a>
                    </li>
                    <li>
                        <a href="/">Développement personnalisé</a>
                    </li>
                    <li>
                        <a href="/">EULA</a>
                    </li>
                </ul>
            </div>

            <div>
                <h2 class="text-lg py-4">Ressources</h2>
                <ul class="pl-4 text-sm">
                    <li>
                        <a href="/">Bootstrap UI Kit</a>
                    </li>
                    <li>
                        <a href="/">Illustrations Ira-Design</a>
                    </li>
                    <li>
                        <a href="/">OVH </a>
                    </li>
                    <li>
                        <a href="/">Tailwind Ui Kit</a>
                    </li>
                </ul>
            </div>

            <div>
                <h2 class="text-lg py-4">dernières nouvelles</h2>

            </div>

        </div>

        <div class="text-center mt-10 sm:px-12 md:px-24 xl:px-48">
            <hr class="border-gray-700">
            <h2 class="text-2xl pt-10">DIGiGATE</h2>
            <div class="flex items-center justify-around py-5">
                <div class="h-8 w-8 border border-gray-200 rounded-full flex justify-center items-center">
                    <ion-icon name="logo-github" class="text-gray-100"></ion-icon>
                </div>
                <div class="h-8 w-8 border border-gray-200 rounded-full flex justify-center items-center">
                    <ion-icon name="logo-facebook" class="text-gray-100"></ion-icon>
                </div>
                <div class="h-8 w-8 border border-gray-200 rounded-full flex justify-center items-center">
                    <ion-icon name="logo-youtube" class="text-gray-100"></ion-icon>
                </div>
                <div class="h-8 w-8 border border-gray-200 rounded-full flex justify-center items-center">
                    <ion-icon name="logo-linkedin" class="text-gray-100"></ion-icon>
                </div>
                <div class="h-8 w-8 border border-gray-200 rounded-full flex justify-center items-center">
                    <ion-icon name="logo-pinterest" class="text-gray-100"></ion-icon>
                </div>
                <div class="h-8 w-8 border border-gray-200 rounded-full flex justify-center items-center">
                    <ion-icon name="logo-behance" class="text-gray-100"></ion-icon>
                </div>
            </div>
            <p class="text-sm">© 2020 DIGiTEAM, all rights reserved.</p>
        </div>
    </div>
</footer>