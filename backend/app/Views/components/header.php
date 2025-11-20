<?php $session = session(); ?>
<!-- Header -->
<header class="bg-gradient-to-r from-black via-red-900 to-black py-7 shadow-2xl">
    <div class="container mx-auto flex justify-between items-center px-6">
        <h1 class="text-5xl font-extrabold tracking-widest text-white">Sin Skin Ink</h1>
        <nav>
            <a href="/" class="mx-3 text-white hover:text-red-700 transition">Home</a>

            <?php if ($session->has('user')): ?>
                <!-- Show Logout and user name if logged in -->
                </span>
                <a href="<?= site_url('logout') ?>" class="mx-3 text-white hover:text-red-700 transition">Logout</a>
            <?php else: ?>
                <!-- Show Login/Sign Up if not logged in -->
                <a href="<?= site_url('login') ?>" class="mx-3 text-white hover:text-red-700 transition">Login</a>
                <a href="<?= site_url('signup') ?>" class="mx-3 text-white hover:text-red-700 transition">Sign Up</a>
            <?php endif; ?>
        </nav>
    </div>
</header>
