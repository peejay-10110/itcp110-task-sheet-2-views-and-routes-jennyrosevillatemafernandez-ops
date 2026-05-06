<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobbies | Jenny Rose</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #4c1d95 0%, #7c3aed 100%) fixed;
            font-family: 'Inter', sans-serif;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }
        .glass-card:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: scale(1.03);
        }
    </style>
</head>
<body class="min-h-screen text-white flex flex-col items-center p-6">

<nav class="fixed top-0 w-full p-4 flex flex-wrap justify-center gap-4 bg-white/10 backdrop-blur-md z-50 text-sm md:text-base">
    <a href="/" class="font-bold hover:text-purple-300 transition">Home</a>
    <a href="/about" class="font-bold hover:text-purple-300 transition">About</a>
    <a href="/education" class="font-bold hover:text-purple-300 transition">Education</a>
    <a href="/skills" class="font-bold hover:text-purple-300 transition">Skills</a>
    <a href="/experience" class="font-bold hover:text-purple-300 transition">Experience</a>
    <a href="/projects" class="font-bold hover:text-purple-300 transition">Projects</a>
    <a href="/gallery" class="font-bold hover:text-purple-300 transition">Gallery</a>
    <a href="/services" class="font-bold hover:text-purple-300 transition">Services</a>
    <a href="/hobbies" class="font-bold border-b-2 border-white">Hobbies</a>
    <a href="/contact" class="font-bold hover:text-purple-300 transition">Contact</a>
</nav>

<!-- Header -->
<div class="mt-32 mb-12 text-center">
    <h1 class="text-4xl font-extrabold mb-2 uppercase tracking-wide">Hobbies & Interests</h1>
    <p class="opacity-80 italic">Things I love to do outside the world of coding</p>
</div>

<!-- Hobbies Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl w-full mb-20">

    <!-- Hiking -->
    <div class="glass-card p-8 rounded-3xl text-center">
        <div class="text-5xl mb-4">⛰️</div>
        <h3 class="text-2xl font-bold text-purple-200 mb-2">Hiking</h3>
        <p class="text-sm opacity-80 leading-relaxed">
            I love exploring mountains and trails. Reaching the summit gives me a sense of peace and achievement.
        </p>
    </div>

    <!-- Camping -->
    <div class="glass-card p-8 rounded-3xl text-center">
        <div class="text-5xl mb-4">⛺</div>
        <h3 class="text-2xl font-bold text-purple-200 mb-2">Camping</h3>
        <p class="text-sm opacity-80 leading-relaxed">
            There is nothing better than sleeping under the stars and breathing fresh air away from the city.
        </p>
    </div>

    <!-- Swimming -->
    <div class="glass-card p-8 rounded-3xl text-center">
        <div class="text-5xl mb-4">🏊‍♀️</div>
        <h3 class="text-2xl font-bold text-purple-200 mb-2">Swimming</h3>
        <p class="text-sm opacity-80 leading-relaxed">
            I enjoy visiting beaches and waterfalls. Being in the water is my favorite way to relax and cool down.
        </p>
    </div>

    <!-- Watching Movies -->
    <div class="glass-card p-8 rounded-3xl text-center">
        <div class="text-5xl mb-4">🎬</div>
        <h3 class="text-2xl font-bold text-purple-200 mb-2">Watching Movies</h3>
        <p class="text-sm opacity-80 leading-relaxed">
            I enjoy watching various films, especially those with great storytelling and visuals.
        </p>
    </div>

    <!-- Nature Photography -->
    <div class="glass-card p-8 rounded-3xl text-center">
        <div class="text-5xl mb-4">📸</div>
        <h3 class="text-2xl font-bold text-purple-200 mb-2">Nature Photography</h3>
        <p class="text-sm opacity-80 leading-relaxed">
            I like capturing the beauty of trees, sunsets, and landscapes through my camera lens.
        </p>
    </div>

    <!-- Garden Exploring -->
    <div class="glass-card p-8 rounded-3xl text-center">
        <div class="text-5xl mb-4">🌿</div>
        <h3 class="text-2xl font-bold text-purple-200 mb-2">Exploring Nature</h3>
        <p class="text-sm opacity-80 leading-relaxed">
            I am always drawn to nature-oriented locations where I can find inspiration and tranquility.
        </p>
    </div>

</div>

<footer class="mt-auto py-8 opacity-60 text-sm">
    © 2026 Jenny Rose Fernandez | TUP - Taguig Campus
</footer>

</body>
</html>
