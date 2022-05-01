
    <!-- Navbar -->
<nav class="bg-gray-900">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <!-- Responsive menu icon -->
            <div class="md:hidden flex items-center">
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
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-12 w-auto" src="../img/LOGO Maripers.png" alt="Workflow">
                    <img class="hidden lg:block h-12 w-auto" src="../img/LOGO Maripers.png" alt="Workflow">
                </div>
                <!-- Primary Navbar items -->
                <div class=" hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <a href="#" class="bg-gray-900 hover:bg-gray-700 text-white px-3 py-3 rounded-md text-sm font-medium">Segreteria Corsi</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-3 rounded-md text-sm font-medium">Servizio UNI</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-3 rounded-md text-sm font-medium">Vestiario</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-3 rounded-md text-sm font-medium">Corsi Sicurezza</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-3 rounded-md text-sm font-medium">Sezione Sportiva</a>
                    </div>
                </div>
            </div>

            <!-- Profile dropdown -->
            <button type="button" class="text-white hover:text-white border-2 border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
            focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center mr-2 dark:border-blue-500 dark:text-blue-500
            dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">Login</button>

            <!-- Dropdown menu -->
            <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                    <li>
                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logout</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profilo</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Impostazioni</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden mobile-menu bg-gray-900 ">
        <ul class="">
            <li ><a href="index.html" class="block text-sm px-2 py-4 hover:bg-purple-800 transition duration-300 text-white ">Dashboard</a></li>
            <li><a href="#services" class="block text-sm px-2 py-4 hover:bg-purple-800 transition duration-300 text-white">Servizio UNI</a></li>
            <li><a href="#about" class="block text-sm px-2 py-4 hover:bg-purple-800 transition duration-300 text-white">Vestiario</a></li>
            <li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-purple-800 transition duration-300 text-white">Corsi Sicurezza</a></li>
            <li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-purple-800 transition duration-300 text-white">Sezione Sportiva</a></li>
        </ul>
    </div>

    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</nav>

