<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | Jenny Rose</title>
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
        .project-img {
            transition: transform 0.3s ease;
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 12px;
        }
        .project-img:hover {
            transform: scale(1.02);
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
    <a href="/gallery" class="font-bold border-b-2 border-white">Gallery</a>
    <a href="/services" class="font-bold hover:text-purple-300 transition">Services</a>
    <a href="/hobbies" class="font-bold">Hobbies</a>
    <a href="/contact" class="font-bold hover:text-purple-300 transition">Contact</a>
</nav>

<!-- Header -->
<div class="mt-32 mb-12 text-center">
    <h1 class="text-4xl font-extrabold mb-2 uppercase tracking-wide">Project Gallery</h1>
    <p class="opacity-80 italic">Grouped showcase of mobile and web applications</p>
</div>

<!-- Grouped Gallery Container -->
<div class="flex flex-col gap-12 max-w-6xl w-full mb-20">

    <!-- GROUP 1: MOBILE PROJECTS (Cerebro Metron & Task Manager) -->
    <div class="glass-card p-8 rounded-3xl">
        <div class="mb-6">
            <h2 class="text-3xl font-bold text-purple-200">Mobile Applications</h2>
            <p class="opacity-70">A mobile quiz app for students and productivity tools</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-2">
                <img src="{{ asset('images/mobile1.jpg') }}" class="project-img" alt="Cerebro Metron View 1">
                <p class="text-center text-sm font-medium opacity-80">Quiz Interface Design</p>
            </div>
            <div class="space-y-2">
                <img src="{{ asset('images/mobile2.jpg') }}" class="project-img" alt="Cerebro Metron View 2">
                <p class="text-center text-sm font-medium opacity-80">Student Dashboard</p>
            </div>
        </div>
    </div>

    <!-- GROUP 2: WEB PROJECTS (Laravel Systems) -->
    <div class="glass-card p-8 rounded-3xl">
        <div class="mb-6">
            <h2 class="text-3xl font-bold text-purple-200">Web Application</h2>
            <p class="opacity-70">A web-based quiz management system designed for educators to create, organize, and manage academic assessments with ease</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-2">
                <img src="{{ asset('images/web1.png') }}" class="project-img" alt="Enrollment Hub Web 1">
                <p class="text-center text-sm font-medium opacity-80">Admin Management Panel</p>
            </div>
            <div class="space-y-2">
                <img src="{{ asset('images/web2.png') }}" class="project-img" alt="Enrollment Hub Web 2">
                <p class="text-center text-sm font-medium opacity-80">Registration Portal</p>
            </div>
        </div>
    </div>

</div>

<footer class="mt-auto py-8 opacity-60 text-sm">
    © 2026 Jenny Rose Fernandez | TUP - Taguig Campus
</footer>

</body>
</html>
