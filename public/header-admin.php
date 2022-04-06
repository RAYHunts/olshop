<header>
    <aside
        class="fixed top-0 left-0 z-40 flex h-screen w-64 -translate-x-full select-none flex-col gap-3 bg-sky-500 pt-20 text-indigo-900 shadow-lg shadow-blue-800/70 transition duration-300 ease-in-out lg:-translate-x-0"
        id="nav">
        <div class="flex h-5/6 w-full flex-col gap-1 text-left text-lg">
            <a class="group w-64 p-3 transition ease-in hover:bg-sky-200 active:bg-sky-400 hover:border-l-4 hover:border-green-900"
                href="admin.php">
                <i
                    class="fa-duotone fa-grid-2 w-9 pl-3 transition-all duration-200 ease-in group-hover:ml-3 group-hover:font-semibold"></i>
                <span class="transition-all duration-200 ease-in group-hover:font-semibold">Dashboard</span></a>
            <a class="group w-64 p-3 transition ease-in hover:bg-sky-200 active:bg-sky-400" href="tambah.php">
                <i
                    class="fa-duotone fa-square-plus w-9 pl-3 transition-all duration-200 ease-in group-hover:ml-3 group-hover:font-semibold"></i>
                <span class="transition-all duration-200 ease-in group-hover:font-semibold">Tambah Produk</span></a>
            <a class="group w-64 p-3 transition ease-in hover:bg-sky-200 active:bg-sky-400" href="tambah-kategori.php">
                <i
                    class="fa-duotone fa-square-plus w-9 pl-3 transition-all duration-200 ease-in group-hover:ml-3 group-hover:font-semibold"></i>
                <span class="transition-all duration-200 ease-in group-hover:font-semibold">Tambah Produk</span></a>
            <a class="group w-64 p-3 transition ease-in hover:bg-sky-200 active:bg-sky-400" href="logout.php">
                <i
                    class="fa-duotone fa-arrow-up-left-from-circle w-9 pl-3 transition-all duration-200 ease-in group-hover:ml-3 group-hover:font-semibold"></i>
                <span class="transition-all duration-200 ease-in group-hover:font-semibold">Log Out</span></a>
        </div>
    </aside>
    <nav
        class="fixed top-0 z-50 flex h-16 w-full items-center justify-between bg-red-200 stroke-fuchsia-300 px-3 drop-shadow-md">
        <div class="flex items-center justify-center gap-7 lg:w-60">
            <a href="./" class="flex items-center gap-3">
                <img src="assets/img/logo.jpeg" alt="Brand" class="w-8 rounded-full" />
                <span class="hidden text-lg font-bold uppercase lg:block">Ayn</span>
            </a>
            <button class="lg:hidden" id="menu">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
        <div class="flex items-center gap-3">
            <button id="dark">
                <i class="fa-solid fa-moon"></i>
            </button>
            <div class="flex items-center gap-3 border-l border-indigo-800 pl-3">
                <img src="assets/img/logo.jpeg" alt="Brand" class="w-10 rounded-full" />
                <p class="hidden lg:block">Admin</p>
            </div>
        </div>
    </nav>
</header>