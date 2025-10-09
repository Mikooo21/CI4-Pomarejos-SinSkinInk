<!DOCTYPE html>
<html lang="en">
<?= view('components/head')?>
<body class="bg-black text-white min-h-screen flex flex-col">
    <!-- Header -->
    <?= view('components/header', ['active' => 'Home']) ?>

    <!-- Hero Section -->
    <?= view('components/cta', ['active' => 'Home']) ?>

    <!-- Artists Section -->
    <?= view('components/card/card', ['active' => 'Home']) ?>

    <!-- Footer -->
    <?= view('components/footer', ['active' => 'Home']) ?>

</body>
</html>