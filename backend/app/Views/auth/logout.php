<?php
$redirectUrl = base_url('login');
$delaySeconds = 5;
$errors = $errors ?? [];
$old = $old ?? [];
?>
    <input
        id="email"
        name="email"
        type="email"
        autocomplete="email"
        required
        value="<?= esc($old['email'] ?? '') ?>"
        aria-invalid="<?= isset($errors['email']) ? 'true' : 'false' ?>" aria-describedby="email-error">
    <?php if (! empty($errors['email'])): ?>
        <p id="email-error" class="mt-2 text-red-600 text-sm"><?= esc($errors['email']) ?></p>
    <?php endif; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Logged out</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-6">
    <main class="w-full max-w-md bg-white rounded-lg shadow-md p-8 text-center">
        <div role="status" aria-live="polite" class="flex flex-col items-center gap-4">
            <svg class="w-16 h-16 text-green-500" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"></circle>
                <path d="M9 12.5l2 2 4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>

            <h1 class="text-2xl font-semibold text-gray-800">You are logged out</h1>
            <p class="text-sm text-gray-600">
                You have been successfully signed out. You will be redirected to the sign in page in
                <span id="countdown" class="font-medium text-gray-800"><?= $delaySeconds ?></span>s.
            </p>

            <div class="flex gap-3 mt-4">
                <a href="<?= esc($redirectUrl) ?>" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    Sign in
                </a>
                <a href="<?= esc(base_url()) ?>" class="inline-flex items-center px-4 py-2 border border-gray-200 rounded text-gray-700 hover:bg-gray-50 focus:outline-none">
                    Go to homepage
                </a>
            </div>

            <p class="text-xs text-gray-400 mt-4">If you were not expecting this, contact support.</p>
        </div>
    </main>

    <script>
        (function () {
            var seconds = <?= (int)$delaySeconds ?>;
            var countdownEl = document.getElementById('countdown');
            var redirect = "<?= esc($redirectUrl, 'js') ?>";

            if (!countdownEl) return;

            var t = setInterval(function () {
                seconds--;
                countdownEl.textContent = seconds;
                if (seconds <= 0) {
                    clearInterval(t);
                    window.location.href = redirect;
                }
            }, 1000);
        })();
    </script>
</body>
</html>