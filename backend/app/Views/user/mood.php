
<?= view('components/head', ['active' => 'Home']) ?>
<body class="bg-black text-white min-h-screen flex flex-col">
<div class="min-h-screen bg-white flex flex-col items-center py-12 px-4">
    <h1 class="text-4xl font-bold mb-6 text-black tracking-tight">Sin Skin Ink Moodboard</h1>
    <div class="w-full max-w-5xl mb-10">
        <h2 class="text-2xl font-bold mb-4 text-black">Color Palette</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Black -->
            <div class="flex flex-col items-center">
                <div class="w-32 h-32 rounded-lg bg-black border-4 border-gray-200 mb-4"></div>
                <span class="text-lg font-semibold text-black">Black</span>
                <span class="text-gray-500 text-sm">#000000</span>
                <p class="mt-2 text-center text-gray-700 text-sm">Classic, bold lines. Represents tradition and strength in tattoo art.</p>
            </div>

            <!-- White -->
            <div class="flex flex-col items-center">
                <div class="w-32 h-32 rounded-lg bg-white border-4 border-gray-300 mb-4"></div>
                <span class="text-lg font-semibold text-black">White</span>
                <span class="text-gray-500 text-sm">#ffffff</span>
                <p class="mt-2 text-center text-gray-700 text-sm">Clean, minimalist. Used for highlights and negative space.</p>
            </div>

            <!-- Red -->
            <div class="flex flex-col items-center">
                <div class="w-32 h-32 rounded-lg mb-4" style="background-color: #dc2626; border: 4px solid #fecaca;"></div>
                <span class="text-lg font-semibold text-red-600">Red</span>
                <span class="text-gray-500 text-sm">#dc2626</span>
                <p class="mt-2 text-center text-gray-700 text-sm">Bold, energetic accent. Symbolizes passion and intensity in tattoo art.</p>
            </div>
        </div>
    </div>

    <div class="w-full max-w-5xl mt-12">
        <h2 class="text-2xl font-bold mb-4 text-black text-left">Cards</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Inspiration Images -->
            <div class="flex flex-col items-center">
                <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=600&q=80" alt="Tattoo Studio" class="rounded-lg shadow-lg w-64 h-40 object-cover mb-2">
                <span class="text-sm text-gray-600">Studio Ambience</span>
            </div>
            <div class="flex flex-col items-center">
                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80" alt="Tattoo Art" class="rounded-lg shadow-lg w-64 h-40 object-cover mb-2">
                <span class="text-sm text-gray-600">Linework Example</span>
            </div>
            <div class="flex flex-col items-center">
                <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80" alt="Blue Ink Tattoo" class="rounded-lg shadow-lg w-64 h-40 object-cover mb-2">
                <span class="text-sm text-gray-600">Blue Accent</span>
            </div>
        </div>
    </div>
    <!-- Fonts Section -->
    <div class="mt-16 w-full max-w-5xl">
        <h1 class="text-2xl font-bold mb-4 text-black">Typography</h1>
        <div class="flex flex-row justify-center items-stretch gap-8">
            <!-- New Rocker -->
            <div class="flex flex-col items-center bg-white rounded-lg shadow p-4 flex-1">
                <h1 class="text-lg font-semibold text-black mb-2">New Rocker</h1>
                <p class="text-xl text-black mb-1" style="font-family: 'New Rocker', Arial, sans-serif;">Tattoo Bin</p>
                <span class="text-gray-500 text-sm">Logo, headings</span>
            </div>
            <!-- Cormorant Garamond -->
            <div class="flex flex-col items-center bg-white rounded-lg shadow p-4 flex-1">
                <h2 class="text-lg font-semibold text-black mb-2">Cormorant Garamond</h2>
                <p class="text-xl text-black mb-1" style="font-family: 'Cormorant Garamond', Georgia, serif;">Traditional Filipino</p>
                <span class="text-gray-500 text-sm">Quotes, highlights</span>
            </div>
            <!-- Lancelot -->
            <div class="flex flex-col items-center bg-white rounded-lg shadow p-4 flex-1">
                <span class="text-lg font-semibold text-black mb-2">Lancelot</span>
                <p class="text-xl text-black  mb-1" style="font-family: 'Lancelot', serif;">Binisaya</p>
                <span class="text-gray-500 text-sm">Accent, subheadings</span>
            </div>
        </div>
    </div>
    <!-- Action Buttons -->
    <div class="w-full max-w-5xl mt-12 flex flex-col items-start">
        <h2 class="text-2xl font-bold text-black mb-4">Buttons</h2>
        <div class="flex flex-row justify-center items-center w-full space-x-6">
            <a href="/booking" class="px-8 py-3 bg-red-600 text-white rounded-lg shadow hover:bg-red-700 transition font-bold text-lg">
                Book Appointment
            </a>
            <a href="/gallery" class="px-8 py-3 bg-black text-red-400 border-2 border-red-600 rounded-lg shadow hover:bg-red-900 hover:text-white transition font-bold text-lg">
                View Gallery
            </a>
        </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</body>
</html>