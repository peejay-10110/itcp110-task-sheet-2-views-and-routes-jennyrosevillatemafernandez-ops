<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me | Jenny Rose</title>
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
    <!-- Only 'About' is underlined as the active page -->
    <a href="/about" class="font-bold border-b-2 border-white">About</a>
    <a href="/education" class="font-bold hover:text-purple-300 transition">Education</a>
    <a href="/skills" class="font-bold hover:text-purple-300 transition">Skills</a>
    <a href="/experience" class="font-bold hover:text-purple-300 transition">Experience</a>
    <a href="/projects" class="font-bold hover:text-purple-300 transition">Projects</a>
    <a href="/gallery" class="font-bold hover:text-purple-300 transition">Gallery</a>
    <a href="/services" class="font-bold hover:text-purple-300 transition">Services</a>
    <a href="/hobbies" class="font-bold hover:text-purple-300 transition">Hobbies</a>
    <a href="/contact" class="font-bold hover:text-purple-300 transition">Contact</a>
</nav>

<!-- About Card -->
<div class="glass-card p-12 rounded-3xl max-w-3xl w-full mt-32 mb-20">
    <h1 class="text-4xl font-extrabold mb-8 text-center uppercase tracking-wider">About Me</h1>

    <section class="mb-6">
        <h2 class="text-2xl font-semibold mb-4 text-purple-200">Background & Journey</h2>
        <p class="text-lg leading-relaxed text-white/90">
            I am Jenny Rose Fernandez, a second-year Computer Programming student at TUP-Taguig. This course was not my first choice, and at first, programming felt challenging and overwhelming. However, through continuous learning and academic projects, I gradually developed an interest in how applications and systems work. Despite the difficulty, the experience helped me improve my patience, problem-solving skills, and motivation to keep learning.
        </p>
    </section>

    <section>
        <h2 class="text-2xl font-semibold mb-4 text-purple-200">My Motivation</h2>
        <p class="text-sm leading-relaxed text-white/90">
            Driven by a commitment to growth, I embrace every coding challenge as an opportunity to sharpen my technical proficiency. My journey as a BTVTEd student allows me to combine my passion for learning with the practical skills needed to develop impactful digital solutions.
        </p>
    </section>
</div>

<footer class="mt-auto py-8 opacity-60 text-sm">
    © 2026 Jenny Rose Fernandez | Technological University of the Philippines - Taguig
</footer>

</body>
</html>
