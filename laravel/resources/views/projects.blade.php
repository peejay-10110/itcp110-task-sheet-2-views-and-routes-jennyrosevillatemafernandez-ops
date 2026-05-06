<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects | Jenny Rose</title>
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
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.37);
        }
    </style>
</head>

<body class="min-h-screen text-white flex flex-col items-center p-6">

<nav class="fixed top-0 w-full p-6 flex justify-center gap-8 bg-white/10 backdrop-blur-md z-50">
    <a href="/" class="font-bold hover:text-purple-300">Home</a>
    <a href="/about" class="font-bold hover:text-purple-300">About</a>
    <a href="/education" class="font-bold hover:text-purple-300">Education</a>
    <a href="/skills" class="font-bold hover:text-purple-300 transition">Skills</a>
    <a href="/experience" class="font-bold hover:text-purple-300">Experience</a>
    <a href="/projects" class="font-bold border-b-2 border-white">Projects</a>
    <a href="/gallery" class="font-bold">Gallery</a>
    <a href="/services" class="font-bold hover:text-purple-300 transition">Services</a>
    <a href="/hobbies" class="font-bold">Hobbies</a>
    <a href="/contact" class="font-bold hover:text-purple-300">Contact</a>
</nav>

<!-- Header -->
<div class="mt-24 mb-10 text-center">
    <h1 class="text-4xl font-extrabold">My Projects</h1>
    <p class="opacity-80 italic"> | TUP Taguig</p>
</div>

<!-- Projects -->
<div class="max-w-3xl w-full space-y-4">

    <!-- Project 1 -->
    <div class="glass-card p-5 rounded-2xl">
        <button onclick="toggleProject('cerebro')" class="w-full flex justify-between font-bold text-left">
            Cerebro Metron
            <span id="icon-cerebro">+</span>
        </button>
        <div id="cerebro" class="hidden mt-3 text-sm text-white/90">
            A quiz management platform developed using Spring Boot, MySQL, Java, and Flutter.
            Focused on system architecture and modern UI design.
        </div>
    </div>

    <!-- Project 2 -->
    <div class="glass-card p-5 rounded-2xl">
        <button onclick="toggleProject('todo')" class="w-full flex justify-between font-bold text-left">
            To-Do App
            <span id="icon-todo">+</span>
        </button>
        <div id="todo" class="hidden mt-3 text-sm text-white/90">
            A simple task management application used to practice UI design and basic programming logic.
        </div>
    </div>

    <!-- Project 3 -->
    <div class="glass-card p-5 rounded-2xl">
        <button onclick="toggleProject('cv')" class="w-full flex justify-between font-bold text-left">
            CV Profile App
            <span id="icon-cv">+</span>
        </button>
        <div id="cv" class="hidden mt-3 text-sm text-white/90">
            A basic profile application that displays personal and professional information.
        </div>
    </div>

    <!-- Project 4 -->
    <div class="glass-card p-5 rounded-2xl">
        <button onclick="toggleProject('dijkstra')" class="w-full flex justify-between font-bold text-left">
            Dijkstra’s Algorithm Implementation
            <span id="icon-dijkstra">+</span>
        </button>
        <div id="dijkstra" class="hidden mt-3 text-sm text-white/90">
            An academic project focused on implementing and understanding the shortest path algorithm.
        </div>
    </div>

</div>

<footer class="mt-16 opacity-60 text-sm">
    © 2026 Jenny Rose Fernandez | TUP - Taguig Campus
</footer>

<script>
    function toggleProject(id) {
        const content = document.getElementById(id);
        const icon = document.getElementById("icon-" + id);

        if (content.classList.contains("hidden")) {
            content.classList.remove("hidden");
            icon.textContent = "−";
        } else {
            content.classList.add("hidden");
            icon.textContent = "+";
        }
    }
</script>

</body>
</html>
