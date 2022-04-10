<header>
    <aside class="sidebar -translate-x-full" id="nav">
        <div>
            <a href="admin.php" class="group hover:font-semibold"><i class="fa-duotone fa-grid-2 group-hover:ml-3"></i>
                <span>Dashboard</span></a>
            <a href="tambah.php" class="group hover:font-semibold"><i
                    class="fa-duotone fa-square-plus group-hover:ml-3"></i>
                <span>Tambah Produk</span></a>
            <a href="tambah-kategori.php" class="group hover:font-semibold"><i
                    class="fa-duotone fa-square-plus group-hover:ml-3"></i>
                <span>Tambah Kategori</span></a>
            <a href="auth/logout.php" class="group hover:font-semibold"><i
                    class="fa-duotone fa-arrow-up-left-from-circle group-hover:ml-3 "></i>
                <span>Log Out</span></a>
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