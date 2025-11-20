<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - SinSkinInk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
        <div class="mb-4">
            <a href="javascript:history.back()" class="inline-flex items-center text-red-700 hover:text-black font-semibold">
                <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
                Back
            </a>
        </div>
        <h1 class="text-3xl font-bold text-center text-red-700 mb-6">Login</h1>
        <form method="post" action="<?= site_url('login') ?>" class="space-y-5">
            <?= csrf_field() ?>
            <div>
                <label for="email" class="block text-black font-semibold mb-2">Email</label>
                <input type="email" name="email" id="email" required
                    class="w-full px-4 py-2 border border-black rounded focus:outline-none focus:ring-2 focus:ring-red-700 bg-white text-black" />
            </div>
            <div>
                <label for="password" class="block text-black font-semibold mb-2">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full px-4 py-2 border border-black rounded focus:outline-none focus:ring-2 focus:ring-red-700 bg-white text-black" />
            </div>
            <button type="submit"
                class="w-full py-2 px-4 bg-red-700 text-white font-bold rounded hover:bg-black transition-colors">
                Sign In
            </button>
        </form>
        <div class="mt-6 text-center">
            <a href="<?= site_url('/signup') ?>" class="text-red-700 hover:underline font-semibold">Create an account</a>
        </div>
    </div>
</body>
</html>