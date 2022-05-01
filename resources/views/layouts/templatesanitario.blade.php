<html>
    <head>
        <link href="/css/app.css" rel="stylesheet">
        <script src="../js/menu.js"></script>
        <title>Marigest - @yield('title')</title>
    </head>

    <body class="rounded-lg ">
            
            <nav class="border-solid border-4 border-black divide-black rounded-lg">
                <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                    <div class="relative flex items-center justify-between h-16">
                        <!-- Responsive menu icon -->
                        <div class="sm:hidden flex items-center">
                            <button class="outline-none mobile-menu-button">
                                <svg class=" w-6 h-6 text-gray-500 hover:text-purple "
                                    x-show="!showMenu"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                            </button>
                        </div>
                        <!-- LOGO -->
                        <div class="w-0 rounded-lg">
                                
                                <img class="hidden sm:block h-12 " src="../img/LOGO marigest.png" alt="LOGO">
                            <!-- Primary Navbar items -->
                        </div>
                        <div class=" hidden sm:block space-x-4 rounded-lg">
                                @yield('componentiNavbar')
                        </div>

                        <div>
                            Benvenuto
                        </div>

                    </div>
                </div>
            </nav>
        <div class="rounded-lg lg:flex lg:justify-between lg:h-3/4 ">
            
            <div class="text-center rounded-lg w-auto h-1/5 lg:box-content lg:h-auto lg:w-2/4 border-solid border-4 border-black divide-black m-10 top-10">
                All'interno del box è possibile gestire i dati sanitari dei corsi
    
            </div>
            <div class="text-center rounded-lg w-auto h-1/5 lg:box-content lg:h-auto lg:w-2/4 border-solid border-4 border-black divide-black m-10 top-10">
                All'interno del box è possibile gestire i provvedimenti sanitari
            </div>
        </div>
        
        <div class="text-left p-2 ">
            <a href="#">Chi Siamo</a>
        </div>
        <footer class=" rounded-lg inline-flex justify-between p-4 w-full shadow dark:bg-gray-800 border-solid border-4 border-black divide-black ">
            <span class="text-sm text-black ">© 2022 <a href="#" class="hover:underline">MariGest</a>
            </span>
                <ul class="flex flex-wrap items-center mt-3 text-sm text-black dark:text-white sm:mt-0">
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">Facebook</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Twitter</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Instagram</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Youtube</a>
                    </li>
                </ul>
            
        </footer>


    
    </body>
</html>