<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenny Rose | Portfolio</title>
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
        .profile-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 4px solid rgba(255, 255, 255, 0.3);
            margin: 0 auto 1.5rem auto;
        }
    </style>
</head>
<body class="min-h-screen text-white flex flex-col items-center justify-center p-6">

<nav class="fixed top-0 w-full p-6 flex justify-center gap-8 bg-white/10 backdrop-blur-md z-50">
    <a href="/" class="font-bold border-b-2 border-white">Home</a>
    <a href="/about" class="font-bold hover:text-purple-300 transition">About</a>
    <a href="/education" class="font-bold hover:text-purple-300 transition">Education</a>
    <a href="/skills" class="font-bold hover:text-purple-300 transition">Skills</a>
    <a href="/experience" class="font-bold hover:text-purple-300 transition">Experience</a>
    <a href="/projects" class="font-bold hover:text-purple-300 transition">Projects</a>
    <a href="/gallery" class="font-bold hover:text-purple-300 transition">Gallery</a>
    <a href="/services" class="font-bold hover:text-purple-300 transition">Services</a>
    <a href="/hobbies" class="font-bold">Hobbies</a>
    <a href="/contact" class="font-bold hover:text-purple-300 transition">Contact</a>
</nav>

<!-- Main Content -->
<div class="glass-card p-10 md:p-16 rounded-3xl text-center max-w-2xl w-full mt-24">

    <!-- Profile Image Section -->
    <img src="{{ asset('images/profile/image.jpg') }}" alt="Jenny Rose Fernandez" class="profile-img rounded-full shadow-2xl">

    <h1 class="text-5xl font-extrabold mb-4 tracking-tight">Hi, I'm Jenny Rose Fernandez</h1> <!-- -->
    <p class="text-xl opacity-90 mb-8 italic">A second-year Computer Programming student who is gradually learning how to code. Enjoys building simple programs, improving skills, and exploring new technologies while continuing the journey in programming.</p> <!-- -->

    <div class="h-1 w-20 bg-white mx-auto mb-8 rounded-full"></div>

    <div class="flex flex-wrap justify-center gap-4">
        <a href="/projects" class="bg-white text-purple-700 px-8 py-3 rounded-full font-bold hover:bg-purple-100 transition shadow-lg">
            View My Works
        </a>
        <a href="/contact" class="border-2 border-white px-8 py-3 rounded-full font-bold hover:bg-white hover:text-purple-700 transition">
            Get In Touch
        </a>
    </div>
</div>

<footer class="mt-12 opacity-60 text-sm">
    © 2026 Jenny Rose | TUP - Taguig Campus <!-- -->
</footer>

</body>
</html>
