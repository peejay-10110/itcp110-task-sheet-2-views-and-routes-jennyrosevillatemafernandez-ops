<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education | Jenny Rose</title>
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
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }
    </style>
</head>
<body class="min-h-screen text-white flex flex-col items-center p-6">

<nav class="fixed top-0 w-full p-4 flex flex-wrap justify-center gap-4 bg-white/10 backdrop-blur-md z-50 text-sm md:text-base">
    <a href="/" class="font-bold hover:text-purple-300 transition">Home</a>
    <a href="/about" class="font-bold hover:text-purple-300 transition">About</a>
    <a href="/education" class="font-bold border-b-2 border-white">Education</a>
    <a href="/skills" class="font-bold hover:text-purple-300 transition">Skills</a>
    <a href="/experience" class="font-bold hover:text-purple-300 transition">Experience</a>
    <a href="/projects" class="font-bold hover:text-purple-300 transition">Projects</a>
    <a href="/gallery" class="font-bold hover:text-purple-300 transition">Gallery</a>
    <a href="/services" class="font-bold hover:text-purple-300 transition">Services</a>
    <a href="/hobbies" class="font-bold">Hobbies</a>
    <a href="/contact" class="font-bold hover:text-purple-300 transition">Contact</a>
</nav>

<!-- Header -->
<div class="mt-32 mb-12 text-center">
    <h1 class="text-4xl font-extrabold mb-2 uppercase tracking-wide">Educational Journey</h1>
    <p class="opacity-80 italic">From foundational learning to technical specialization</p>
</div>

<!-- Timeline Content -->
<div class="relative border-l-2 border-white/20 max-w-4xl w-full ml-4 md:ml-0 mb-20">

    <!-- College -->
    <div class="mb-12 ml-8">
        <span class="absolute -left-[11px] mt-1 h-5 w-5 rounded-full bg-white shadow-[0_0_15px_#fff]"></span>
        <div class="glass-card p-8 rounded-3xl">
            <h3 class="text-2xl font-bold text-purple-200">Technological University of the Philippines</h3>
            <p class="text-lg opacity-90 italic">Taguig Campus | 2024 - Present</p> <!-- -->
            <p class="mt-4 leading-relaxed font-semibold">Currently a 2nd Year Student</p>
            <p class="opacity-80">Bachelor of Technical Vocational Teacher Education (BTVTEd)</p>
            <p class="opacity-80">Major in Computer Programming</p>
        </div>
    </div>

    <!-- Senior High School -->
    <div class="mb-12 ml-8">
        <span class="absolute -left-[11px] mt-1 h-5 w-5 rounded-full bg-purple-400"></span>
        <div class="glass-card p-8 rounded-3xl">
            <h3 class="text-2xl font-bold text-purple-200">Florentino Galang Senior National Highschool</h3>
            <p class="text-lg opacity-90 italic">2017 - 2019</p> <!-- -->
            <p class="mt-4 leading-relaxed">Technical-Vocational-Livelihood (TVL) Track</p>
            <p class="opacity-80">Specialized in Cookery and Hospitality services</p>
        </div>
    </div>

    <!-- Junior High School -->
    <div class="mb-12 ml-8">
        <span class="absolute -left-[11px] mt-1 h-5 w-5 rounded-full bg-purple-500"></span>
        <div class="glass-card p-8 rounded-3xl">
            <h3 class="text-2xl font-bold text-purple-200">Kabankalan National High School</h3>
            <p class="text-lg opacity-90 italic">2013 - 2017</p>
            <p class="mt-4 leading-relaxed"></p>
        </div>
    </div>

    <!-- Elementary -->
    <div class="ml-8">
        <span class="absolute -left-[11px] mt-1 h-5 w-5 rounded-full bg-purple-600"></span>
        <div class="glass-card p-8 rounded-3xl">
            <h3 class="text-2xl font-bold text-purple-200">Dona Concepcion Gurrucharri Memorial School</h3>
            <p class="text-lg opacity-90 italic">2007 - 2013</p>
            <p class="mt-4 leading-relaxed"></p>
        </div>
    </div>

</div>

<footer class="mt-auto py-8 opacity-60 text-sm">
    © 2026 Jenny Rose Fernandez | TUP - Taguig Campus
</footer>

</body>
</html>
