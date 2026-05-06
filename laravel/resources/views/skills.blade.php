<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills | Jenny Rose</title>
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
        .skill-badge {
            background: rgba(255, 255, 255, 0.2);
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }
        .skill-badge:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="min-h-screen text-white flex flex-col items-center p-6">

<nav class="fixed top-0 w-full p-4 flex flex-wrap justify-center gap-4 bg-white/10 backdrop-blur-md z-50 text-sm md:text-base">
    <a href="/" class="font-bold hover:text-purple-300 transition">Home</a>
    <a href="/about" class="font-bold hover:text-purple-300 transition">About</a>
    <a href="/education" class="font-bold hover:text-purple-300 transition">Education</a>
    <a href="/skills" class="font-bold border-b-2 border-white">Skills</a> <!-- Active Page -->
    <a href="/experience" class="font-bold hover:text-purple-300 transition">Experience</a>
    <a href="/projects" class="font-bold hover:text-purple-300 transition">Projects</a>
    <a href="/gallery" class="font-bold hover:text-purple-300 transition">Gallery</a>
    <a href="/services" class="font-bold hover:text-purple-300 transition">Services</a>
    <a href="/hobbies" class="font-bold hover:text-purple-300 transition">Hobbies</a>
    <a href="/contact" class="font-bold hover:text-purple-300 transition">Contact</a>
</nav>

<div class="mt-32 mb-12 text-center">
    <h1 class="text-4xl font-extrabold mb-2 uppercase tracking-wide">Technical Proficiency</h1>
    <p class="opacity-80 italic">The tools and technologies I use to build digital solutions</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl w-full mb-20">

    <div class="glass-card p-8 rounded-3xl">
        <h2 class="text-2xl font-bold text-purple-200 mb-6 flex items-center gap-2">
            <span>💻</span> Development
        </h2>
        <div class="space-y-6">
            <div>
                <div class="flex justify-between mb-2 text-sm font-medium">
                    <span>Flutter & Dart</span>
                    <span>50%</span>
                </div>
                <div class="w-full bg-white/10 rounded-full h-2.5">
                    <div class="bg-gradient-to-r from-purple-400 to-white h-2.5 rounded-full shadow-[0_0_10px_rgba(255,255,255,0.5)]" style="width: 75%"></div>
                </div>
            </div>
            <div>
                <div class="flex justify-between mb-2 text-sm font-medium">
                    <span>Java & Spring Boot</span>
                    <span>50%</span>
                </div>
                <div class="w-full bg-white/10 rounded-full h-2.5">
                    <div class="bg-gradient-to-r from-purple-400 to-white h-2.5 rounded-full shadow-[0_0_10px_rgba(255,255,255,0.5)]" style="width: 70%"></div>
                </div>
            </div>
            <div>
                <div class="flex justify-between mb-2 text-sm font-medium">
                    <span>PHP & Laravel</span>
                    <span>50%</span>
                </div>
                <div class="w-full bg-white/10 rounded-full h-2.5">
                    <div class="bg-gradient-to-r from-purple-400 to-white h-2.5 rounded-full shadow-[0_0_10px_rgba(255,255,255,0.5)]" style="width: 65%"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="glass-card p-8 rounded-3xl flex flex-col">
        <h2 class="text-2xl font-bold text-purple-200 mb-6 flex items-center gap-2">
            <span>🛠️</span> Professional Skills
        </h2>
        <div class="flex flex-wrap gap-3">
            <span class="skill-badge">MySQL Database Management</span>
            <span class="skill-badge">Data Encoding (Excel)</span>
            <span class="skill-badge">User Interface Design</span>
            <span class="skill-badge">Educational Technology</span>
            <span class="skill-badge">Time Management</span>
        </div>

        <div class="mt-auto pt-8">
            <h3 class="text-lg font-semibold text-purple-200 mb-3 text-center md:text-left">Development Tools</h3>
            <div class="flex flex-wrap justify-center md:justify-start gap-4 opacity-80">
                <span title="VS Code">VS Code</span>
                <span title="PhpStorm">PhpStorm</span>
                <span title="Android Studio">Android Studio</span>
                <span title="Laravel Herd">Laravel Herd</span>
            </div>
        </div>
    </div>

</div>

<footer class="mt-auto py-8 opacity-60 text-sm text-center">
    © 2026 Jenny Rose Fernandez | TUP - Taguig Campus
</footer>

</body>
</html>
