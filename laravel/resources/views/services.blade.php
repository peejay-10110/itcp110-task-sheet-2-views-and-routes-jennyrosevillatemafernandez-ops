<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services | Jenny Rose</title>
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
            transition: transform 0.3s ease;
        }
        .glass-card:hover {
            transform: translateY(-10px);
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
    <a href="/services" class="font-bold border-b-2 border-white">Services</a>
    <a href="/hobbies" class="font-bold hover:text-purple-300 transition">Hobbies</a>
    <a href="/contact" class="font-bold hover:text-purple-300 transition">Contact</a>
</nav>

<!-- Header -->
<div class="mt-32 mb-12 text-center">
    <h1 class="text-4xl font-extrabold mb-2 uppercase">My Services</h1>
    <p class="opacity-80 italic">What I can do for you as a BTVTEd student</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl w-full mb-20">

    <!-- Service 1 -->
    <div class="glass-card p-10 rounded-3xl text-center">
        <div class="text-5xl mb-4 text-center flex justify-center">💻</div>
        <h3 class="text-2xl font-bold text-purple-200 mb-2">Web Development</h3>
        <p class="text-sm opacity-80 leading-relaxed">I create simple and clean websites using Laravel and Tailwind CSS.</p>
    </div>

    <!-- Service 2 -->
    <div class="glass-card p-10 rounded-3xl text-center">
        <div class="text-5xl mb-4 text-center flex justify-center">📱</div>
        <h3 class="text-2xl font-bold text-purple-200 mb-2">Mobile App Design</h3>
        <p class="text-sm opacity-80 leading-relaxed">Building mobile interfaces for students using the Flutter framework.</p>
    </div>

    <!-- Service 3 -->
    <div class="glass-card p-10 rounded-3xl text-center">
        <div class="text-5xl mb-4 text-center flex justify-center">📄</div>
        <h3 class="text-2xl font-bold text-purple-200 mb-2">Data Encoding</h3>
        <p class="text-sm opacity-80 leading-relaxed">Organizing information in Excel with high accuracy based on library experience.</p>
    </div>

    <!-- Service 4 -->
    <div class="glass-card p-10 rounded-3xl text-center">
        <div class="text-5xl mb-4 text-center flex justify-center">🗄️</div>
        <h3 class="text-2xl font-bold text-purple-200 mb-2">Database Support</h3>
        <p class="text-sm opacity-80 leading-relaxed">Setting up basic MySQL databases for systems and school projects.</p>
    </div>

</div>

<footer class="mt-auto py-8 opacity-60 text-sm">
    © 2026 Jenny Rose Fernandez | TUP - Taguig Campus
</footer>

</body>
</html>
