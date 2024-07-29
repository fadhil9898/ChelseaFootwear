<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Favorite</title>
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24;
        }

        .material-symbols-outlined:hover {
            cursor: pointer;
        }

        .favActive {
            font-variation-settings:
                'FILL' 1,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24;
        }
    </style>
</head>

<body>
    <header>
        <div class="bg-gray-100">
            <div class="mx-auto flex max-w-screen-xl items-center justify-end gap-4 h-10 px-4">
                <?php if (!$this->session->userdata('u_name')): ?>
                <a class="text-sm font-medium text-black" href="<?php echo base_url()?>Login" target="_blank">
                    Login
                </a>
                <span class="text-sm font-medium text-black">|</span>
                <a class="text-sm font-medium text-black" href="<?php echo base_url('register')?>" target="_blank">
                    Register
                </a>
                <?php endif; ?>
                <?php if ($this->session->userdata('u_name')): ?>
                <div class="relative">
                    <span class="material-symbols-outlined cursor-pointer hover:bg-gray-200 p-2" id="profile-button">
                        account_circle
                    </span>
                    <div id="profile-dropdown"
                        class="absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-md shadow-lg hidden z-50 transition">
                        <a class="block px-4 py-2 font-medium text-sm hover:bg-gray-100 flex items-center"
                            href="<?php echo site_url('dashboard'); ?>">
                            <span class="material-symbols-outlined me-2" id="profile-button">
                                account_circle
                            </span>
                            <?php echo $this->session->userdata('nama') ?>
                        </a>

                        <hr>
                        <a class="block px-4 py-2 text-red-500 font-medium text-sm hover:bg-gray-100 flex items-center"
                            href="<?php echo site_url('dashboard/logout'); ?>">
                            <span class="material-symbols-outlined me-2" id="profile-button">
                                logout
                            </span>
                            Logout
                        </a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4">
            <a class="block" href="#">
                <span class="sr-only">Home</span>
                <img src="<?php echo base_url()?>assets/assets_web/img/icon/logo.png" class="logo-img" alt="LOGO"
                    style="width: 32px">
            </a>

            <div class="flex flex-1 items-center justify-end md:justify-between">
                <nav aria-label="Global" class="hidden md:block">
                    <ul class="flex items-center gap-6 text-sm">
                        <li>
                            <a class="text-gray-500 transition hover:text-gray-700" href="#"> About </a>
                        </li>

                        <li>
                            <a class="text-gray-500 transition hover:text-gray-700" href="#"> Careers </a>
                        </li>

                        <li>
                            <a class="text-gray-500 transition hover:text-gray-700" href="#"> History </a>
                        </li>
                    </ul>
                </nav>

                <div class="flex items-center gap-4">
                    <div class="hidden md:flex sm:gap-4">
                        <a class="" href="#">
                            <img src="<?php echo base_url()?>assets/assets_web/img/icon/favorite.svg"
                                class="rounded-md hover:bg-gray-100 p-2.5">
                        </a>

                        <div class="hidden sm:flex">
                            <a class="" href="#">
                                <img src="<?php echo base_url()?>assets/assets_web/img/icon/cart.svg"
                                    class="rounded-md hover:bg-gray-100 p-2.5">
                            </a>
                        </div>
                    </div>

                    <div class="block md:hidden">
                        <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-700">
                            <img src="assets/images/icon/menu.svg" class="text-black">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="mx-auto max-w-screen-xl px-4 min-h-screen">
        <h1 class="text-5xl font-semibold mb-8">Favorite</h1>
        <div id="favorite-items" class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Favorite items will be displayed here -->
        </div>
    </main>

    <script>
      
    </script>
</body>

</html>
