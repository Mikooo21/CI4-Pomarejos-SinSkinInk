<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8 border border-black">
         <div class="mb-4">
            <a href="<?= site_url('/') ?>" class="inline-flex items-center text-red-700 hover:text-black font-semibold">
                <!-- Heroicon: arrow-left -->
                <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
                Back
            </a>
        </div>
        <h1 class="text-3xl font-bold text-red-600 mb-6 text-center">Sign Up</h1>
        <?php if (isset($error)): ?>
            <div class="mb-4 p-3 bg-red-100 border border-red-400 text-red-700 rounded">
                <?= esc($error) ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= site_url('signup') ?>">
            <div class="mb-4">
                <label for="last_name" class="block text-black-600 font-semibold mb-2">Last Name</label>
                <input type="text" name="last_name" id="last_name" required
                    class="w-full px-4 py-2 border border-black rounded focus:outline-none focus:ring-2 focus:ring-red-500 bg-white text-black-600">
            </div>
             <div class="mb-4">
                <label for="first_name" class="block text-black-600 font-semibold mb-2">First Name</label>
                <input type="text" name="first_name" id="first_name" required
                    class="w-full px-4 py-2 border border-black rounded focus:outline-none focus:ring-2 focus:ring-red-500 bg-white text-black-600">
            </div>
             <div class="mb-4">
                <label for="middle_name" class="block text-black-600 font-semibold mb-2">Middle Name</label>
                <input type="text" name="middle_name" id="middle_name" required
                    class="w-full px-4 py-2 border border-black rounded focus:outline-none focus:ring-2 focus:ring-red-500 bg-white text-black-600">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-black-600 font-semibold mb-2">Email</label>
                <input type="email" name="email" id="email" required
                    class="w-full px-4 py-2 border border-black rounded focus:outline-none focus:ring-2 focus:ring-red-500 bg-white text-black-600">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-black-600 font-semibold mb-2">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full px-4 py-2 border border-black rounded focus:outline-none focus:ring-2 focus:ring-red-500 bg-white text-black-600">
            </div>  
            <button type="submit"
                class="w-full py-2 px-4 bg-red-600 text-white font-bold rounded hover:bg-black transition-colors">
                Create Account
            </button>
        </form>
        <p class="mt-6 text-center text-red-600">
            Already have an account?
            <a href="<?= site_url('/login') ?>" class="text-red-600 hover:underline">Log in</a>
        </p>
    </div>
</body>
</html>